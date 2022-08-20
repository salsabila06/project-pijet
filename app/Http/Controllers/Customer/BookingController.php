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
            'jenis_pijat'=>'required',
            'alamat'=>'required',
        ]);
        pemesanan::create($validateData+['customer_id'=>auth()->id(),
                                    'status'=>'menunggu']);

        return redirect()->route('home')->with('success','Anda Berhasil Melakukan Booking');
    }
    //
}
