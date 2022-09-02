@extends('Layout.Index')
@section('Content')

  <div class="container1">
    <div class="test1">
    <h2 class="title ms-2">Detail Transaksi</h2>
    </div>

<table>
<tr>
<td>
<div class="test5">
    <div class="row g-2">
      <div class="col-6">
        <div class="total-pendpt-perbln">
          <div class="float-start">
            <h5 >Total pendapatan</h5>
          </div>
          <div class="float-end" id="month">
           Bulan Juni
          </div>
        </div>
      </div>
    </div>
</div>
      </td>


      <td>
        <div class="content2">
            <div class="">
                <h5><i class="fa fa-calendar-o"
        aria-hidden="true"></i></h5>
                <h5> Pendapatan bulan ini </h5>
                <h3 class="fw-bold">Rp. 2700k</
        h3>
            </div>
        </div>
    </td>

    <td>
        <div class="content3">
            <div class="">
                <h5><i  class="fa fa-calendar"
        aria-hidden="true"></i> </h5>
                <h5>Booking bulan ini </h5>
                <h3 class="fw-bold">24</h3>
            </div>
        </div>
        </div>
    </td>
    </tr>
    <tr>
        <td>

        </td>
    </tr>
</table>

      <div class="test2">
      <div class="col-12">
        <div class="total-pendpt">
          <h5>Total pendapatan</h5>
        </div>
      </div>
      </div>
      </tr>


      <div class="test3">
      <div class="col-12">
        <div class="menunggu-konfirmasi">
          <h5>Menunggu konfirmasi</h5>
          <div class="table-responsive-sm">
            <table class="table caption-top table-borderless">
              <thead>
                <tr class="col-style">
                  <th scope="col">Username</th>
                  <th scope="col">Status</th>
                  <th scope="col">Total Pembayaran</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr scope="row" class="isi-style">
                  <td>
                    <img src="assets/img/foto-user.svg" alt="Product 1" class="img-circle img-size-32 mr-2">
                    Naswa Bila Zakia</td>
                  <td class="text-warning">Waiting for confirmation</td>
                  <td>Rp. 60.000</td>
                  <td><button onclick="on()" class="status-btn3" type="button">
                    detail pemesanan
                  </button>
                   </td>
                </tr>
                <tr scope="row" class="isi-style">
                  <td>
                    <img src="assets/img/foto-user.svg" alt="Product 1" class="img-circle img-size-32 mr-2">
                    Naswa Bila Zakia</td>
                  <td class="text-warning">Waiting for confirmation</td>
                  <td>Rp. 60.000</td>
                  <td><button onclick="on()" class="status-btn3" type="button">
                    detail pemesanan
                  </button>
                   </td>
                </tr>
                <tr scope="row" class="isi-style">
                  <td>
                    <img src="assets/img/foto-user.svg" alt="Product 1" class="img-circle img-size-32 mr-2">
                    Naswa Bila Zakia</td>
                  <td class="text-warning">Waiting for confirmation</td>
                  <td>Rp. 60.000</td>
                  <td><button onclick="on()" class="status-btn3" type="button">
                    detail pemesanan
                  </button>
                   </td>
                </tr>
                <tr scope="row" class="isi-style">
                  <td>
                    <img src="assets/img/foto-user.svg" alt="Product 1" class="img-circle img-size-32 mr-2">
                    Naswa Bila Zakia</td>
                  <td class="text-warning">Waiting for confirmation</td>
                  <td>Rp. 60.000</td>
                  <td><button onclick="on()" class="status-btn3" type="button">
                    detail pemesanan
                  </button>
                   </td>
                </tr>
              </tbody>
            </table>
            </div>
        </div>
      </div>
    </div>
    </div>
  </div>

@endsection
