<?php

namespace App\Http\Controllers;

use App\Models\reset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MalasNgodingEmail;
use Carbon\Carbon;

class Forgot_PasswordController extends Controller
{
    public function index()
    {
        return view('Forgot_Password.Index');
    }

    public function authenticate(Request $request)
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

        Mail::to($request->email)->send(new MalasNgodingEmail());

        return back()->with('success', 'We have e-mailed your password reset link');

        /*
         *
         if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/Reset');
        }

        return back()->with('Error','Emails doesnt  exists!');
*/
    }

    public function show(Request $request, $token=null)
    {
        return view('Reset_Password.Index')->with(['token'=>$token,'email'=>$request->email]);
    }
    //
}
