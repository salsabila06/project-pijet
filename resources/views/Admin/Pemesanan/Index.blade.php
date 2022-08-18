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
                <h4>Tranksaksi</h4>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg">
            <ul class="navbar-nav" style="text-align: left">
                <li class="nav-item">
                    <a class="statusMenu " id="menu-berhasil" aria-current="page"
                       href="{{ route('pemesanan_berhasil') }}"><b> Berhasil</b></a>
                <li class="nav-item">
                    <a class="statusMenu ms-5" id="menu-menunggu" aria-current="page"
                       href="{{ route('pemesanan_menunggu') }}"><b> Menunggu</b></a>
                </li>
                <li class="nav-item">
                    <a class="statusMenu  ms-5" id="menu-ditolak" aria-current="page"
                       href="{{ route('pemesanan_ditolak') }}"><b> Ditolak</b></a>
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
                        <td>{{ $stat['username'] }}</td>
                        <td>{{ $stat['jasa_pijat'] }}</td>
                        <td>{{ $stat['status'] }}</td>
                        <td><a href="{{ $stat->username }}">
                                <button type="button" class="btn btn-info">Riwayat Pemesanan</button>
                            </a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            {{ $status->links() }}
        </div>
    </div>
@endsection
