@extends('Main.Index')

@section('contain')

<div class="row justify-content-start ms-2 mt-5 ">   
    <div class="col-md-8 col-lg-8 col-xl-8">
      <h3 class="fw-bold">Login</h3>

        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" id="message">
                {{session('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert" id="message">
                {{session('loginError')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <form method="post" action="{{route('verify')}}">
            @csrf
            <fieldset>
                <div class="col-md-8 col-lg-6 col-xl-6 mb-3">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Username" autofocus required>
                </div>
                <div class="col-md-8 col-lg-6 col-xl-6 mb-3">
                    <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="password" required>
                </div>
                <div class="col-md-8 col-lg-6 col-xl-6 mb-3">
                    <button type="submit" class="btn-masuk">Login</button>  
                </div>    
                <div class="col-md-8 col-lg-6 col-xl-6 text-center mb-3">
                    <p>Don't have account?<a class="" href="{{ route('register-page') }}">Register</a></p>
                </div>
                <div class="col-md-8 col-lg-6 col-xl-6 text-center mb-3">
                    <a  id="forgot-pass" href="{{route('forgot.password.form')}}">Forgot password?</a>  
                </div>
            </fieldset>
        </form>
    </div>
</div>
@endsection




