<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
    {
        return view('customer.Profile.Index',['datas' => pengguna::where('id',auth()->user()->id)->get()]);

    }
    public function edit()
    {
        return view('customer.Profile.edit');
    }


    public function update(Request $request)
    {

        $attr=$request->validate([
            'username'=>['required','string'],
            'email'=>['required','email'],
            'TTL'=>['required','string'],
            'address'=>['required','string'],
            'number'=>['required','string'],
            'bahasa'=>['required','string'],
        ]);

        auth()->user()->update($attr);

        return redirect()->intended('/Profile')->with('message','Your Profile has been updated');
    }
}
