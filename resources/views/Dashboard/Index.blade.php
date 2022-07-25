<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{asset('/css/font-awesome.min.css')}}">
    <link href="/image/favicon.png" rel="icon" />
    <link href="/image/apple-touch-icon.png" rel="apple-touch-icon" />
    <link
        href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
        rel="stylesheet"/>
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet" />
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet" />
    <title>Pijetin</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background:linear-gradient(90deg, rgba(108, 231, 205, 0.539) 0%, rgba(9,121,121,0.10717790534182425) 100%, rgba(0,31,36,1) 100%);">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="/image/Pijetin 2.svg" alt="Pijetin"/></a>
        <form class="d-flex">
            <input
                class="form-control me-2"
                type="search"
                placeholder="Search"
                aria-label="Search">
            <button class="btn btn-outline-success" type="submit">
                <i class="fa fa-search"><img src="/image/Search.svg" alt=""></i>
            </button>
        </form>
    </div>
</nav>
<div class="d-flex flex-column vh-100 flex-shrink-0 p-3 text-dark" style="background-color: #DBFFF6; width: 250px;"> <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none"> <svg class="bi me-2" width="40" height="32"> </svg>
        <ul class="nav nav-pills flex-column mb-auto">
            <li><a href="{{route('dashboard')}}" class="nav-link text-dark" {{Request::is('Dashboard') ? 'active':''}}><i class="fa fa-home"><img src="/image/Home.svg" alt=""></i><strong><span class="ms-2">Dashboard</span></strong></a> </li>
            <li><a href=# class="nav-link text-dark" {{Request::is('Dashboard') ? 'active':''}}> <i class="fa fa-review"><img src="/image/review.svg" alt=""></i><strong><span class="ms-2">Review</span></strong></a></li>
            <li> <a href="pemesanan.html" class="nav-link text-dark"> <i class="fa fa-pemesanan"><img src="/image/pemesanan.svg" alt=""></i><strong><span class="ms-2">Pemesanan</span></strong></a> </li>
            <li> <a href="inbox.html" class="nav-link text-dark"> <i class="fa fa-inbox"><img src="/image/Chat.svg" alt=""></i><strong><span class="ms-2">In box</span></strong></a> </li>
            <li> <a href="pengguna.html" class="nav-link text-dark"> <i class="fa fa-pengguna"><img src="/image/pengguna.svg" alt=""></i><strong><span class="ms-2">Pengguna</span></strong></a> </li>
            <li> <a href="verifikasi.html" class="nav-link text-dark"> <i class="fa fa-verifikasi"><img src="/image/pengguna.svg" alt=""></i><strong><span class="ms-2">Verifikasi</span></strong></a> </li>
        </ul>

</div>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>
