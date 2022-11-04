@extends('Main.Index')


<div class="title">
    <p>
        Profile
    </p>
</div>

<div>
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" id="message">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert" id="message">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
</div>
<div>
    @foreach ($datas as $data)
        <div>
            <input type="text" id="username" name="username" value="{{ $data->username }} ">
        </div>
        <div>
            <input type="text" id="first_name" name="first_name" value="{{ $data->first_name }} ">
        </div>
        <div>
            <input type="text" id="email" name="email" value="{{ $data->email }} ">
        </div>
        <div>
            <input type="text" id="last_name" name="last_name" value="{{ $data->last_name }} ">
        </div>
    @endforeach
</div>
