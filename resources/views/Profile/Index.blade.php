@extends('Layout.Index')

@section('container')
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile Page</title>

        <!-- Custom Css -->
        <link rel="stylesheet" href="{{ asset('/css/styleProfile.css') }}">
    </head>

<div class="container">
    <div class="row">
        <div class="">
            <body>
            <!-- Navbar top -->
            <div class="navbar-top">
                <div class="title">
                    <h1>Profile</h1>
                </div>

                <!-- Navbar -->
                <ul>
                    <li>
                        <a href="#sign-out">
                            <a href="{{ route('home') }}"><i class="fa fa-sign-out-alt fa-2x"></i></a>
                        </a>
                    </li>
                </ul>
                <!-- End -->
            </div>
            <!-- End -->

            <!-- Main -->
            <div class="main">
                @foreach ($datas as $data)
                    <h2>IDENTITY</h2>
                    <div class="card">
                        <div class="card-body">
                            <i class="fa fa-pen fa-xs edit"></i>
                            <table>
                                <tbody>
                                <tr>
                                    <td>Name</td>
                                    <td>:</td>
                                    <td>{{ $data->username }} </td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td>:</td>
                                    <td>#</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td>{{ $data->email }}</td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
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
                                <tr>
                                    <td>Bahasa</td>
                                    <td>:</td>
                                    <td>Bahasa Indonesia</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td>{{ $data->email }}</td>
                                </tr>
                                <tr>
                                    <td>Telepon</td>
                                    <td>:</td>
                                    <td>{{ $data->number }}</td>
                                </tr>
                                <tr>
                                    <td>Verifikasi 2 Langkah</td>
                                    <td>:</td>
                                    <td>#</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endforeach
            </body>
        </div>
    </div>
</div>
@endsection
