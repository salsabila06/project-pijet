@extends('Layout.Index')

@section('container')
    <!-- Main -->
    <style>
        .button {
            background-color: #4CAF50;
            /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>

    <div class="main">
        <form method="post" action="{{ route('update_profile') }}">
            @method('put')
            @csrf
            <h2>Info Dasar</h2>
            <div class="card">
                <div class="card-body">
                    <i class="fa fa-pen fa-xs edit"></i>
                    <div id="e-username">
                        <label for="username">Username</label>
                        <input name="username" class="m-2" type="text"
                            class="form-control @error('username') is-invalid @enderror"
                            value="{{ old('username', Auth('admin')->user()->username) }}">
                    </div>
                    <div id="e-TTL">
                        <label for="TTL">Tanggal Lahir </label>
                        <input name="TTL" class="m-2" type="text"
                            class="form-control @error('TTL') is-invalid @enderror"
                            value="{{ old('TTL', Auth('admin')->user()->TTL) }}">
                    </div>
                    <div id="e-email">
                        <label for="email">Email</label>
                        <input name="email" class="m-2" type="text"
                            class="form-control @error('email') is-invalid @enderror"
                            value="{{ old('email', Auth('admin')->user()->email) }}">
                    </div>
                    <div id="e-address">
                        <label for="address">Address</label>
                        <input name="address" class="m-2" type="text"
                            class="form-control @error('address') is-invalid @enderror"
                            value="{{ old('address', Auth('admin')->user()->address) }}">
                    </div>
                </div>
            </div>

            <h2>Info Kontak</h2>
            <div class="card">
                <div class="card-body">
                    <i class="fa fa-pen fa-xs edit"></i>
                    <div id="e-bahasa">
                        <label for="bahasa">bahasa</label>
                        <input name="language" class="m-2" type="text"
                            class="form-control @error('language') is-invalid @enderror"
                            value="{{ old('language', Auth('admin')->user()->language) }}">
                    </div>

                    <div id="e-number">
                        <label for="number">No Telepon</label>
                        <input name="number" class="m-2" type="text"
                            class="form-control @error('number') is-invalid @enderror"
                            value="{{ old('number', Auth('admin')->user()->number) }}">
                    </div>

                </div>
            </div>
            <button class="button" type="submit">Update</button>
        </form>
    </div>
    <!-- End -->
@endsection
