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
    <div class="content">
        <div class="card-header ">
            <div class="col-auto">
                <h2>Verifikasi</h2>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg">
            <ul class="navbar-nav" style="text-align: left">
                <li class="nav-item">
                    <a class="statusMenu " id="menu-berhasil" aria-current="page"
                       href="{{ route('verifikasi.diterima') }}"><b> Diterima</b></a>
                <li class="nav-item">
                    <a class="statusMenu ms-5" id="menu-menunggu" aria-current="page"
                       href="{{ route('verifikasi.menunggu') }}"><b> MenungguVerifikasi</b></a>
                </li>
                <li class="nav-item">
                    <a class="statusMenu ms-5" id="menu-ditolak" aria-current="page"
                       href="{{ route('verifikasi.ditolak') }}"><b> Ditolak</b></a>
                </li>
            </ul>
            <form action="?" class="col-auto ms-auto">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" value="{{ request()->search }}" placeholder="Search..."
                           name="search">
                    <button class="btn btn-secondary" type="submit">Search</button>
                </div>
            </form>
        </nav>
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
                                    Verifikasi
                                </button>
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
    <div class="d-flex justify-content-center">
        {{ $status->links() }}
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
                            <a href="{{ route('verifikasi.data.ditolak', $stat->id) }}">
                                <button type="button"
                                        class="badge rounded-pill bg-danger mx-auto d-block"
                                        style="font-size:15px; border:none; height: 40px; width:175px"
                                        data-bs-dismiss="modal">Tolak Verifikasi
                                </button>
                            </a>
                        </div>
                        <div class="container-fluid">
                            <a href="{{ route('verifikasi.data.diterima', $stat->id) }}">
                                <button type="button"
                                        class="badge rounded-pill bg-primary mx-auto d-block"
                                        style="font-size:15px; border:none; width:175px; height:40px;"
                                        data-bs-dismiss="modal">Setujui Verifikasi
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
