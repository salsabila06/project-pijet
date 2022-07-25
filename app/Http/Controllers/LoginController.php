<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\data;

class LoginController extends Controller
{
    public function index()
    {
        return view('Login.Index');
    }



    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'first_name' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->with('loginError','Login failed!');

    }

    public function show()
    {
        return view('Profile.Index',['datas'=>data::where('id',auth()->user()->id)->get()]);
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerate();

        return redirect('/');
    }
    //
}
