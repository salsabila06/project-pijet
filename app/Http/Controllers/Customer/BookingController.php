<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\pemesanan;
use Illuminate\Http\Request;


class BookingController extends Controller
{
    public function create()
    {
        if (!auth()->check())
        {
            return view('Customer.Login.Index');
        }
        return view('Customer.Booking.Index');
    }

    public function store(Request $request)
    {

        $validateData=$request->validate([
            'waktu_booking'=>'required',
            'durasi_waktu'=>'required',
            'jenispijat_id'=>'required',
            'alamat'=>'required',
            'jenis_kelamin'=>'required',
        ]);


        pemesanan::create($validateData+['pengguna_id'=>auth()->user()->id,
                                    'status'=>'menunggu']);

        return redirect()->route('home')->with('success','Anda Berhasil Melakukan Booking');
    }
    //
}
