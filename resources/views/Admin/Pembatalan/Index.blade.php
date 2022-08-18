@extends('Layout.Index')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
@section('container')
    <div class="content">
        <div class="card-header ">
            <div class="row">
                <div class="col-auto">
                    <h4>Pembatalan</h4>
                </div>
                <form action="?" class="col-auto ms-auto">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" value="{{ request()->search }}" placeholder="Search..."
                               name="search">
                        <button class="btn btn-secondary" type="submit">Search</button>
                    </div>
                </form>
            </div>
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
                        <td><a href="{{ route('detail_pembatalan') }}">
                                <button type="button"
                                        class="admin-btn">Detail Pembatalan
                                </button>
                            </a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            {{ $pembatalan->links() }}
        </div>
    </div>
@endsection
