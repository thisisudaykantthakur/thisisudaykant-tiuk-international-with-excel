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
        //create object of table with tablename
        $feedback =new Feedback;
        $feedback->name= $request->name;
        $feedback->email= $request->email;
        $feedback->subject= $request->subject;
        $feedback->msg= $request->detail;
        $feedback->save();
        return view('contact');
    }

    public function display(){
        $list = Feedback::select('id','name')->paginate(15);
        return view('feedback.layout',['data'=>$list]);
    }

    public function destroy(Feedback $feedback,$id){
            $data=Feedback::find($id);
            $data->delete();
            return redirect('panel.dashboard');
    }
    public function show($id){
        $information = app('App\Http\Controllers\AuthController')->dashboard()->information;
        $list = Feedback::select('id','name','email','subject','msg','created_at')->where('id','=',$id)->get();
        $data=json_decode($list);
        return view('feedback.show',compact('data','information'));
    }

    public function pdfGenerate($id){
        $data = Feedback::select('id','name','email','subject','msg','created_at')->where('id','=',$id)->get();
        $name=$data[0]->name;
        $pdf= PDF::loadView('feedback.showpdf',compact('data'))->setOptions(['defaultFont' => 'Verdana, Geneva, Tahoma, sans-serif']);
        //Storage::put('public/feedback-pdf/'.$name.'.pdf', $pdf->output());
        return $pdf->download($name.'.pdf');
    }
    
    public function replyMe($id){
        $information = app('App\Http\Controllers\AuthController')->dashboard()->information;
        $list = Feedback::select('id','name','email','subject','msg','created_at')->where('id','=',$id)->get();
        $data=json_decode($list);
        return view('feedback.emailreply',compact('data','information'));
    }
    
    public function mailSystem(Request $request,$id){
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

     public function excel($id)
        {
            $name = Feedback::select('name')->where('id','=',$id)->get();
            return Excel::download(new FeedbackExport, ''.$name[0]->name.'-excel.xlsx');
        }

    

}
