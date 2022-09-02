@extends('Layout.Index')
@section('Content')
<div class="tutor">

    <h2 class="title ms-5">Pengguna</h2>
  <nav3 class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="daftar1">
          <li class="nav-item">
          <a class="nav-link active ms-5" id="menu-mitra" aria-current="page" href="/Pengguna">Mitra</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active ms-5" id="menu-pelanggan" aria-current="page" href="/Pelanggan-Finance">Pelanggan</a>
          </li>
        </ul>
     <div class="tod">
      <form class="d-flex" role="search">
          <input class="form-control-i me-2" type="search" placeholder="Cari"  aria-label="Search">
          <button class="btn btn-light" type="submit"><i class="fa fa-search"></i></button>
      </form>
    </div>
    </div>
    </div>
  </nav3>

  <div class="table-responsive-sm">

    <table class="table caption-top table-valign-middle">
      </div>
    </div>
      <thead>
         <tr class="col-style">
        <th scope="col" class="review-sty">Username</th>
        <th scope="col" class="review-sty">Email</th>
        <th scope="col" class="review-sty">No Tel</th>
        <th scope="col" class="review-sty">No KTP</th>
        <th scope="col" class="review-sty">Aksi</th>
      </tr>
      </thead>

      <tbody>
      <tr scope="row" class="isi-style">
        <td>
            <img src="assets/img/foto-user.svg" alt="Product 1" class="img-circle img-size-32 mr-2">
            Naswa Bila Zakia</td>
        <td>atta@gmail.com</td>
        <td>081226789086</td>
        <td>9022005699012345</td>
        <td><a class="pengguna-btn" href="dashboard-finance.html" type="submit">Detail Pengguna</a></td>
      </tr>
    </tbody>

    <tbody>
      <tr scope="row" class="isi-style">
        <td>
            <img src="assets/img/foto-user.svg" alt="Product 1" class="img-circle img-size-32 mr-2">
            Dalia Amalia </td>
        <td>cantik@gmail.com</td>
        <td>083457890987</td>
        <td>9022005699012345</td>
        <td><a class="pengguna-btn" href="dashboard-finance.html" type="submit">Detail Pengguna</a></td>
      </tr>
    </tbody>



    <tbody>
      <tr scope="row" class="isi-style">
        <td>
            <img src="assets/img/foto-user.svg" alt="Product 1" class="img-circle img-size-32 mr-2">
            Habib Rafi’i</td>
        <td>bib@gmail.com</td>
        <td>087356789087</td>
        <td>9022005699012345</td>
        <td><a class="pengguna-btn" href="dashboard-finance.html" type="submit">Detail Pengguna</a></td>
      </tr>
    </tbody>
    </table>
    <div aria-label="Page navigation example" class="pg">
      <ul class="pagination">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <li class="page-item"><a class="page-link active" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </div>

  </div>
</div>
</div>


  <!-- script -->
  <script src="js/script.js"></script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

@endsection


