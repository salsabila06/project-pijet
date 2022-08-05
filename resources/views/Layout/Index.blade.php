<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--my style -->
    <link rel="stylesheet" href="{{asset('css/layout.css')}}">
    <link rel="stylesheet" href="{{asset('/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet" >
    @yield('link')
    <title>pijetin</title>


</head>

<body >
<nav class="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="/image/Pijetin 2.svg" alt="" srcset="">
        </a>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-light" type="submit"><i class="fa fa-search"></i></button>
            <a class="btn btn-lg" type="submit"><i class="fa fa-bell-o"></i></a>
            <a class="btn btn-lg" href="{{route('profile')}}"><i class="fa fa-user" ></i></a>
            <a class="btn btn-lg" href="{{route('logout')}}"><i class="fa fa-bitcoin" ></i></a>
        </form>
    </div>
</nav>




<input type="checkbox" name="" id="chk"/>
<label for="chk" class="show-btn">
    <i class="fa fa-bars"></i>
</label>
<label for="chk" class="hide-btn">
    <i class="fa fa-bars"></i>
</label>
<div class="sidebar">
    <ul class="nav nav-pills flex-column mb-auto">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-home"> <span >Dashboard</span></i> </a> </li>
        <li><a href="{{route('posts')}}"> <i  class="fa fa-star-o">  <span >Review</span></i></a></li>
        <li><a href=""> <i class=" fa fa-shopping-cart"> <span >Pesanan</span></i></a> </li>
        <li><a href=""> <i class="fa fa-commenting-o"> <span >inbox</span></i></a> </li>
        <li><a href=""> <i class="fa fa-user"> <span >Pengguna</span></i></a> </li>
        <li><a href=""> <i class="fa fa-check-square-o"> <span >Verifikasi</span></i></a> </li>
    </ul>
</div>

<div class="container">
    @yield('container')
</div>



@yield('script')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" ></script>
</body>
</html>
