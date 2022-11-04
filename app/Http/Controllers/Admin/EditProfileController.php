<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditProfileController extends Controller
{

    public function show()
    {
        return view('admin.Profile.Index', ['datas' => admin::where('id', auth('admin')->id())->get()]);
    }

    public function edit()
    {
        return view('Admin.Profile.edit');
    }


    public function update(Request $request)
    {

        $attr = $request->validate([
            'username' => ['required', 'string'],
            'email' => ['required', 'email'],
            'TTL' => ['required', 'string'],
            'address' => ['required', 'string'],
            'number' => ['required', 'string'],
            'language' => ['required', 'string'],
        ]);

        auth('admin')->user()->update($attr);

        return redirect()->intended(route('profile'))->with('message', 'Your Profile has been updated');
    }
}
