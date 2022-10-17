<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\pemesanan;
use App\Models\pengguna;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

    public function index()
     {
        $jumlah_data = pengguna::all()->count();
        $jumlah_booking = pemesanan::all()->count();
        $profit = DB::table('jenispijat')
                            ->join('pemesanan', function($join){
                                $join->on('jenispijat.id','=','pemesanan.jenispijat_id');
                            })
                            ->sum('harga');
        return view('Admin.Dashboard.Index',compact('jumlah_data','jumlah_booking','profit'));
    }
}

