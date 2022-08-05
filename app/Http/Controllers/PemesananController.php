<?php

namespace App\Http\Controllers;

use App\Models\pemesanan;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function berhasil()
    {
        $status = pemesanan::where('status','like','Berhasil')->get();
        return view('Pemesanan.berhasil', compact('status'));
    }

    public function menunggu()
    {
        $status = pemesanan::where('status','like','Menunggu')->get();
        return view('Pemesanan.menunggu', compact('status'));
    }

    public function ditolak()
    {
        $status = pemesanan::where('status','like','Ditolak')->get();
        return view('Pemesanan.ditolak', compact('status'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function show(pemesanan $pemesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function edit(pemesanan $pemesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pemesanan $pemesanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(pemesanan $pemesanan)
    {
        //
    }
}
