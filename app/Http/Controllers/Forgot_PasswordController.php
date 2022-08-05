<?php

namespace App\Http\Controllers;

use App\Models\data;
use App\Models\reset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class Forgot_PasswordController extends Controller
{
    public function showForgotForm()
    {
        return view('Forgot_Password.Index');
    }

    public function sendResetLink(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:data,email'
        ]);
        $token=\Str::random(64);
        reset::create([
            'email'=>$request->email,
            'token'=>$token,
            'created_at'=>Carbon::now(),
        ]);
        $action_link=route('reset.password.form',['token'=>$token,'email'=>$request->email]);

        Mail::send('TestMail.Index',['action_link'=>$action_link], function ($message) use ($request){
          $message->from('info@belajarlaravel.com');
          $message->to($request->email)
              ->subject('Reset Password');
        });

        return back()->with('success', 'We have e-mailed your password reset link');

    }

    public function showResetForm(Request $request, $token=null  )
    {
        return view('Reset_Password.Index')->with(['token'=>$token,'email'=>$request->email]);
    }

    public function resetPassword(Request $request)
    {

        $request->validate([
            'password'=>'required|min:5|confirmed',
            'password_confirmation'=>'required',
        ]);

        $check_token=reset::where([
            'email'=>$request->email,
            'token'=>$request->token
        ])->first();


        if (!$check_token){
            return back()->withInput()->with('fail','Invalid Token');
        }else{

            data::where('email',$request->email)->update([
                'password'=>Hash::make($request->password)
            ]);

            reset::where([
                'email'=>$request->email
            ])->delete();

            return redirect()->route('login')->with('success','Your password has been change! You can login with the new password')->with('verifiedEmail',$request->email);
        }
    }
}
