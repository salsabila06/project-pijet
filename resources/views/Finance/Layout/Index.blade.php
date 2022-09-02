<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script type="text/javascript" src='Bootstrap/js/bootstrap.bundle.min.js'></script>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;1,700&display=swap" rel="stylesheet" />



    <!--my style -->
    <link rel="stylesheet" href="assets_finance/css/table.css">
    <link rel="stylesheet" href="assets_finance/css/table1.css">
    <link rel="stylesheet" href="assets_finance/css/layout.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/assets/font-awesome/font-awesome-4.7.0/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Pijetin | {{ $title }}</title>


</head>
<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img id="brand" src="assets/img/Pijetin 2.svg" alt="" srcset="">
              </a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav float-start me-auto">

            </ul>
            <ul class="navbar-nav float-end" >
              <form class="d-flex" role="search">
                <input class="search" type="search" placeholder="Cari"  aria-label="Search">
                <button class="btn btn-light" type="submit"><i class="fa fa-search"></i></button>
            </form>
            <li class="nav-item dropstart">
                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-bell-o"></i>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="#" class="btn btn-hover-light rounded-2 d-flex align-items-center gap-3 py-2 px-3 lh-sm text-start">
                      <img src="assets/img/foto-user.svg" alt="" class="">
                       <div>
                        <strong class="d-block">Verifikasi mitra baru untuk Zefania Dyah</strong>
                        <small class="text-muted">July 29, 2021 at 18.00 PM</small>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="btn btn-hover-light rounded-2 d-flex align-items-center gap-3 py-2 px-3 lh-sm text-start">
                      <img src="assets/img/foto-user.svg" alt="" class="">
                       <div>
                        <strong class="d-block">Verifikasi pengguna baru untuk Naswa Bila</strong>
                        <small class="text-muted">July 29, 2021 at 18.00 PM</small>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="btn btn-hover-light rounded-2 d-flex align-items-center gap-3 py-2 px-3 lh-sm text-start">
                      <img src="assets/img/foto-user.svg" alt="" class="">
                       <div>
                        <strong class="d-block">Verifikasi mitra baru untuk Zefania Dyah</strong>
                        <small class="text-muted">July 29, 2021 at 18.00 PM</small>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="btn btn-hover-light rounded-2 d-flex align-items-center gap-3 py-2 px-3 lh-sm text-start">
                      <img src="assets/img/foto-user.svg" alt="" class="">
                       <div>
                        <strong class="d-block">Verifikasi pengguna baru untuk Naswa Bila</strong>
                        <small class="text-muted">July 29, 2021 at 18.00 PM</small>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="#" role="button">
                  <i class="fa fa-user-o"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" role="button"><i class="fa fa-sign-out"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <div class="sidebar">
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
              <a href="/Dashboard"><span ><i class="fa fa-home">Dashboard</span></i> </a>
            </li>
            <li class="nav-item">
              <a href="/Pengguna"> <span ><i class="fa fa-user-o"> Pengguna</span></i></a>
            </li>
            <li class="nav-item">
              <a href="/Transaksi"> <span ><i class=" fa fa-shopping-cart">Transaksi</span></i></a>
            </li>
            <li class="nav-item">
              <a href="/Pembatalan"> <span ><i class="fa fa-times">Pembatalan</span></i></a>
            </li>
        </ul>
    </div>

    <div class="container">

       @yield('Content')

    </div>

</body>
</html>
