<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SuperAdminMenu extends Controller
{
    public function admin()
    {
        $admin = Admin::where('role', 'like', '1')->filters(request(['search']))->paginate(10);
        return view('Admin.SuperAdminMenu.Index', compact('admin'));
    }

    public function finance()
    {
        $admin = Admin::where('role', 'like', '2')->filters(request(['search']))->paginate(10);
        return view('Admin.SuperAdminMenu.Index', compact('admin'));
    }

    public function Store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
            'email' => 'required',
            'TTL' => 'required',
            'number' => 'required',
            'address' => 'required',
            'role' => 'required',
        ]);
        $validateData['password'] = Hash::make($validateData['password']);
        admin::create($validateData);

        return redirect()->route('dashboard')->with('success', 'berhasil Membuat Akun Baru');
    }


    public function destroy()
    {

    }
    //
}
