@extends('Layout.Index')

@section('container')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4><b>Pengguna</b></h4>
            </div>
            <div class="card-body">
                <p style="padding-left: 20px"><b>Daftar Pengguna</b></p>
                <table id="example2" class="table display">
                    <thead>
                        <tr>
                            <th>No ID</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>No Telepon</th>
                            <th>No KTP</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pengguna as $data)
                            <tr>
                                <td>{{ $data['id'] }}</td>
                                <td>{{ $data['username'] }}</td>
                                <td>{{ $data['email'] }}</td>
                                <td>{{ $data['no_telp'] }}</td>
                                <td>{{ $data['no_ktp'] }}</td>
                                <td><a href="{{ route('pengguna') }}/{{ $data->id }}"><button type="button"
                                            class="btn btn-info">Detail Pengguna</button></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
