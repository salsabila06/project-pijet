<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class EditDataController extends Controller
{
    public function edit(Request $request)
    {
        $attr = $request->validate([
            'username' => ['required', 'string'],
            'email' => ['required', 'email'],
            'TTL' => ['required', 'string'],
            'address' => ['required', 'string'],
            'number' => ['required', 'string'],
            'role' => ['required', 'string']
        ]);
        admin::where('role', 'like', $request->role)->update($attr);

        return redirect()->intended(route('superadmin'))->with('message', 'Your Profile has been updated');
    }

    public function destroy($id)
    {
        $data = Admin::find($id);
        $data->delete();
        return redirect()->intended(route('superadmin'))->with('delete', 'Data has been Delete');
    }
}
