<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditProfileController extends Controller
{

    public function edit()
    {
        return view('Profile.edit');
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

        auth('admin')->user()->update($attr);

        return redirect()->intended('/Profile')->with('message','Your Profile has been updated');
    }
}
