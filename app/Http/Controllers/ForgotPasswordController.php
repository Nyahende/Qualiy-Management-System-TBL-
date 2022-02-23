<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\User;
use Mail;
use Hash;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    public function showForgetPasswordForm(){

      return view('qms.forgotpassword');

    }
    public function  submitForgetPasswordForm(Request $request){
      $request->validate([
          'email'=>'required|email|exists:workers',
      ]);
      $token = Str::random(64);

      DB::table('password_resets')->insert([
          'email'=>$request->email,
          'token' => $token,
          'created_at'=>Carbon::now()
      ]);

      Mail::send('qms.forgotpassword',['token'=>$token], function($message) use($request){
          $message->to($request->email);
          $message->subject('Reset Password');
      });
      return back()->with('message','We have e-mailed your password reset link!');
    }
    public function showResetPasswordForm($token){
         return view('qms.passwordreset', ['token' => $token]);
    }
    public function submitResetPasswordForm(Request $request){
          $request->validate([
              'email'=>'required|email|exists:workers',
              'password'=>'required|string|min:5|confirmed',
              'password_confirmation'=>'required'
          ]);
          $updatePassword = DB::table('password_resets')
                                ->where([
                                    'email'=>$request->email,
                                    'token'=>$request->token
                                ])
                                ->first();
        if(!$updatePassword){
            return back()->withInput()->with('error','Invalid token!');
        }

        $user = User::where('email',$request->email)
                          ->update(['password'=>Hash::make($request->password)]);
        DB::table('password_resets')->where(['email'=>$request->email])->delete();

        return redirect('index')->with('message','Your password has been changed!');
    }
}
