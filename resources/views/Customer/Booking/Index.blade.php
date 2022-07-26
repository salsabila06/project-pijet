@extends('Main.Index')

@section('link')
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;1,700&display=swap"
          rel="stylesheet"/>

    <!-- my style -->
    <link rel="stylesheet" href="{{asset('/css/login.css')}}"/>
    <link rel="stylesheet" href="{{asset('/css/style.css')}}"/>

    <!-- responsive style -->
    <link rel="stylesheet" href="{{asset('/css/responsive.css')}}"/>

    <style type="text/css">
        label > input {
            visibility: hidden;
            position: absolute;
        }

        label > input + img {
            cursor: pointer;
            border: 2px solid transparent;
        }

        label > input:checked + img {
            border: 2px solid #f00;
        }
        .row{
            height: 400px;
        }

    </style>
@endsection
@section('contain')
    <div class="row" style="margin-top: 40px">
        <div class="col-md-3 my-5" id="form-tagline">
            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"></div>
            <h2 class="fw-bolder">Lengkapi data dibawah dan pilih pijatmu</h2>
        </div>
        <form action="{{route('create.booking')}}" class="form-floating" method="post">
            @csrf
            <div class="d-flex justify-content-start">
                <input type="date" id="waktubooking" name="waktu_booking" placeholder="Waktu booking" class="form-control @error('waktu_booking') is-invalid @enderror" value="{{old('waktu_booking')}}"/>
            </div>
            @error('waktu_booking')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
            <div class="d-flex justify-content-start" style="margin-bottom: 20px;">
                <fieldset id="jenispijat">
                    <select name="jenispijat_id" id="jenispijat" class="form-control @error('jenispijat_id') is-invalid @enderror">
                        <option style="font-size: 20px" selected disabled> Pilih Jasa Pijat</option>
                        <option style="font-size: 20px" value="1"> Pijat Thai</option>
                        <option style="font-size: 20px" value="2"> Pijat Prenatal</option>
                        <option style="font-size: 20px" value="3"> Pijat Refleksi</option>
                        <option style="font-size: 20px" value="4"> Pijat Olahraga</option>
                    </select>
                </fieldset>
                @error('jenispijat_id')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="d-flex justify-content-start" style="margin-bottom: 20px;">
                <fieldset id="durasiwaktu">
                    <select name="durasi_waktu" id="durasiwaktu" class="form-control @error('durasi_waktu') is-invalid @enderror"   >
                        <option style="font-size: 20px" selected disabled> Pilih Durasi Waktu</option>
                        <option style="font-size: 20px" value="30 Menit"> 30 Menit</option>
                        <option style="font-size: 20px" value="60 Menit"> 60 Menit</option>
                        <option style="font-size: 20px" value="90 Menit"> 90 Menit</option>
                    </select>
                </fieldset>
                @error('durasi_waktu')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>


            <div class="d-flex justify-content-start">
                <input type="text" id="alamat" name="alamat" placeholder="Alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{old('alamat')}}"/>
            </div>
            @error('alamat')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
            <div>
                <label>
                    <input type="radio" id="" name="jenis_kelamin" value="Laki-laki">
                    <img src="/image/search-lk.svg" alt="" class="me-5"/>
                </label>
                <label>
                    <input type="radio" id="gender" name="jenis_kelamin" value="Perempuan">
                    <img src="/image/search-pr.svg" alt="" class="me-5"/>
                </label>
            </div>
            <div style="margin-top: 30px">
                <button type="submit">Pesan</button>
            </div>
        </form>
        <a href="{{route('home')}}" style="margin-top: 30px; float: left">
            <button>Cancel</button>
        </a>
    </div>
@endsection
