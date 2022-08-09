<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AuthUser;
use Hash;
use Session;



class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function registration(){
        return view('auth.registration');
    }
    
    public function registerUser(Request $request){
        try{
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:auth_users',
            'password'=>'required|min:5|max:12'
        ]);
        //storing data to database
        $user = new AuthUser();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $response = $user->save();
        //Notification if data is save or not on database    
        if($response)
            {
                return back()->with('success','You have registered Successfully');
            }
            else
            {
                return back()->with('fail','Something wrong, try again');
            }
        }
        catch(\Exception $e){
            return view('feedback.error');
        }
        
    }
    public function loginUser(Request $request){
        try{
            $request->validate([
                'email'=>'required|email',
                'password'=>'required|min:5|max:12'
            ]);
            $user = AuthUser::where('email','=',$request->email)->first();
            //dd($user->email);
    
            if($user->email=='admin@tiuk.com'){
                if(Hash::check($request->password, $user->password)){
                    $request->session()->put('loginId',$user->id);
                    return redirect('panel.dashboard');
                }
                else{
                    return back()->with('fail','Password not matches');
                }
            }
            else{
                return back()->with('fail','This email is not allowed. Please check it again');
            }
        }
        catch(\Exception $e){
            return view('feedback.error');
        }
    }

    public function dashboard(){
        try{
        //calling FeedbackController
        $data=app('App\Http\Controllers\FeedbackController')->display()->data;
        $information = array();
        if(Session::has('loginId')){
            $information = AuthUser::where('id','=',Session::get('loginId'))->first();
        }
        return view('panel.dashboard',compact('information','data'));
    }
    catch(\Exception $e){
        return view('feedback.error');
    }
    }
    public function logout(){
        try{
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('auth.login');
        }
    }
    catch(\Exception $e){
        return view('feedback.error');
    }
    }
}
