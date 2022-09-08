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
        <div class="content">
            <div class="card-header " style="margin-bottom: 30px">
                <div class="row">
                    <div class="col-auto">
                        <h4>Pemesanan</h4>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg" style="margin-left: 20px">
                <ul class="navbar-nav" style="text-align: left">
                    <li class="nav-item">
                        <a class="statusMenu " id="menu-berhasil" aria-current="page"
                           href="{{ route('tampil_pemesanan_berhasil') }}"><b> Berhasil</b></a>
                    <li class="nav-item">
                        <a class="statusMenu ms-5" id="menu-menunggu" aria-current="page"
                           href="{{ route('tampil_pemesanan_menunggu') }}"><b> Menunggu</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="statusMenu  ms-5" id="menu-ditolak" aria-current="page"
                           href="{{ route('tampil_pemesanan_ditolak') }}"><b> Ditolak</b></a>
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
                            <td>{{ $stat->pengguna->username }}</td>
                            <td>{{ $stat->jenispijat->jasa_pijat }}</td>
                            <td>{{ $stat->status }}</td>
                            @if(Auth::guard('admin')->user()->role=="1")
                                <td><a href="{{ $stat->pengguna->username }}">
                                        <button type="button" class="btn btn-info">Riwayat Pemesanan</button>
                                    </a>
                                </td>
                            @else
                                @if ($stat->status == 'Berhasil')
                                    <span class="badge rounded-pill bg-success">Diterima</span>
                                @elseif ($stat->status == 'menunggu')
                                    <td><a>
                                            <button type="button" class="admin-btn" data-bs-toggle="modal"
                                                    data-bs-target="#pemesananModel-{{ $stat->id }}">Detail
                                                pemesanan
                                            </button>
                                        </a>
                                    </td>
                                @else
                                    <span class="badge rounded-pill bg-danger">Ditolak</span>
                                @endif
                            @endif
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center">
                {{ $status->links() }}
            </div>
        </div>
    </div>

    @foreach ($status as $stat)
        <div class="modal fade" id="pemesananModel-{{ $stat->id }}">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Detail Pemesanan</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="detail-main">
                        <table>
                            <tbody>
                            <img src="/image/doraemon.png" class="float-start" style="width:90px" alt="">
                            <tr>
                                <td style="padding-left: 25px">Username</td>
                                <td>:</td>
                                <td>{{ $stat->pengguna->username }}</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 25px">Jenis Kelamin</td>
                                <td>:</td>
                                <td>{{ $stat->jenis_kelamin }}</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 25px">Tanggal Lahir</td>
                                <td>:</td>
                                <td>{{ $stat->pengguna->tanggal_lahir }}</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 25px">Email</td>
                                <td>:</td>
                                <td>{{ $stat->pengguna->email }}</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 25px">No Telepon</td>
                                <td>:</td>
                                <td>{{ $stat->pengguna->no_telp }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Modal footer -->
                    <p style="padding: 25px 0 0 25px"><b>Foto KTP</b></p>
                    <img src="/image/doraemon.png" class="rounded" style="width:90px" alt="">
                    <div class="modal-footer">
                        <div class="container-fluid">
                            <a href="{{ route('pemesanan_Ditolak', $stat->id) }}">
                                <button type="button"
                                        class="badge rounded-pill bg-danger mx-auto d-block"
                                        style="font-size:15px; border:none; height: 40px; width:175px"
                                        data-bs-dismiss="modal">Tolak Pemesanan
                                </button>
                            </a>
                        </div>
                        <div class="container-fluid">
                            <a href="{{ route('pemesanan_berhasil', $stat->id) }}">
                                <button type="button"
                                        class="badge rounded-pill bg-primary mx-auto d-block"
                                        style="font-size:15px; border:none; width:175px; height:40px;"
                                        data-bs-dismiss="modal">Setujui Pemesanan
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
