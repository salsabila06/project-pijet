@extends('Layout.Index')

@section('link')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
@endsection


@section('container')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Review</h4>
            </div>
            <div class="card-body">
                <table id="table" class="table display">

                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Jasa Pijat</th>
                            <th>Rating</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($review as $data)
                            <tr>
                                <td>{{ $data['first_name'] }} {{ $data['last_name'] }}</td>
                                <td>{{ $data['jasa_pijat'] }}</td>
                                <td class="rating mt-2 mb-2">
                                    @if ($data->rating == 1)
                                        <span class="fa fa-star checked" style="color:yellow;"></span>
                                        <span class="fa fa-star checked" style="opacity: 30%"></span>
                                        <span class="fa fa-star checked" style="opacity: 30%"></span>
                                        <span class="fa fa-star checked" style="opacity: 30%"></span>
                                        <span class="fa fa-star checked" style="opacity: 30%"></span>
                                    @elseif ($data->rating == 2)
                                        <span class="fa fa-star checked" style="color:yellow;"></span>
                                        <span class="fa fa-star checked" style="color:yellow;"></span>
                                        <span class="fa fa-star checked" style="opacity: 30%"></span>
                                        <span class="fa fa-star checked" style="opacity: 30%"></span>
                                        <span class="fa fa-star checked" style="opacity: 30%"></span>
                                    @elseif ($data->rating == 3)
                                        <span class="fa fa-star checked" style="color:yellow;"></span>
                                        <span class="fa fa-star checked" style="color:yellow;"></span>
                                        <span class="fa fa-star checked" style="color:yellow;"></span>
                                        <span class="fa fa-star checked" style="opacity: 30%"></span>
                                        <span class="fa fa-star checked" style="opacity: 30%"></span>
                                    @elseif ($data->rating == 4)
                                        <span class="fa fa-star checked" style="color:yellow;"></span>
                                        <span class="fa fa-star checked" style="color:yellow;"></span>
                                        <span class="fa fa-star checked" style="color:yellow;"></span>
                                        <span class="fa fa-star checked" style="color:yellow;"></span>
                                        <span class="fa fa-star checked" style="opacity: 30%"></span>
                                    @elseif ($data->rating == 5)
                                        <span class="fa fa-star checked" style="color:yellow;"></span>
                                        <span class="fa fa-star checked" style="color:yellow;"></span>
                                        <span class="fa fa-star checked" style="color:yellow;"></span>
                                        <span class="fa fa-star checked" style="color:yellow;"></span>
                                        <span class="fa fa-star checked" style="color:yellow;"></span>
                                    @else
                                        <span class="fa fa-star checked" style="opacity: 30%"></span>
                                        <span class="fa fa-star checked" style="opacity: 30%"></span>
                                        <span class="fa fa-star checked" style="opacity: 30%"></span>
                                        <span class="fa fa-star checked" style="opacity: 30%"></span>
                                        <span class="fa fa-star checked" style="opacity: 30%"></span>
                                    @endif
                                </td>
                                <td><a href="#"><button type="button" class="admin-btn">Detail Ulasan</button></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
