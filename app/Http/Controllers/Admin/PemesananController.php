<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        $status = pemesanan::where('status','like','Berhasil')->filters(request(['search']))->paginate(10);
        return view('Admin.Pemesanan.Index', compact('status'));

    }

    public function menunggu()
    {
        $status = pemesanan::where('status','like','Menunggu')->filters(request(['search']))->paginate(10);
        return view('Admin.Pemesanan.Index', compact('status'));
    }

    public function ditolak()
    {
        $status = pemesanan::where('status','like','Ditolak')->filters(request(['search']))->paginate(10);
        return view('Admin.Pemesanan.Index', compact('status'));
    }

    public function pemesanan_Berhasil($id)
    {
        $data = pemesanan::find($id);
        $data->status='Berhasil';
        $data->save();
        return redirect()->back();
    }

    public function pemesanan_Ditolak($id)
    {
        $data = pemesanan::find($id);
        $data->status='Ditolak';
        $data->save();
        return redirect()->back();
    }

    public function riwayat_transaksi(Request $request){
        $datas =  pemesanan::where('pengguna_id','=',$request->idUser)->with('pengguna')->with('jenispijat')->get();
        return response()->json($datas);
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
