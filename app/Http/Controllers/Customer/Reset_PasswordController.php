<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Reset_PasswordController extends Controller
{
    public function index(Request $request, $token=null)
    {
        return view('Customer.Reset_Password.Index')->with(['token'=>$token,'email'=>$request->email]);
    }
    //
    public function redirectTo(){
        if (Auth()->user());
    }
}
