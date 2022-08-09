<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Feedback;
use app\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\QrCodeController;
use PDF;
use Mail;
use App\Exports\FeedbackExport;
use Excel;
use Storage;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class FeedbackController extends Controller
{
    public function add(Request $request)
    {
        try{
        //create object of table with tablename
        $feedback =new Feedback;
        $feedback->name= $request->name;
        $feedback->email= $request->email;
        $feedback->subject= $request->subject;
        $feedback->msg= $request->detail;
        $feedback->save();
        return view('contact');
        }
        catch(\Exception $e){
            return view('feedback.erroInfo');
        }
    }

    //Dashboard function
    public function display(){
        try{
        //showing data with id and name limited it paginated number and displaying
        $list = Feedback::select('id','name')->paginate(7);
        return view('feedback.layout',['data'=>$list]);
        }
        catch(\Exception $e){
            return view('feedback.erroInfo');
        }
    }

    //Display function
    public function destroy(Feedback $feedback,$id){
        try{
            $data=Feedback::find($id);
            $data->delete();
            return redirect('panel.dashboard');
        }
        catch(\Exception $e){
            return view('feedback.erroInfo');
        }
    }

    //Display Message for each function
    public function show($id){
        try{
        $information = app('App\Http\Controllers\AuthController')->dashboard()->information;
        $list = Feedback::select('id','name','email','subject','msg','created_at')->where('id','=',$id)->get();
        $data=json_decode($list);
        return view('feedback.show',compact('data','information'));
        }
        catch(\Exception $e){
            return view('feedback.erroInfo');
        }
    }

    //Generating PDF function
    public function pdfGenerate($id){
        try{
        $data = Feedback::select('id','name','email','subject','msg','created_at')->where('id','=',$id)->get();
        $name=$data[0]->name;
        $pdf= PDF::loadView('feedback.showpdf',compact('data'))->setOptions(['defaultFont' => 'Verdana, Geneva, Tahoma, sans-serif']);
        $pdf->save(public_path('/feedback-pdf/'.$name.'.pdf'));
        return $pdf->download($name.'.pdf');
        }
        catch(\Exception $e){
            return view('feedback.erroInfo');
        }
    }
    
    //Reply message format function
    public function replyMe($id){
        try{
        $information = app('App\Http\Controllers\AuthController')->dashboard()->information;
        $list = Feedback::select('id','name','email','subject','msg','created_at')->where('id','=',$id)->get();
        $data=json_decode($list);
        return view('feedback.emailreply',compact('data','information'));
        }
        catch(\Exception $e){
            return view('feedback.erroInfo');
        }
    }
    
    //Sending mail
    public function mailSystem(Request $request,$id){
        try{
        $information = app('App\Http\Controllers\AuthController')->dashboard()->information;
        $list = Feedback::select('id','name','email','subject','msg','created_at')->where('id','=',$id)->get();
        $data=json_decode($list);
            //mail functions
            $to_name = $data[0]->name;
            $to_email = $data[0]->email;        
            $body =$request->get('msgReplyData');
            $subject = $data[0]->subject;
            $data1 = array('name'=>'Abhijeet Kumar','body'=> $body,'subject'=> $subject);            
            $emaildata=Mail::send('feedback.mail', $data1, function ($message) use ($to_name,$to_email) {
                $message->to($to_email)->subject('tiuk reply');
            });  
        return view('feedback.show',compact('data','information'));
        }
        catch(\Exception $e){
            return view('feedback.erroInfo');
        }
    }
    
     //Generating Excel sheet
     public function excel($id)
        {
            try{
            $name = Feedback::select('name')->where('id','=',$id)->get();
            return Excel::download(new FeedbackExport, ''.$name[0]->name.'-excel.xlsx');
            }
            catch(\Exception $e){
                return view('feedback.erroInfo');
            }
        }

    

}
