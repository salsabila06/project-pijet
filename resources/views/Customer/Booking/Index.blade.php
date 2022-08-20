<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Pijetin</title>

    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;1,700&display=swap"
          rel="stylesheet"/>

    <!-- my style -->
    <link rel="stylesheet" href="{{asset('/css/style.css')}}"/>

    <!-- responsive style -->
    <link rel="stylesheet" href="{{asset('/css/responsive.css')}}"/>
</head>

<body>
<!-- navbar brand -->
<nav class="navbar-form bg-white w-100">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="/image/logonama.svg" alt="" width="100" height="38"/>
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
        <form action="{{route('create.booking')}}" class="form-floating" method="post">
            @csrf
            <div class="d-flex justify-content-start">
                <input type="date" id="waktubooking" name="waktu_booking" placeholder="Waktu booking"/>
            </div>
            <div class="d-flex justify-content-start">
                <fieldset id="jenispijat">
                    <select name="jenis_pijat" id="jenispijat">
                        <option style="font-size: 20px" selected disabled> Pilih Jasa Pijat</option>
                        <option style="font-size: 20px" value="Pijat Thai"> Pijat Thai</option>
                        <option value="Pijat Prenatal"> Pijat Prenatal</option>
                        <option value="Pijat Refleksi"> Pijat Refleksi</option>
                        <option value="Pijat Olahraga"> Pijat Olahraga</option>
                    </select>
                </fieldset>
            </div>
            <div class="d-flex justify-content-start">
                <input type="time" id="durasiwaktu" name="durasi_waktu" placeholder="Durasi waktu"/>
            </div>

            <div class="d-flex justify-content-start">
                <input type="address" id="alamat" name="alamat" placeholder="Alamat"/>
            </div>
            <div class="col-md-3">
                <div class="form-check">
                    <input type="hidden" id="priavalue" value="pria">
                    <input type="hidden" id="wanitavalue" value="wanita">
                    <p type="text" id="gender">
                    <button id="pria"  href="#"><img src="/image/search-lk.svg" alt="" class="me-5"/></button>
                    <button id="wanita"  value="click me"><img src="/image/search-pr.svg" alt="" class="me-5"/></button>
                </div>

            </div>
            <button type="submit">Pesan</button>
        </form>
        <a href="{{route('home')}}">
            <button>Cancel</button>
        </a>
    </div>

    <!-- button search -->
    <div class="container">
        <div class="row">


        </div>
    </div>
</div>
<script>
    const valueP=document.getElementById('priavalue');
    const valueW=document.getElementById('wanitavalue');
    const pria=document.getElementById('pria');
    const wanita=document.getElementById('wanita');
    const value=document.getElementById('gender');

    function fun1(){
        value.innerHTML=valueP.value;
    }

    function fun2(){
        value.innerHTML=valueW.value;
    }
    pria.addEventListener('click',fun1);
    wanita.addEventListener('click',fun2);

</script>
</body>
</html>

