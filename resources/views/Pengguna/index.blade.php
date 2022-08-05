@extends('Layout.Index')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
@section('container')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4><b>Pengguna</b></h4>
            </div>
            <div class="card-body">
                <p style="padding-left: 20px"><b>Daftar Pengguna</b></p>
                <table id="example2" class="table display">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>No Telepon</th>
                            <th>No KTP</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pengguna as $data)
                            <tr>
                                <td>{{ $data['username'] }}</td>
                                <td>{{ $data['email'] }}</td>
                                <td>{{ $data['no_telp'] }}</td>
                                <td>{{ $data['no_ktp'] }}</td>
                                <td><a><button type="button" class="pengguna-btn"
                                            data-bs-toggle="modal" data-bs-target="#penggunaModal-{{ $data->id }}">Detail Pengguna</button></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @foreach ($pengguna as $data)
    <div class="modal fade" id="penggunaModal-{{ $data->id }}">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Detail Pengguna</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="detail-main">
                    <div>
                        <img src="/image/doraemon.png" class="mx-auto d-block" style="width:90px" alt="">
                        <table>
                            <tbody>
                                <tr>
                                    <td style="padding: 7px 60px 0px 50px">Username</td>
                                    <td>:</td>
                                    <td>{{ $data->username }}</td>
                                </tr>
                                <tr>
                                    <td style="padding-left: 50px">Jenis Kelamin</td>
                                    <td>:</td>
                                    <td>{{ $data->jenis_kelamin }}</td>
                                </tr>
                                <tr>
                                    <td style="padding-left: 50px">Tanggal Lahir</td>
                                    <td>:</td>
                                    <td>{{ $data->tanggal_lahir }}</td>
                                </tr>
                                <tr>
                                    <td style="padding-left: 50px">Email</td>
                                    <td>:</td>
                                    <td>{{ $data->email }}</td>
                                </tr>
                                <tr>
                                    <td style="padding-left: 50px">No Telepon</td>
                                    <td>:</td>
                                    <td>{{ $data->no_telp }}</td>
                                </tr>
                                <tr>
                                    <td style="padding-left: 50px">No KTP</td>
                                    <td>:</td>
                                    <td>{{ $data->no_ktp }}</td>
                                </tr>
                                <tr>
                                    <td style="padding-left: 50px">Alamat</td>
                                    <td>:</td>
                                    <td>{{ $data->alamat }}</td>
                                </tr>
                                <tr>
                                    <td style="padding-left: 50px">Domisili</td>
                                    <td>:</td>
                                    <td>{{ $data->domisili }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    @endforeach
@endsection
