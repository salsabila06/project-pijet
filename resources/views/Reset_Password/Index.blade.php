@extends('Main.Index')

@section('title','Reset Password')

<div class="title">
    <p>
        Reset Password
    </p>
</div>
<div class="text">
    <p id="note">
        Your new password must be different from previous
        used password
    </p>
</div>



@if(session()->has('fail'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{session('fail')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<form method="post"  action="{{route('reset.password')}}">
    @csrf
    <fieldset>
        <input type="hidden" name="token" value="{{$token}}">
        <div >
            <input type="email" id="email-3" name="email" value="{{$email ?? old('email')}}" placeholder="Email">
            <span  id="notice-1" class="text-danger">@error('email'){{$message}}@enderror</span>
        </div>
        <div>
            <input type="password" id="new-pass" name="password"  placeholder="New password">
        </div>
        <div class="text">
            <p id="note-2">
                Must be at least 8 character
            </p>
            <div>
                <input type="password" id="confirm-pass" name="password_confirmation"  placeholder="Confirm password">
            </div>
        </div>
        <div class="text">
            <p id="note-3">
                Both password must match
            </p>
            <div>
                <button type="submit" id="forgot-pass-btn">Reset Now</button>
                <div class="text">
                    <p id="dont-have-account-2">
                        Don't have account? <a href="{{route('register-page')}}">register</a>
                    </p>
                </div>
            </div>
        </div>
    </fieldset>
</form>


