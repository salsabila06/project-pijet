@extends('Layout.Index')

@section('container')
    <!-- Main -->

    @if (session()->has('message'))
        <div class="text-green-600 mb-4">{{ session()->get('message') }}</div>
    @endif
    <div class="main">
        @foreach ($datas as $data)
            <div class="row">
                <div class="col-auto">
                    <h2>Info Dasar</h2>
                </div>
                <div class="col-auto ms-auto">
                    <a href="{{ route('edit_profile') }}">Edit</a>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <i class="fa fa-pen fa-xs edit"></i>
                    <table>
                        <tbody>
                            <tr id="e-username">
                                <td>Username</td>
                                <td>:</td>
                                <td>{{ $data->username }} </td>
                            </tr>
                            <tr id="e-TTL">
                                <td>Tanggal Lahir</td>
                                <td>:</td>
                                <td>{{ $data->TTL }}</td>
                            </tr>
                            <tr id="e-email">
                                <td>Email</td>
                                <td>:</td>
                                <td>{{ $data->email }}</td>
                            </tr>
                            <tr id="e-address">
                                <td>Kota Dasar</td>
                                <td>:</td>
                                <td>{{ $data->address }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <h2>Info Kontak</h2>
            <div class="card">
                <div class="card-body">
                    <i class="fa fa-pen fa-xs edit"></i>
                    <table>
                        <tbody>
                            <tr id="e-bahasa">
                                <td>Bahasa</td>
                                <td>:</td>
                                <td>{{ $data->language }}</td>
                            </tr>
                            <tr id="e-email2">
                                <td>Email</td>
                                <td>:</td>
                                <td>{{ $data->email }}</td>
                            </tr>
                            <tr id="e-number">
                                <td>Telepon</td>
                                <td>:</td>
                                <td>{{ $data->number }}</td>
                            </tr>
                            <tr id="e-verifikasi">
                                <td>Verifikasi 2 Langkah</td>
                                <td>:</td>
                                <td>#</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        @endforeach
    </div>
    <!-- End -->
@endsection
