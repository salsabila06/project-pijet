@extends('Layout.Index')
@section('Content')
<div class="tutor">
    <h2 class="title ms-5">Tranksaksi</h2>
  <nav2 class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="berhasil">
        <li class="nav-item">
            <a class="nav-link active ms-5" id="menu-trans" aria-current="page" href="/Transaksi">Transaksi Terakhir</a>
            </li>
        <li class="nav-item">
            <a class="nav-link active ms-5" id="menu-gagal" aria-current="page" href="/Transaksi-Gagal">Gagal</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active ms-5" id="menu-pending" aria-current="page" href="/Transaksi-Pending">Pending</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active ms-5" id="menu-berhasil" aria-current="page" href="/Transaksi-Berhasil">Berhasil</a>
        </li>
      </ul>

      <form class="d-flex" role="search">
          <input class="form-control-i me-2" type="search" placeholder="Cari"  aria-label="Search">
          <button class="btn btn-light" type="submit"><i class="fa fa-search"></i></button>
      </form>
    </div>
    </div>
  </nav2>
  <div class="table-responsive-sm">

    <table class="table caption-top table-valign-middle">
      </div>
    </div>
      <thead>
        <tr class="col-style">
          <th scope="col">Username</th>
          <th scope="col">Jenis Pijat</th>
          <th scope="col">Tanggal Tranksaksi</th>
          <th scope="col">Total Pembayaran</th>
          <th scope="col">Status</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr scope="row" class="isi-style">
          <td>
            <img src="assets/img/foto-user.svg" alt="Product 1" class="img-circle img-size-32 mr-2">
            Naswa Bila Zakia</td>
            <td>Pijat Prenatal</td>
            <td>20/1/2022</td>
            <td>Rp 60.000</td>
            <td class="text-success">Berhasil</td>
            <td><button onclick="on()" class="status-btn3" type="button">
                detail pemesanan
            </button>
        </td>
        </tr>

        <tr scope="row" class="isi-style">
            <td>
              <img src="assets/img/foto-user.svg" alt="Product 1" class="img-circle img-size-32 mr-2">
              Dalia Amalia</td>
              <td>Pijat Tradisional</td>
              <td>30/1/2022</td>
              <td>Rp 50.000</td>
              <td class="text-success">Berhasil</td>
              <td><button onclick="on()" class="status-btn3" type="button">
                detail pemesanan
              </button>
          </td>
          </tr>

          <tr scope="row" class="isi-style">
            <td>
              <img src="assets/img/foto-user.svg" alt="Product 1" class="img-circle img-size-32 mr-2">
              Habib Rafi’i</td>
              <td>Pijat Jaringan dalam</td>
              <td>1/2/2022</td>
              <td>Rp 75.000</td>
              <td class="text-success">Berhasil</td>
              <td><button onclick="on()" class="status-btn3" type="button">
                detail pemesanan
              </button>
          </td>
          </tr>
    </table>
  </div>
</div>

<div class="detail3">
<div id="overlay" onclick="off()">
  <div class="card-overlay">
    <center>
      <div class="card-container">
        <h4 class="title-profil">BERHASIL</h4>
        <img class="close" src="assets/img/Check_round_fill.svg" alt="user" />
        <div class="d-flex align-items-center">
          <div>
            <img src="assets/img/pijat-parental.svg" alt="" class="poto" />
          </div>
          <div>
            <p class="d-flex flex-column mb-0">
              <b>Pijat Prenatal <br class="small text" />Order dari :</b
              ><span>
                <img src="assets/img/foto-user.svg" alt="" />
                Naswa Bila Zakia</span>
            </p>
          </div>
        </div>
        <div class="row-b">
          <div class="column mx-2">
            <table>
              <tr style="border-top: 1px solid #000000">
                <th>Pijat Prenatal</th>
                <th>Rp150.000</th>
              </tr>
              <tr>
                <td class="me-3">1 Jam</td>
                <td></td>
              </tr>
              <tr>
                <td>30 Juni 2022</td>
                <td></td>
              </tr>
              <tr>
                <td>19.00</td>
                <td></td>
              </tr>
              <tr style="border-bottom: 1px solid #000000">
                <td>Disc. 50%</td>
                <td>- Rp75.000</td>
              </tr>
              <tr>
                <td>BRI Virtual Account</td>
              </tr>
              <tr style="border-bottom: 1px solid #000000" >
                <td>Total</td>
                <td>Rp75.000</td>
              </tr>
              <tr >
                <td></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </center>
  </div>
</div>
</div>
<!-- script -->
<script src="js/script.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
@endsection
