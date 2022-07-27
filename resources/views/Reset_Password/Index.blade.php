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
<form method="post" novalidate="" action="{{route('reset')}}">
    @csrf
    <input type="hidden" name="token" value="{{$token}}">
    <fieldset>
        <div >
            <input type="email" id="email-3" name="email-3" value="{{$email ?? old('email')}}" placeholder="Email">
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
                <input type="password" id="confirm-pass" name="password"  placeholder="Confirm password">
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
                        Don't have account? <a href="{{route('login')}}">register</a>
                    </p>
                </div>
            </div>
        </div>
    </fieldset>
</form>


