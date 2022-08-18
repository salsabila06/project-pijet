<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\data;
use App\Models\pemesanan;

class DashboardController extends Controller
{

    public function index()
    {
        return view('Admin.Dashboard.Index',[
            'jumlah_data' => data::all()->count(), 'jumlah_booking' => pemesanan::all()->count(),
        ]);
    }
}
