<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Pijetin</title>

    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;1,700&display=swap" rel="stylesheet" />

    <!-- my style -->
    <link rel="stylesheet" href="{{asset('/css/style.css')}}" />

    <!-- responsive style -->
    <link rel="stylesheet" href="{{asset('/css/responsive.css')}}" />
</head>

<body>
<!-- navbar brand -->
<nav class="navbar-form bg-white w-100">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="/image/logonama.svg" alt="" width="100" height="38" />
        </a>
    </div>
</nav>

<!-- content -->

<div class="container">
    <div class="row">
        <div class="col-md-3 my-5" id="form-tagline">
            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"></div>
            <h2 class="fw-bolder">Lengkapi data dibawah dan pilih pijatmu</h2>
        </div>
        <form class="form-floating">
            <div class="d-flex justify-content-start">
                <input type="date" id="waktubooking" name="waktu booking" placeholder="Waktu booking" />
            </div>

            <div class="d-flex justify-content-start">
                <input type="time" id="durasiwaktu" placeholder="Durasi waktu" />
            </div>

            <div class="d-flex justify-content-start">
                <input type="address" id="alamat" placeholder="Alamat" />
            </div>
        </form>
    </div>

    <!-- button search -->
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card-search">
                    <a href=""><img src="/image/search-lk.svg" alt="" class="me-5"/></a>
                    <a href=""><img src="/image/search-pr.svg" alt="" class="me-5" /></a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>

