<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use App\Models\Profiless;
use App\Models\potpssss;
use Mail;
use App\Mail\cartMail;
use App\Mail\emailsend;

class ProfileController extends Controller
{
    public function register(){
        return view('fronted.register');
        }

    public function save_register(Request $request){
        $data=$request->all();
        $password=rand(9999,99999);
        $data['password']=$password;
        

        $mailData=[
            'title'=>'Send Password',
            'body'=>$password,
        ];
        Mail::to($request->email)->send(new cartMail($mailData));

        $form=Profiless::create($data);
        session()->flash('success','Registration Successfully');
        return redirect('login-fronted');
        }
    

        public function login(){
            return view('fronted.login');
        }

        public function save_login(Request $request){
            // return $request->all();
            if (Profiless::where('email',$request->email)->exists() && Profiless::where('password',$request->password)->exists() ) {
              Session::put('user',Profiless::where('email',$request->email)->value('id'));
              return redirect('cart');
            }else {
                session()->flash('error','details are not valid');
                return back();
               
            }
        }



        public function email(){
            return view('cforget.email');
        }

        public function send_otp(Request $request){
            if (Profiless::where('email',$request->email)->exists()) {
                $otp=rand(999,9999);
                $id=Profiless::where('email',$request->email)->value('id');
                $otpdata=new potpss();
                $otpdata->user_id=$id;
                $otpdata->otp=$otp;
                $otpdata->save();
                $mailData=[
                    'title'=>'Forget Password',
                    'body'=>$otp,
                ];
                Mail::to($request->email)->send(new emailsend($mailData));
                session()->flash('success','Your Otp Send Successfully');
                return redirect('verify_otp1/'.$id);

            }else {
                session()->flash('error','Your Email is Incorrect');
                return back();
            }
            }

            public function otp(){
                return view('cforget.otp');
            }
            public function verify_otp(Request $request,$id){
                if (potpss::where('user_id',$id)->value('otp')==$request->otp) {
                    $id1=potpss::where('user_id',$id)->value('id');
                    $otp=potpss::find($id1);
                    $otp->delete();
                    session()->flash('success','Otp Verify Successfully');
                    return redirect('change_password1/'.$id);
                }else {
                    session()->flash('error','Your Otp Is Invalid');
                    return back();
                }
            }
            public function password(){
                return view('forget.change_password');
            }
            public function change_password(Request $request,$id){
                if ($request->password != $request->c_password) {
                    session()->flash('error','your password does not match');
                    return back();
                }
                $data=Profiless::find($id);
                $data->password=$request->password;
                $data->update();
                session()->flash('success','your password changed successfully');
                return redirect('login-fronted');
            }
}