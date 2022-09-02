@extends('Layout.Index')
@section('Content')

<div class="tutor4">

    <h2 class="title ms-5">Pembatalan</h2>
  <nav4 class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="pending"> <!-- -->
      </ul>

      <form class="d-flex" role="search">
          <input class="form-control-i me-2" type="search" placeholder="Cari"  aria-label="Search">
          <button class="btn btn-light" type="submit"><i class="fa fa-search"></i></button>
      </form>
    </div>
    </div>
  </nav4>

  <div class="table-responsive-sm">
    <table class="table caption-top table-valign-middle">
      </div>
    </div>
      <thead>
        <tr class="col-style">
          <th scope="col" class="review-sty">Username</th>
        <th scope="col" class="review-sty">Email</th>
        <th scope="col" class="review-sty">Aksi</th>
        </tr>
      </thead>
      <tbody>

        <tr scope="row" class="isi-style">
            <td>
                <img src="assets/img/foto-user.svg" alt="Product 1" class="img-circle img-size-32 mr-2">
                Naswa Bila Zakia</td>
            <td>atta@gmail.com</td>
            <td>
                <a href="/Detail-Pembatalan">Detail Pembatalan</a>
            </td>
          </tr>
        </tbody>

        <tbody>
            <tr scope="row" class="isi-style">
              <td>
                  <img src="assets/img/foto-user.svg" alt="Product 1" class="img-circle img-size-32 mr-2">
                  Dalia Amalia </td>
              <td>def@gmail.com</td>
              <td>
                  <a href="/Detail-Pembatalan">Detail Pembatalan</a>
              </td>
            </tr>
          </tbody>

          <tbody>
            <tr scope="row" class="isi-style">
              <td>
                  <img src="assets/img/foto-user.svg" alt="Product 1" class="img-circle img-size-32 mr-2">
                  Habib Rafi’i</td>
              <td>ghi@gmail.com</td>
              <td>
                  <a href="/Detail-Pembatalan">Detail Pembatalan</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    </div>



  <!-- script -->
  <script src="js/script.js"></script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>


@endsection








{{-- @extends('Layout.layout')
@section('Content')
<div class="tutor2">

    <div class="card-body">
      <h2 class="title ms-5">Pembatalan</h2>
    <nav3 class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="pending">
          </ul>

        <form class="d-flex" role="search">
            <input type="search" placeholder="Cari"  aria-label="Search">
            <button class="btn btn-light" type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
      </div>
    </nav3>
    <div class="table-responsive-sm">
      <table class="table caption-top table-valign-middle">
      </div>
      </div>
      <thead>
        <tr class="col-review">
          <th scope="col" class="review-sty">Username</th>
          <th scope="col" class="review-sty">Email</th>
          <th scope="col" class="review-sty">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr scope="row" class="isi-style">
          <td>
              <img src="assets/img/foto-user.svg" alt="Product 1" class="img-circle img-size-32 mr-2">
              Naswa Bila Zakia</td>
          <td>atta@gmail.com</td>
          <td>
              <a href="/Detail-Pembatalan">Detail Pembatalan</a>
          </td>
        </tr>
      </tbody>

      <tbody>
          <tr scope="row" class="isi-style">
            <td>
                <img src="assets/img/foto-user.svg" alt="Product 1" class="img-circle img-size-32 mr-2">
                Dalia Amalia </td>
            <td>def@gmail.com</td>
            <td>
                <a href="/Detail-Pembatalan">Detail Pembatalan</a>
            </td>
          </tr>
        </tbody>

        <tbody>
          <tr scope="row" class="isi-style">
            <td>
                <img src="assets/img/foto-user.svg" alt="Product 1" class="img-circle img-size-32 mr-2">
                Habib Rafi’i</td>
            <td>ghi@gmail.com</td>
            <td>
                <a href="/Detail-Pembatalan">Detail Pembatalan</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  </div>

   <!-- javascript -->
   <script src="/js/script.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

@endsection --}}
