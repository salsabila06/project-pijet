@extends('Main.Index')

@section('title','Login')

<div class="title">
    <p>
        ADMIN LOGIN
    </p>
</div>

@if(session()->has('error'))
    <div class="text-green-600 mb-4">{{session()->get('error')}}</div>
@endif
@if(session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert" id="message">
        {{session('loginError')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<div>
    <form method="post" action="{{route('admin.verify')}}">
        @csrf
        <fieldset>
            <div>
                <input type="text" id="username" name="username" placeholder="username" autofocus required>
            </div>
            <div>
                <input type="password" id="password" name="password" placeholder="password" required>
            </div>
            <button type="submit" id="login-btn">Login</button>
            <div class="text">
                <p id="dont-have-account">
                    Don't have account? <a href="{{route('register-page')}}">register</a>
                </p>
                <p>
                    <a id="forgot-pass" href="{{route('forgot.password.form')}}">Forgot password?</a>
                </p>
            </div>
        </fieldset>
    </form>
</div>




