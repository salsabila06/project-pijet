@extends('Layout.Index')

@section('link')
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;1,700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('css/det_pembatalan.css') }}" />
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
@endsection

@section('container')
    <div class="row-cols-3">
        <div class="leftcontent">
            <div class="leftccont">
                <h2 class="title_det_pemabatalan">Detail Pembatalan</h2>
            </div>
            <div class="bborder">
                <div class="cardbody">
                    <div class="form-group">
                        <h5 class="card-title">Alasan Pembatalan</h5>
                        <label class="subtitle">Keperluan mendesak</label>
                        <!-- <input type="text"> -->
                    </div>

                    <!-- text area -->
                    <div class="form-group">
                        <textarea class="form-control w-100" rows="5" placeholder="detail alasan">ada acara di luar kota</textarea>
                    </div>
                </div>

                <div class="cardbody">
                    <h5 class="card-title">Note untuk finance</h5>
                    <!-- text area -->
                    <div class="form-group">
                        <textarea class="form-control" rows="5" placeholder="enter..">
                            Bla Bla Bla Bla Bla BlaBlaBla Bla Bla BlaBlaBlaBlaBla
                        </textarea>
                    </div>
                </div>
                <div>
                    <button class="decline">Tolak</button>
                    <button class="accept">Setujui Pembatalan</button>
                </div>
            </div>
        </div>

        <div class="rightcontent">
            <div class="d-flex align-items-center">
                <div>
                    <img src="{{ asset('img/pijat-parental.svg') }}" alt="" class="poto" />
                </div>
                <div>
                    <p class="d-flex flex-column mb-0">
                        <b>Pijat Prenatal <br class="small text" />Order dari :</b><span>
                            <img src="{{ asset('img/foto-user.svg') }}" alt="" />
                            Naswa Bila Zakia</span>
                    </p>
                </div>
            </div>

            <div class="bdy d-flex me-5 fw-bold" style="border-top: 1px solid #000000">
                <div class="col-8">Pijat Prenatal</div>
                <div class="ml-auto">Rp.150.000</div>
            </div>
            <div class="bdy d-flex me-5">
                <div class="col-8">1 Jam</div>
                <!-- <div class="ml-auto green">Rp.335,000</div> -->
            </div>
            <div class="bdy d-flex me-5">
                <div class="col-8">30 Juni 2022</div>
                <!-- <div class="ml-auto green">Rp.335,000</div> -->
            </div>
            <div class="bdy d-flex me-5">
                <div class="col-8">19.00</div>
                <!-- <div class="ml-auto green">Rp.335,000</div> -->
            </div>
            <div class="bdy d-flex me-5" style="border-bottom: 1px solid #000000">
                <div class="col-8">Disc. 50%</div>
                <div class="ml-auto green">-Rp.75.000</div>
            </div>
            <div class="bdy d-flex me-5 fw-bold">
                <div class="col-8">Total Refund</div>
                <div class="ml-auto green">Rp.75.000</div>
            </div>
        </div>
    </div>
@endsection
