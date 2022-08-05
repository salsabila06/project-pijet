@extends('Layout.Index')

@section('container')
    <!-- Main -->
    <div class="main">
        @foreach ($datas as $data)
            <h2>Info Dasar</h2>
            <div class="card">
                <div class="card-body">
                    <i class="fa fa-pen fa-xs edit"></i>
                    <table>
                        <tbody>
                            <tr>
                                <td>Name</td>
                                <td>:</td>
                                <td>{{ $data->first_name }} {{ $data->last_name }}</td>
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
                                <td>Kota Dasar</td>
                                <td>:</td>
                                <td>#</td>
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
                                <td>#</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>{{ $data->email }}</td>
                            </tr>
                            <tr>
                                <td>Telepon</td>
                                <td>:</td>
                                <td>#</td>
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
    </div>
    <!-- End -->
@endsection
