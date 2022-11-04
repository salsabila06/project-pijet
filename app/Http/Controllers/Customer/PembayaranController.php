<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\jenispijat;
use App\Models\pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-U6WkWAxknYlzP1OrmPulTD27';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;


        $data=jenispijat::where('id',$request->jenispijat_id)->get();
        // dd($datas);

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => 0,
            ),
            'item_details' => array(
                [
                    'id' => $data->value('id'),
                    'quantity' =>1,
                    'price' => $data->sum('harga'),
                    'name' => $data->value('jasa_pijat'),
                ]
            ),
            'customer_details' => array(
                'first_name' => auth::user()->first_name,
                'last_name' => auth::user()->last_name,
                'email' => auth::user()->email,
                'phone' => auth::user()->number,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        $validateData=$request->validate([
            'waktu_booking'=>'required',
            'durasi_waktu'=>'required',
            'alamat'=>'required',
            'jenispijat_id'=>'required',
            'jenis_kelamin'=>'required',
        ]);

        pemesanan::create($validateData+['pengguna_id'=>auth()->id(), 'status'=>'menunggu']);

        return view('Post.Index',['snap_token' => $snapToken]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
