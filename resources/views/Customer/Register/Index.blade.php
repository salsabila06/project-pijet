`
@extends('Main.Index')

@section('contain')


<div class="row justify-content-start ms-2 mt-5 ">   
    <div class="col-md-8 col-lg-8 col-xl-8">
      <h3 class="fw-bold">Register</h3>

        <form method="post" action="{{route('create')}}">
            <fieldset>
            @csrf
            <div class="col-md-8 col-lg-6 col-xl-6 mb-3">
                <input type="text" id="username" name="username"  id="username" name="username"
                class="form-control @error('username') is-invalid @enderror"  
                placeholder="Username" >
                @error('username')
                    <div id="username_error" class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="col-md-8 col-lg-6 col-xl-6 mb-3">
                <input type="text" id="first_name" name="first_name" class="form-control @error('first_name') is-invalid @enderror"
                    value="{{old('first_name')}}" placeholder="first Name">
                @error('first_name')
                <div id="first_name_error" class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="col-md-8 col-lg-6 col-xl-6 mb-3">
                <input type="text" id="last_name" name="last_name" class="form-control @error('last_name') is-invalid @enderror"
                    value="{{old('last_name')}}" placeholder="Last Name">
                @error('last_name')
                    <div id="last_name_error" class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="col-md-8 col-lg-6 col-xl-6 mb-3">
                <input type="email" id="email" name="email" class=" form-control @error('email') is-invalid @enderror"
                    value="{{old('email')}}" placeholder="Email">
                @error('email')
                    <div id="email_error" class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="col-md-8 col-lg-6 col-xl-6 mb-3">
                <input type="password" id="password-2" name="password"
                    class=" form-control @error('password') is-invalid @enderror"
                    placeholder="password">
                @error('password')
                    <div id="password_error" class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="col-md-8 col-lg-6 col-xl-6 mb-3">
                <button type="submit" class="btn-masuk" id="signin-btn">Register</button>
            </div>
            <div class="col-md-8 col-lg-6 col-xl-6 text-center mb-3">
                <p>Kembali ke <a class="" href="{{route('home')}}">home</a>
                </p>
            </fieldset>
        </form>
    </div>
</div>
@endsection

