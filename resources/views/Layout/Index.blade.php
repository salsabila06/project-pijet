<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--
    <link href="{{ asset('/vendor/datatables.net-dt/css/jquery.dataTables.min.css') }}" rel="stylesheet" />
    <link href=".{{ asset('/vendor/datatables.net-responsive-dt/css/responsive.dataTables.min.css') }}" rel="stylesheet" />
    -->
    <!--my style -->
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('/font-awesome/css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/styleProfile.css') }}">

    <!-- FontAwesome 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    {{-- <link rel="stylesheet"  href="{{ asset('/css/table.css') }}" /> --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>pijetin</title>
    @yield('link')

</head>
<header>
    <nav id="navbar" class="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/image/Pijetin 2.svg" alt="" srcset="">
            </a>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-light" type="submit"><i class="fa fa-search"></i></button>
                <a class="btn btn-lg" type="submit"><i class="fa fa-bell-o"></i></a>
                <a class="btn btn-lg" href="{{ route('profile') }}"><i class="fa fa-user"></i></a>
                <a class="btn btn-lg" href="{{ route('logout') }}"><i class="fa fa-bitcoin"></i></a>
            </form>
        </div>
    </nav>
</header>
<body>
<input type="checkbox" class="d-none d-block" name="" id="chk"/>
<label for="chk" class="show-btn">
    <i class="fa fa-bars"></i>
</label>
<label for="chk" class="hide-btn">
    <i class="fa fa-bars"></i>
</label>

<div class="sidebar">
    <ul class="nav nav-pills flex-column mb-auto">
        <li><a class="nav-link{{Request::is('dashboard') ? 'active':''}}" href="{{ route('dashboard') }}"><i
                    class="fa fa-home"> <span>Dashboard</span></i> </a></li>
        @if(Auth::guard('admin')->user()->role=="2")
            <li><a class="nav-link{{Request::is('pengguna') ? 'active':''}}" href="{{ route('pengguna') }}"> <i
                        class="fa fa-user"> <span>Pengguna</span></i></a></li>
            <li><a class="nav-link{{Request::is('tampil_pemesanan_berhasil') ? 'active':''}}"
                   href="{{ route('tampil_pemesanan_berhasil') }}">
                    <i class=" fa fa-shopping-cart"><span>Pemesanan</span></i></a></li>
            <li><a class="nav-link{{Request::is('pembatalan') ? 'active':''}}" href="{{ route('pembatalan') }}"> <i
                        class="fa fa-times"> <span>Pembatalan</span></i></a></li>
        @elseif(Auth::guard('admin')->user()->role=="1")
            <li><a class="nav-link{{Request::is('pengguna') ? 'active':''}}" href="{{ route('pengguna') }}"> <i
                        class="fa fa-user"> <span>Pengguna</span></i></a></li>
            <li><a class="nav-link{{Request::is('tampil_pemesanan_berhasil') ? 'active':''}}"
                   href="{{ route('tampil_pemesanan_berhasil') }}">
                    <i class=" fa fa-shopping-cart"><span>Pemesanan</span></i></a></li>
            <li><a class="nav-link{{Request::is('pembatalan') ? 'active':''}}" href="{{ route('pembatalan') }}"> <i
                        class="fa fa-times"> <span>Pembatalan</span></i></a></li>
            <li><a class="nav-link{{Request::is('review') ? 'active':''}}" href="{{ route('review') }}"> <i
                        class="fa fa-star-o"> <span>Review</span></i></a></li>
            <li><a class="nav-link{{Request::is('verifikasi.menunggu') ? 'active':''}}"
                   href="{{ route('verifikasi.menunggu') }}"> <i class="fa fa-check-square-o">
                        <span>Verifikasi</span></i></a></li>
        @elseif(Auth::guard('admin')->user()->role=='3')
            <li><a class="nav-link{{Request::is('dashboard') ? 'active':''}}" href="{{ route('superadmin')}}"><i
                        class="fa fa-home"> <span>Admin</span></i> </a></li>
            <li><a href=""></a></li>
        @endif
    </ul>
</div>
<main class="scroll">
    <div class="container " >
        @yield('container')
    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
</script>
@yield('script')
</body>

</html>
