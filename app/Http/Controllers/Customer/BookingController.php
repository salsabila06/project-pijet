<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    public function index()
    {
        return view('Customer.Booking.Index');
    }
    //
}
