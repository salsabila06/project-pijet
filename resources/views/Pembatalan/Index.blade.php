@extends('Layout.Index')
@section('link')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
@endsection
@section('container')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4><b>Pembatalan</b></h4>
            </div>
            <div class="card-body">
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
                            <td><a><button type="button" class="admin-btn"
                                           data-bs-toggle="modal" data-bs-target="#pembatalanModal-{{ $data->id }}">Detail Pembatalan</button></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @foreach ($pembatalan as $data)
        <div class="modal fade" id="pembatalanModal-{{ $data->id }}">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title">Detail Pembatalan</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="detail-main">

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>
    @endforeach

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
