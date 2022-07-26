<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Forgot_PasswordController extends Controller
{
    public function index()
    {
        return view('Forgot_Password.Index');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email'
        ]);

        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/Reset');
        }

        return back()->with('Error','Emails doesnt  exists!');

    }
    //
}
