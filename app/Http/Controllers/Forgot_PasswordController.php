<?php

namespace App\Http\Controllers;

use App\Mail\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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

        Mail::to($request->email)->send(new Email());

        return back()->with('pesan','Emali berhasil di kirim');

    }
    //
}
