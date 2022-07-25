<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Pijetin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />

    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;1,700&display=swap" rel="stylesheet" />

    <!-- my style -->
    <link rel="stylesheet" href="{{asset('/css/style.css')}}"/>

    <!-- responsive style -->
    <link rel="stylesheet" href="{{asset('/css/responsive.css')}}" />

</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-transparent position-fixed w-100">
    <div class="container">
        <div class="nav-brand"><img src="/image/logonama.svg" alt="" /></div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav align-items-center ms-auto">
                <li class="nav-item"><a class="nav-link active me-3" aria-current="page" {{Request::is('hero') ? 'active'  : ""}} href="#hero"><span>Beranda</span> <br /><img src="/image/Line 1.svg" alt="" /></a></li>
                <li class="nav-item"><a class="nav-link" {{Request::is('komunitas') ? 'active'  : ""}} href="{{route('posts')}}"><span>Komunitas</span></a></li>
                <li class="nav-item"><a class="nav-link" {{Request::is('Tentang') ? 'active'  : ""}} href="#Tentang"><span>Tentang Kami</span></a></li>
                <li class="nav-item"><a class="nav-link" {{Request::is('dukungan') ? 'active'  : ""}} href="#dukungan"><span>Dukungan</span></a></li>
                <!-- <a class="btn-login ms-2" href="/"><img src="/assets/img/login.svg" alt="" /></a> -->
                <!-- <a class="btn-signin ms-2" href="/"><img src="/assets/img/sign in.svg" alt="" /></a> -->
            </div>
            @auth()
                <div>
                <li class="nav-item dropdown"  style="list-style: none;">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"  aria-expanded="false">
                        Welcome Back, {{auth()->user()->first_name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{route('profile')}}">Profile</a></li>
                        <li><a class="dropdown-item" href="{{route('admin')}}">My Dashboard</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="/Logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
            @else
                <a href="{{route('login')}}"><button class="button-primary">Login</button></a>
                <!-- <a class="a-primary"><img src="/assets/img/login.svg" alt="" /></a> -->
                <a href="{{route('register-page')}}"><button class="button-secondary">Sign in</button></a>
            @endauth
                </div>
        </div>
    </div>
    </div>
</nav>

<!-- hero section -->
<section id="hero">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-md-6 hero-tagline my-auto">
                <h1><span class="fw-bold">Pijat dengan aman, nyaman, dan mudah terjangkau</span></h1>
                <p>Melayani pijat panggilan 24 jam, pijat panggilan terpercaya, aman, dan nyaman.</p>

                <a href="{{route('booking')}}">
                    <img src="/image/accsent.svg" alt="" />
                </a>
            </div>
        </div>
        <div class="col-lg-6 col-xl-7">
            <img src="/image/Herobanner.svg" alt="" class="hero-img position-absolute end-0 bottom-0 img-hero" />
            <img src="/image/Ellipse 10.svg" alt="" class="ellipse-img h-100 position-absolute top-0 start-0" />
        </div>
    </div>
</section>

<!-- Komunitas section -->

<section id="komunitas" class="py-5 border-bottom">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-4 mb-5 justify-content-center">
                <img src="/image/foto 1.svg" alt="" class="card-com" />
            </div>

            <div class="col-lg-4 mb-5 justify-content-center">
                <img src="/image/foto 2.svg" alt="" class="card-com" />
            </div>

            <div class="col-lg-4 mb-5 justify-content-center">
                <img src="/image/foto 3.svg" alt="" class="card-com" />
            </div>
        </div>
        <!-- <div class="row align-items-start">
          <div class="col-3 me-5">
            <img src="/assets/img/foto 1.svg" alt="" id="card-foto1" />
          </div>

          <div class="col-3 me-5">
            <img src="/assets/img/foto 2.svg" alt="" id="card-foto2" />
          </div>

          <div class="col-3 me-5">
            <img src="/assets/img/foto 3.svg" alt="" id="card-foto3" />
          </div>
        </div> -->
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center pb-5">
                <div class="card-komunitas">
                    <div class="mangkok-icon position-relative mx-auto">
                        <img src="/image/mangkok-icon.svg" alt="" class="position-absolute top-50 start-50 translate-middle" />
                    </div>
                    <h3 class="mt-3">Aroma Terapi</h3>
                    <p class="sub-title mt-2">Meningkatkan kualitas tidur dan membantu meringankan insomnia.</p>
                </div>
            </div>

            <div class="col-md-4 text-center">
                <div class="card-komunitas">
                    <div class="mangkok-icon position-relative mx-auto">
                        <img src="/image/batu.svg" alt="" class="position-absolute top-50 start-50 translate-middle" />
                    </div>
                    <h3 class="mt-3">Vitalitas</h3>
                    <p class="sub-titlemt-2">Membantu meningkatkan stamina melalui tekanan, usapan pada bagian tubuh.</p>
                </div>
            </div>

            <div class="col-md-4 text-center">
                <div class="card-komunitas">
                    <div class="mangkok-icon position-relative mx-auto">
                        <img src="/image/orang bertapa.svg" alt="" class="position-absolute top-50 start-50 translate-middle" />
                    </div>
                    <h3 class="mt-3">Rileks</h3>
                    <p class="sub-title mt-2">Meningkatkan ketenangan, mengurangi tingkat kegelisahan dalam diri.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tentang kami section -->

<section id="Tentang">
    <div class="container px-4">
        <div class="row gx-5">
            <div class="col">
                <div class="p-2"><img src="/image/tentangkami-ponsel.svg" alt="" /></div>
            </div>
            <div class="col">
                <div class="p-3 mt-5">
                    <h3>Tentang Kami</h3>
                    <p>PijetIn merupakan platform yang membantu pengguna dalam memesan dan mengunakan jasa layanan pijat. PijetIn memiliki beberapa macam layanan pijat yang dapat membuat kita merasa rileks.</p>
                    <div>
                        <button class="button-sm-primary">Baca Selengkapnya</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- choice section -->
<section id="choice">
    <div class="container">
        <div class="row">
            <div class="col text-center"><h3 class="pt-5 pb-3">Pilih pijat panggilan yang kamu mau</h3></div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col d-flex justify-content-start pt-5 pb-5">
                    <div class="card-choice me-4 text-center">
                        <h5 class="mt-3">Pijat Tradisional</h5>
                        <p class="mt-2">100+ layanan pijat</p>
                    </div>
                    <div class="card-choice me-4 text-center">
                        <h5 class="mt-3">Pijat Swedia</h5>
                        <p class="mt-2">50+ layanan pijat</p>
                    </div>
                    <div class="card-choice me-4 text-center">
                        <h5 class="mt-3">Pijat Batu Panas</h5>
                        <p class="mt-2">20+ layanan pijat</p>
                    </div>
                    <div class="card-choice me-4 text-center">
                        <h5 class="mt-3">Pijat Shiatsu</h5>
                        <p class="mt-2">10+ layanan pijat</p>
                    </div>
                    <div class="card-choice me-4 text-center">
                        <h5 class="mt-3">Pijat Jaringan Dalam</h5>
                        <p class="mt-2">75+ layanan pijat</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Support section -->
<!-- <section id="dukungan" class="mt-5">
  <div class="container">
    <div class="row">
      <div class="col-12 d-flex justify-content-center text-center">
        <div class="card-dukungan me-5">
          <h6 class="mt-5">Company</h6>
          <p class="mb-2">About</p>
          <p class="mb-2">Collaborate</p>
        </div>

        <div class="card-dukungan me-5">
          <h6 class="mt-5">Support</h6>
          <p class="mb-2">Start Booking</p>
          <p class="mb-2">Help Center</p>
          <p class="mb-2">Server Status</p>
        </div>

        <div class="card-dukungan me-5">
          <h6 class="mt-5">My Account</h6>
          <p class="mb-2">Profile</p>
          <p class="mb-2">Last Booking</p>
        </div>
      </div>
    </div>
  </div>
</section> -->

<!-- Footer-->
<footer id="dukungan">
    <div class="container">
        <div class="col-12 d-flex justify-content-center text-center">
            <div class="card-dukungan me-5">
                <h6 class="mt-5">Company</h6>
                <p class="mb-2">About</p>
                <p class="mb-2">Collaborate</p>
            </div>

            <div class="card-dukungan me-5">
                <h6 class="mt-5">Support</h6>
                <a href="{{route('booking')}}"><p class="mb-2">Start Booking</p></a>
                <p class="mb-2">Help Center</p>
                <p class="mb-2">Server Status</p>
            </div>

            <div class="card-dukungan me-5">
                <h6 class="mt-5">My Account</h6>
                <a href="{{route('profile')}}"><p class="mb-2">Profile</p></a>
                <p class="mb-2">Last Booking</p>
            </div>
        </div>
    </div>
</footer>

<!-- javascript -->
<script src="/js/script.js"></script>

<!-- bootsratp -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>

