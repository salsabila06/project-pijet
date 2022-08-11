<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\data;
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
        $status = data::where('verifikasi_id','like',1)->get();
        return view('Admin.Verifikasi.index', compact('status'));
    }

    public function menunggu()
    {
        $status = data::where('verifikasi_id','like',2)->get();
        return view('Admin.Verifikasi.index', compact('status'));
    }

    public function ditolak()
    {
        $status = data::where('verifikasi_id','like',3)->get();
        return view('Admin.Verifikasi.index', compact('status'));
    }

    public function data_diterima($id){
        $data = data::find($id);
        $data->verifikasi_id=1;
        $data->save();
        return redirect()->back();
    }

    public function data_ditolak($id){
        $data = data::find($id);
        $data->verifikasi_id=3;
        $data->save();
        return redirect()->back();
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
