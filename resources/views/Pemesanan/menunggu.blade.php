@extends('Layout.Index')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

@section('container')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4><b>Pemesanan</b></h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <p class="col-sm-3" style="padding-left: 20px"><a href="#"><b>Berhasil</b></a></p>
                    <p class="col-sm-4" style="padding-left: 20px"><a href="{{ route('pemesanan.menunggu') }}"><b>Menunggu Pembayaran</b></a></p>
                    <p class="col-sm-3" style="padding-left: 20px"><a href="{{ route('pemesanan.ditolak') }}"><b>Ditolak</b></a></p>
                    <table id="example2" class="table display">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Jasa Pijat</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($status as $stat)
                                <tr>
                                    <td>{{ $stat['username'] }}</td>
                                    <td>{{ $stat['jasa_pijat'] }}</td>
                                    <td>{{ $stat['status'] }}</td>
                                    <td><a href="#/{{ $stat->id }}"><button type="button"
                                        class="btn btn-info">Riwayat Pemesanan</button></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


