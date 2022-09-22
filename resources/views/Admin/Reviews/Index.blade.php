@extends('Layout.Index')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">


@section('container')
    <div class="card" style="margin-top: 50px">
        <div class="content" >
            <div class="card-header ">
                <div class="row">
                    <div class="col-auto">
                        <h4>Review</h4>
                    </div>
                    <form action="?" class="col-auto ms-auto">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" value="{{ request()->search }}"
                                   placeholder="Search..."
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
                                @else
                                    <span class="fa fa-star checked" style="color:yellow;"></span>
                                    <span class="fa fa-star checked" style="color:yellow;"></span>
                                    <span class="fa fa-star checked" style="color:yellow;"></span>
                                    <span class="fa fa-star checked" style="color:yellow;"></span>
                                    <span class="fa fa-star checked" style="color:yellow;"></span>
                                @endif
                            </td>
                            <td>
                                <button type="button" class="admin-btn" data-bs-toggle="modal"
                                        data-bs-target="#reviewModal-{{ $data->id }}">Detail Ulasan
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center">
                {{ $review->links() }}
            </div>
        </div>
    </div>
    @foreach ($review as $data)
        <div class="modal fade" id="reviewModal-{{ $data->id }}">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Detail Ulasan</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal boody -->
                    <div class="detail-main">
                        <div class="d-flex align-items-center">
                            <div>
                                <img src="assets/img/pijat-parental.svg" alt="foto" class="poto"/>
                            </div>
                            <div>
                                <p class="d-flex flex-column mb-0">
                                    <b>Pijat Prenatal <br class="small text"/>Order dari :</b>
                                    <span>
                                        <img src="assets/img/foto-user.svg" alt="foto"/>Naswa Bila Zakia
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="bdy d-flex">
                            <div class="col-8">Pijat Prenatal</div>
                            <div class="ml-auto">Rp.150.000</div>
                        </div>
                        <div class="bdy d-flex">
                            <div class="col-8">1 Jam</div>
                            <!-- <div class="ml-auto green">Rp.335,000</div> -->
                        </div>
                        <div class="bdy d-flex">
                            <div class="col-8">30 Juni 2022</div>
                            <!-- <div class="ml-auto green">Rp.335,000</div> -->
                        </div>
                        <div class="bdy d-flex">
                            <div class="col-8">19.00</div>
                            <!-- <div class="ml-auto green">Rp.335,000</div> -->
                        </div>
                        <div class="bdy d-flex">
                            <div class="col-8">Disc. 50%</div>
                            <div class="ml-auto green">-Rp.75.000</div>
                        </div>
                        <div class="bdy d-flex">
                            <div class="col-8">Total</div>
                            <div class="ml-auto green">Rp.75.000</div>
                        </div>
                        <div class="pt-2">
                            <div class="border-top px-4 mx-8 pt-2"></div>
                            <h6>Rating</h6>
                        </div>
                        <div class="d-flex justify-content-center flex-row">
                            <h3 class="pl-2">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>

                            </h3>
                        </div>
                        <div class="pl-2 d-flex justify-content-center">Sangat baik</div>

                        <div class="pt-2">
                            <div class="border-top px-4 mx-8 pt-2"></div>
                            <h6>Ulasan</h6>
                        </div>
                        <div class="d-flex flex-row">
                            <p class="pl-2">
                                <textarea class="pl-2 ms-3" rows="2">Keren banget kak</textarea>
                            </p>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>

    @endforeach
@endsection
