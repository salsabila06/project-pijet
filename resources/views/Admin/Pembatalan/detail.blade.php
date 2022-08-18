@extends('Layout.Index')

@section('container')
    <div class="leftcontent">
        <div class="leftccont">
            <h2 class="title">Detail Pembatalan</h2>
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
                    <textarea class="form-control" rows="5"
                              placeholder="detail alasan">ada acara di luar kota</textarea>
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
                <img src="assets/img/pijat-parental.svg" alt="" class="poto"/>
            </div>
            <div>
                <p class="d-flex flex-column mb-0">
                    <b>Pijat Prenatal <br class="small text"/>Order dari :</b><span>
                        <img src="assets/img/foto-user.svg" alt=""/>
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
@endsection
