@extends('Main.Index')

@section('contain')

<div class="row justify-content-start ms-2 mt-5 ">   
    <div class="col-md-8 col-lg-8 col-xl-8">
      <h3 class="fw-bold">Login Pegawai</h3>

    @if(session()->has('error'))
        <div class="text-green-600 mb-4">{{session()->get('error')}}</div>
    @endif
    @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert" id="message">
            {{session('loginError')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session()->has('logout'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert" id="message">
            {{session('logout')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

        <form method="post" action="{{route('admin.verify')}}">
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
                    <a  id="forgot-pass_admin" href="{{route('forgot.password.account.form')}}">Forgot password?</a>  
                </div>
            </fieldset>
        </form>
    </div>
</div>
@endsection




