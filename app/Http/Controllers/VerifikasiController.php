<?php

namespace App\Http\Controllers;

use App\Models\verifikasi;
use Illuminate\Http\Request;

class VerifikasiController extends Controller
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

    public function diterima()
    {
        $status = verifikasi::where('status','like','Diterima')->get();
        return view('Verifikasi.index', compact('status'));
    }

    public function menunggu()
    {
        $status = verifikasi::where('status','like','Menunggu')->get();
        return view('Verifikasi.index', compact('status'));
    }

    public function ditolak()
    {
        $status = verifikasi::where('status','like','Ditolak')->get();
        return view('Verifikasi.index', compact('status'));
    }

    public function data_diterima($stat){
        $status = verifikasi::findOrFail($stat);
        $status->status='Diterima';
        $status->save();
        return back();
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
     * @param  \App\Models\verifikasi  $verifikasi
     * @return \Illuminate\Http\Response
     */
    public function show(verifikasi $verifikasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\verifikasi  $verifikasi
     * @return \Illuminate\Http\Response
     */
    public function edit(verifikasi $verifikasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\verifikasi  $verifikasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, verifikasi $verifikasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\verifikasi  $verifikasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(verifikasi $verifikasi)
    {
        //
    }
}
