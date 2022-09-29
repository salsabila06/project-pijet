<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\reset;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ResetPassword extends Controller
{

    public function showResetForm(Request $request, $token = null)
    {
        return view('Customer.Reset_Password.Index')->with(['token' => $token, 'email' => $request->email]);
    }

    public function updatePassword(Request $request)
    {

        $request->validate([
            'password' => 'required|min:5|confirmed',
            'password_confirmation' => 'required',

        ]);

        Admin::where('email', $request->email)->update([
            'password' => Hash::make($request->password)
        ]);

        reset::where([
            'email' => $request->email
        ])->delete();

        return redirect()->route('superadmin')->with('success', 'Your password has been change! You can login with the new password')->with('verifiedEmail', $request->email);
    }
}
