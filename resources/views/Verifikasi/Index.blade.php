@extends('Layout.Index')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

@section('container')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4><b>Verifikasi</b></h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <p class="col-sm-3" style="padding-left: 20px"><a
                            href="{{ route('verifikasi.diterima') }}"><b>Diterima</b></a></p>
                    <p class="col-sm-4" style="padding-left: 20px"><a
                            href="{{ route('verifikasi.menunggu') }}"><b>MenungguVerifikasi</b></a></p>
                    <p class="col-sm-3" style="padding-left: 20px"><a
                            href="{{ route('verifikasi.ditolak') }}"><b>Ditolak</b></a></p>
                    <table id="example2" class="table display">
                        <thead>
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($status as $stat)
                            <tr>
                                <td>{{ $stat['username'] }}</td>
                                <td>{{ $stat['email'] }}</td>
                                <td>
                                    @if ($stat->verifikasi_id == 1)
                                        <span class="badge rounded-pill bg-success">Diterima</span>
                                    @elseif ($stat->verifikasi_id == 2)
                                        <a>
                                            <button type="button" class="admin-btn" data-bs-toggle="modal"
                                                    data-bs-target="#verifikasiModal-{{ $stat->id }}">Detail
                                                Verifikasi</button>
                                        </a>
                                    @else
                                        <span class="badge rounded-pill bg-danger">Ditolak</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @foreach ($status as $stat)
        <div class="modal fade" id="verifikasiModal-{{ $stat->id }}">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Detail Verifikasi</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="detail-main">
                        <table>
                            <tbody>
                            <img src="/image/doraemon.png" class="float-start" style="width:90px" alt="">
                            <tr>
                                <td style="padding-left: 25px">Username</td>
                                <td>:</td>
                                <td>{{ $stat->username }}</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 25px">Jenis Kelamin</td>
                                <td>:</td>
                                <td>{{ $stat->jenis_kelamin }}</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 25px">Tanggal Lahir</td>
                                <td>:</td>
                                <td>{{ $stat->tanggal_lahir }}</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 25px">Email</td>
                                <td>:</td>
                                <td>{{ $stat->email }}</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 25px">No Telepon</td>
                                <td>:</td>
                                <td>{{ $stat->number }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Modal footer -->
                    <p style="padding: 25px 0 0 25px"><b>Foto KTP</b></p>
                    <img src="/image/doraemon.png" class="rounded" style="width:90px" alt="">
                    <div class="modal-footer">
                        <div class="container-fluid">
                            <a href="{{ route('verifikasi.data.ditolak', $stat->id) }}"><button type="button"
                                                                                                class="badge rounded-pill bg-danger mx-auto d-block"
                                                                                                style="font-size:15px; border:none; height: 40px; width:175px"
                                                                                                data-bs-dismiss="modal">Tolak Verifikasi</button></a>
                        </div>
                        <div class="container-fluid">
                            <a href="{{ route('verifikasi.data.diterima', $stat->id) }}"><button type="button"
                                                                                                 class="badge rounded-pill bg-primary mx-auto d-block"
                                                                                                 style="font-size:15px; border:none; width:175px; height:40px;"
                                                                                                 data-bs-dismiss="modal">Setujui Verifikasi</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
