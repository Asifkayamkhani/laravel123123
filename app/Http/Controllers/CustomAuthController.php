<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use App\Models\otp;
use Mail;
use App\Mail\DemoMail;
use Illuminate\Support\Facades\Auth;
class CustomAuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->withSuccess('Signed in');
        }
        return redirect("login")->withSuccess('Login details are not valid');
    }
    public function registration()
    {
        return view('auth.register');
    }
    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        $data = $request->all();
        $check = $this->create($data);
        return redirect("dashboard")->withSuccess('You have signed-in');
    }
    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }
    public function dashboard()
    {
        if (Auth::check()) {
            return view('index');
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    public function signOut()
    {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }

   public function email(){
    return view('forget.email');
   }
   public function send_otp(Request $request){
    if (User::where('email',$request->email)->exists()) {
        $otp=rand(9999,99999);
        $id=User::where('email',$request->email)->value('id');
        $otpdata=new otp();
        $otpdata->user_id=$id;
        $otpdata->otp=$otp;
        $otpdata->save();
        $mailData = [
            'title' => 'Send Otp',
            'body' => $otp,
        ];
         
        Mail::to($request->email)->send(new DemoMail($mailData));
        session()->flash('success','Otp Send Successfully');
        return redirect('verify_otp/'.$id);
           
    }else{
        session()->flash('error','Your email is Invalid');
        return back();
    }
    }
    public function otp(){
        return view('forget.otp');
    }
    public function verify_otp(Request $request,$id){
        if (otp::where('user_id',$id)->value('otp')==$request->otp) {
            $id1=otp::where('user_id',$id)->value('id');
            $otp=otp::find($id1);
            $otp->delete();
            session()->flash('success','Otp Verify Successfully');
            return redirect('change_password/'.$id);
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
        $data=User::find($id);
        $data->password=Hash::make($request->password);
        $data->update();
        session()->flash('success','your password changed successfully');
        return redirect('login');
    }
    }
