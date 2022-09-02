@extends('Layout.Index')
@section('Content')
<div class="detail">
 <!-- navbar -->
 <div class="leftcontent">
    <div class="leftccont">
      <h2 class="title">Detail Pembatalan</h2>
    </div>
    <div class="bborder">
      <div class="cardbody">
        <div class="form-group">
          <h5 class="card-title">Alasan Pembatalan</h5>
          <div class="tulisan">
          <label class="subtitle">Keperluan mendesak</label>
          </div>
          <!-- <input type="text"> -->
        </div>

        <!-- text area -->
        <div class="form-group">
          <textarea class="form-control" rows="5" placeholder="detail alasan">ada acara di luar kota</textarea>
        </div>
      </div>

      <div class="cardbody">
        <h5 class="card-title">Note dari admin</h5>
        <!-- text area -->
        <div class="form-group">
          <textarea class="form-control" rows="5" placeholder="enter..">
Bla Bla Bla Bla Bla BlaBlaBla Bla Bla BlaBlaBlaBlaBla
        </textarea
          >
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
        <img src="assets/img/pijat-parental.svg" alt="" class="poto" />
      </div>
      <div class="detail2>
      <div>
        <p class="d-flex flex-column mb-0">
          <b>Pijat Prenatal <br class="small text" />Order dari :</b
          ><span>
            <img src="assets/img/foto-user.svg" alt="" />
            Naswa Bila Zakia</span
          >
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

    <div class="text-center">
      <button onclick="on()" type="submit" class="kirim-btn">Kirim Saldo</button>
    </div>
  </div>

  <!-- overlay ke-1 -->

  <div class="ovrlay-detbatal" id="overlay" onclick="off()">
    <div class="card-overlay">
      <center>
        <div class="card-container">
          <h6 class="judul">Saldo sebanyak Rp 75.000 akan dikembalikan ke pengguna</h6>
          <p class="paragrap">Anda yakin?</p>

          <div class="text-center d-flex my-5 p-5">
            <button type="submit" id="tidak-btn">Tidak</button>
            <button onclick="on()" type="submit" id="ya-btn">Ya</button>
          </div>
        </div>
      </center>
    </div>
  </div>

  <!-- overlay 2  Belum bisa ditampilkan setelah klik button 'ya' pada saldo refund
  -->

  <div class="ovrlay-detbatal" id="overlay" onclick="off()">
    <div class="card-text-bg-dark">
      <div class="card-overlay">
        <center>
          <div class="card-container">
            <img src="assets/img/Check_round_fill.svg" alt="" class="notif-cek" />

            <p class="notip my-4 ms-4">Saldo berhasil dikembalikan</p>
          </div>
        </center>
      </div>
    </div>
  </div>
</div>

  <!--<div class="text-center">
    <td><button class="kirim-btn" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Kirim Saldo</button></td>
  </div>
</div>
  <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel">Detail Verifikasi</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
          <h6 class="judul">Saldo sebanyak Rp 75.000 akan dikembalikan ke pengguna</h6>
          <p class="paragrap">Anda yakin?</p>

          <div class="text-center d-flex my-5 p-5">
              <td><button class="btn-btn-primary1" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Ya</button></td>
              <td><button class="btn-btn-primary2" data-bs-target="#" data-bs-toggle="modal" data-bs-dismiss="modal">Tidak</button></td>
            </div>
          </div>
        </div>
        <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
              <div class="card-container">
                <img src="assets/img/Check_round_fill.svg" alt="" class="notif-cek" />

                <p class="notip my-4 ms-4">Saldo berhasil dikembalikan</p>
              </div>

  <!-- script -->
  <script src="js/script.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

@endsection
