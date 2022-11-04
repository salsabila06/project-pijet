@extends('Main.Index')

@section('title','Login')

<div class="title">
    <p>
        Login
    </p>
</div>

<div>
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
</div>
<div>
    <form method="post" action="{{route('verify')}}">
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




