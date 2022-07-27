<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Reset_PasswordController extends Controller
{
    public function index(Request $request, $token=null)
    {
        return view('Reset_Password.Index')->with(['token'=>$token,'email'=>$request->email]);
    }
    //
    public function redirectTo(){
        if (Auth()->user());
    }
}
