@extends('Layout.Index')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    a.statusMenu:link {
        text-decoration: none
    }

    /* visited link */
    a.statusMenu:visited {
        color: #0cb78b;
    }

    /* mouse over link */
    a.statusMenu:hover {
        color: red;
        text-decoration: underline;
    }

    /* selected link */
    a.statusMenu:active {
        color: blue;
        text-decoration: underline;
    }
</style>
@section('container')
    <div class="card" style="margin-top: 25px">
        <div class="content" >
            <div class="card-header " style="margin-bottom: 30px">
                <div class="row">
                    <div class="col-auto">
                        <h4>Pengguna</h4>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg" style="margin-left: 20px">
                <ul class="navbar-nav" style="text-align: left">
                    <li class="nav-item">
                        <a class="statusMenu " id="menu-berhasil" aria-current="page"
                           href="{{ route('pengguna') }}"><b> Customer</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="statusMenu ms-5" id="menu-menunggu" aria-current="page"
                           href="{{ route('tampil_pemesanan_menunggu') }}"><b> Mitra</b></a>
                    </li>
                </ul>
                <form action="?" class="col-auto ms-auto" style="margin-right: 20px">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" value="{{ request()->search }}"
                               placeholder="Search..."
                               name="search">
                        <button class="btn btn-secondary" type="submit">Search</button>
                    </div>
                </form>
            </nav>
            <div class="card-body scroll">
                <table id="example" class="table display">
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
                            <td><a>
                                    <button type="button" class="admin-btn"
                                            data-bs-toggle="modal" data-bs-target="#penggunaModal-{{ $data->id }}">
                                        Detail
                                        Pengguna
                                    </button>
                                </a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center">
                {{ $pengguna->links() }}
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="{{asset('/js/app.js')}}"></script>
@endsection
