<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\pembatalan;

class PembatalanController extends Controller
{

    public function index()
    {
        $pembatalan = pembatalan::paginate(10);
        return view('Admin.Pembatalan.index',compact('pembatalan'));
    }

    public function detail()
    {
        return view('Admin.Pembatalan.detail');
    }
}
