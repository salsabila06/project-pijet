@extends('Main.Index')

@section('contain')

<div class="row justify-content-start ms-2 mt-5 ">   
    <div class="col-md-8 col-lg-8 col-xl-8">
      <h3 class="fw-bold">Forgot_Password</h3>
        <p>
            Enter the email associated with your account and we’ll send an email with instruction to reset your password
        </p>
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if(session()->has('Error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{session('Error')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <form method="post" action="{{route('forgot.password.form')}}">
            @csrf
            <fieldset >
                <div class="col-md-8 col-lg-6 col-xl-6 mb-3">
                    <input type="text" id="email-2" name="email" placeholder="Email" value="{{old('email')}}" autofocus requireds>
                    <span  id="notice" class="text-danger">@error('email'){{$message}}@enderror</span>
                </div>
                <div class="col-md-8 col-lg-6 col-xl-6 mb-3">
                    <button type="submit" class="btn-masuk" id="forgot-pass-btn">Send Instructions </button>
                </div>
                @can(auth('admin'))
                    <div class="col-md-8 col-lg-6 col-xl-6 text-center mb-3">
                        <p id="dont-have-account-2">Don't have account?<a class="" href="{{ route('register-page') }}">Register</a></p>
                    </div>
                @endcan
            </fieldset>
        </form>
    </div>
</div>
@endsection

   

