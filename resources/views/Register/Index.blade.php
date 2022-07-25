
@extends('Main.Index')

@section('title','Register')


<div class="title">
    <p id="signin-title">
        Sign in
    </p>
</div>
<form method="post" action="{{route('register-data')}}">
    <fieldset>
    @csrf
    <div class="form-group">
        <input type="text" id="first_name" name="first_name"
               class="form-control @error('first_name') is-invalid @enderror" value="{{old('first_name')}}"
               placeholder="First Name">
        @error('first_name')
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>
    <div class="form-group">
        <input type="text" id="last_name" name="last_name" class="form-control @error('last_name') is-invalid @enderror"
               value="{{old('last_name')}}" placeholder="Last Name">
        @error('last_name')
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>
    <div class="form-group">
        <input type="email" id="email" name="email" class=" form-control @error('email') is-invalid @enderror"
               value="{{old('email')}}" placeholder="Email">
        @error('email')
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>
    <div class="form-group">
        <input type="password" id="password-2" name="password"
               class=" form-control @error('password') is-invalid @enderror"
               placeholder="password">
        @error('password')
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>
    <div>
        <button type="submit" class="btn btn-primary" id="signin-btn">Register</button>
    </div>
    <div><a class="btn btn-danger" href="{{route('home')}}"></a></div>
    </fieldset>
</form>
<div class="column-illustration-hero">
    <img src="/image/Group 179.svg" alt="" srcset="">
</div>

