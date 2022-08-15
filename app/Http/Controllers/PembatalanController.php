<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
