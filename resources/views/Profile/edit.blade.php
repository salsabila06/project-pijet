@extends('Layout.Index')

@section('container')
    <!-- Main -->


    <div class="main">
        <form method="post" action="{{route('update_profile')}}">
            @method("put")
            @csrf
        <h2>Info Dasar</h2>
        <div class="card">
            <div class="card-body">
                <i class="fa fa-pen fa-xs edit"></i>
                <div id="e-username" >
                    <label  for="username">Username</label>
                    <input value="{{old('username',Auth('admin')->user()->username)}}" name="username" class="m-2" type="text">
                </div>
                <div id="e-TTL">
                    <label for="TTL" >Tanggal Lahir </label>
                    <input value="{{old('TTL',Auth('admin')->user()->TTL)}}" name="TTL" class="m-2" type="text">
                </div>
                <div id="e-email">
                    <label for="email" >Email</label>
                    <input value="{{old('email',Auth('admin')->user()->email)}}" name="email" class="m-2" type="text">
                </div>
                <div id="e-address">
                    <label for="address" >Address</label>
                    <input value="{{old('address',Auth('admin')->user()->address)}}" name="address" class="m-2" type="text">
                </div>
            </div>
        </div>

        <h2>Info Kontak</h2>
        <div class="card">
            <div class="card-body">
                <i class="fa fa-pen fa-xs edit"></i>
                <div id="e-bahasa" >
                    <label for="bahasa">bahasa</label>
                    <input value="{{old('bahasa',Auth('admin')->user()->bahasa)}}" name="bahasa" class="m-2" type="text">
                </div>

                <div id="e-number">
                    <label for="number">No Telepon</label>
                    <input value="{{old('number',Auth('admin')->user()->number)}}" name="number" class="m-2" type="text">
                </div>

            </div>
        </div>
            <button type="submit">Update</button>
        </form>
    </div>
    <!-- End -->
@endsection


