@extends('Layout.Index')
@section('link')
    <link rel="stylesheet" href="{{ asset('css/table.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
@section('container')
    <div class="pemb">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4><b>Pembatalan</b></h4>
                </div>
                <div class="card-body scroll">
                    <table id="example2" class="table display">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pembatalan as $data)
                                <tr>
                                    <td>{{ $data['username'] }}</td>
                                    <td>{{ $data['email'] }}</td>
                                    <td><a href="{{ route('detail_pembatalan') }}"><button type="button"
                                                class="admin-btn">Detail Pembatalan</button></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-center">
                    {{ $pembatalan->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
