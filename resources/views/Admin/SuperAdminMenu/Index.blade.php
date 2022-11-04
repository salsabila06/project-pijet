@extends('Layout.Index')

@section('container')
    @if(session()->has('message'))
        <div class="text-green-600 mb-4">{{session()->get('message')}}</div>
    @endif
    @if(session()->has('delete'))
        <div class="text-green-600 mb-4">{{session()->get('delete')}}</div>
    @endif
    <div class="card" style="margin-top: 25px">
        <div class="content">
            <div class="card-header " style="margin-bottom: 30px">
                <div class="row">
                    <div class="col-auto">
                        <h4>Admin</h4>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg" style="margin-left: 20px">
                <div class="float-start">
                    <button type="button" class="btn-tambah" data-bs-toggle="modal"
                            data-bs-target="#exampleModal"><i
                            class="fa fa-user-plus "></i>Tambah admin baru
                    </button>
                </div>
                <form action="?" class="col-auto ms-auto" style="margin-right: 20px">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" value="{{ request()->search }}"
                               placeholder="Search..."
                               name="search">
                        <button class="btn btn-secondary" type="submit">Search</button>
                    </div>
                </form>
            </nav>
            <nav class="navbar navbar-expand-lg" style="margin-left: 20px">
                <ul class="navbar-nav" style="text-align: left">
                    <li class="nav-item">
                        <a class="statusMenu " id="menu-berhasil" aria-current="page"
                           href="{{ route('superadmin') }}"><b>Admin</b></a>
                    <li class="nav-item">
                        <a class="statusMenu ms-5" id="menu-menunggu" aria-current="page"
                           href="{{ route('superfinance') }}"><b>Finance</b></a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="card-body scroll">
            <table id="example2" class="table display">
                <thead>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>No Tel</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($admin as $stat)
                    <tr>
                        <td>{{ $stat->username }}</td>
                        <td>{{ $stat->email}}</td>
                        <td>{{ $stat->number }}</td>
                        <td><a>
                                <button type="button" class="btn btn-info detail" data-bs-toggle="modal"
                                        data-bs-dimiss="modal"
                                        data-bs-target="#Detailakun-{{ $stat->id }}">Detail Akun
                                </button>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog  modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Tambah Data</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('createAccount')}}" method="post">
                        @csrf
                        <div class="row g-3 align-items-center">
                            <div class="row g-3 align-items-center">
                                <div class="col-3">
                                    <label for="inputNama" class="col-form-label">Name</label>
                                </div>
                                <div class="col-1">
                                    <label class="col-form-label">:</label>
                                </div>
                                <div class="col-8">
                                    <input id="inputNama" name="name" class="form-control"
                                           placeholder="Name" required>
                                </div>
                            </div>
                            <div class="row g-3 align-items-center">
                                <div class="col-3">
                                    <label for="inputUsername" class="col-form-label">Username</label>
                                </div>
                                <div class="col-1">
                                    <label class="col-form-label">:</label>
                                </div>
                                <div class="col-8">
                                    <input id="inputUsername" name="username" class="form-control"
                                           placeholder="Username" required>
                                </div>
                            </div>
                            <div class="row g-3 align-items-center">
                                <div class="col-3">
                                    <label for="inputPassword" class="col-form-label">Password</label>
                                </div>
                                <div class="col-1">
                                    <label class="col-form-label">:</label>
                                </div>
                                <div class="col-8">
                                    <input type="password" id="inputPassword" name="password"
                                           class="form-control"
                                           placeholder="Password" required>
                                </div>
                            </div>
                            <div class="row g-3 align-items-center">
                                <div class="col-3">
                                    <label for="inputEmail" class="col-form-label">Email</label>
                                </div>
                                <div class="col-1">
                                    <label class="col-form-label">:</label>
                                </div>
                                <div class="col-8">
                                    <input id="inputEmail" name="email" class="form-control"
                                           placeholder="Email" required>
                                </div>
                            </div>
                            <div class="row g-3 align-items-center">
                                <div class="col-3">
                                    <label for="inputTtl" class="col-form-label">Tanggal Lahir</label>
                                </div>
                                <div class="col-1">
                                    <label class="col-form-label">:</label>
                                </div>
                                <div class="col-8">
                                    <input type="date" id="inputTtl" name="TTL" class="form-control" required>
                                </div>
                            </div>
                            <div class="row g-3 align-items-center">
                                <div class="col-3">
                                    <label for="inputNoTlpn" class="col-form-label">No Telepon</label>
                                </div>
                                <div class="col-1">
                                    <label class="col-form-label">:</label>
                                </div>
                                <div class="col-8">
                                    <input id="inputNoTlpn" name="number" class="form-control"
                                           placeholder="No Telepon" required>
                                </div>
                            </div>
                            <div class="row g-3 align-items-center">
                                <div class="col-3">
                                    <label for="inputAlamat" class="col-form-label">Alamat</label>
                                </div>
                                <div class="col-1">
                                    <label class="col-form-label">:</label>
                                </div>
                                <div class="col-8">
                                    <input id="inputAlamat" name="address" class="form-control"
                                           placeholder="Alamat" required>
                                </div>
                            </div>
                            <div class="row g-3 align-items-center">
                                <div class="col-3">
                                    <label for="inputAlamat" class="col-form-label">Posisi</label>
                                </div>
                                <div class="col-1">
                                    <label class="col-form-label">:</label>
                                </div>
                                <div class="col-8 ">
                                    <div>
                                        <label for="admin">
                                            <input type="radio" id="admin" name="role" value="1" required>Admin
                                        </label>
                                        <br>
                                        <br>
                                        <label for="finance">
                                            <input type="radio" id="finance" name="role" value="2" required>Finance
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-center">
                                <button type="submit" class="btn-save">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @foreach ($admin as $stat)
        <div class="modal fade" id="Detailakun-{{ $stat->id }}">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Detail Admin</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="detail-main">
                        <img src="/image/Chat.svg" class="float-start" style="width:90px" alt="">
                        <table>
                            <tbody>
                            <tr>
                                <td>{{ $stat->username }}</td>
                            </tr>
                            <td>{{ $stat->role }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <div class="row g-3 align-items-center">
                            <div class="row g-3 align-items-center">
                                <div class="col-3">
                                    <label for="inputUsername" class="col-form-label">Username</label>
                                </div>
                                <div class="col-1">
                                    <label class="col-form-label">:</label>
                                </div>
                                <div class="col-8">
                                    <input id="inputUsername" name="username" class="form-control"
                                           placeholder="Username" value="{{$stat->username}}" disabled>
                                </div>
                            </div>
                            <div class="row g-3 align-items-center">
                                <div class="col-3">
                                    <label for="inputEmail" class="col-form-label">Email</label>
                                </div>
                                <div class="col-1">
                                    <label class="col-form-label">:</label>
                                </div>
                                <div class="col-8">
                                    <input id="inputEmail" name="email" class="form-control"
                                           placeholder="Email" value="{{$stat->email}}" disabled>
                                </div>
                            </div>
                            <div class="row g-3 align-items-center">
                                <div class="col-3">
                                    <label for="inputTtl" class="col-form-label">Tanggal Lahir</label>
                                </div>
                                <div class="col-1">
                                    <label class="col-form-label">:</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" id="inputTtl" name="TTL" class="form-control"
                                           value="{{$stat->TTL}}" disabled>
                                </div>
                            </div>
                            <div class="row g-3 align-items-center">
                                <div class="col-3">
                                    <label for="inputNoTlpn" class="col-form-label">No Telepon</label>
                                </div>
                                <div class="col-1">
                                    <label class="col-form-label">:</label>
                                </div>
                                <div class="col-8">
                                    <input id="inputNoTlpn" name="number" class="form-control"
                                           placeholder="No Telepon" value="{{$stat->number}}" disabled>
                                </div>
                            </div>
                            <div class="row g-3 align-items-center">
                                <div class="col-3">
                                    <label for="inputAlamat" class="col-form-label">Alamat</label>
                                </div>
                                <div class="col-1">
                                    <label class="col-form-label">:</label>
                                </div>
                                <div class="col-8">
                                    <input id="inputAlamat" name="address" class="form-control"
                                           placeholder="Alamat" value="{{$stat->address}}" disabled>
                                </div>
                            </div>
                            <div class="row g-3 align-items-center">
                                <div class="col-3">
                                    <label for="inputRole" class="col-form-label">Posisi</label>
                                </div>
                                <div class="col-1">
                                    <label class="col-form-label">:</label>
                                </div>
                                <div class="col-8">
                                    <input id="inputRole" name="role" class="form-control"
                                           placeholder="role" value="{{$stat->role}}" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <div class="container-fluid">

                        </div>
                        <div class="container-fluid">
                            <a>
                                <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                        data-bs-dimiss="modal"
                                        data-bs-target="#EditData-{{ $stat->id }}">Edit Data
                                </button>
                            </a>
                            <a href="{{ route('deleteData', $stat->id) }}">
                                <button type="button"
                                        class="badge rounded-pill bg-danger mx-auto d-block"
                                        style="font-size:15px; border:none; height: 40px; width:175px"
                                        data-bs-dismiss="modal">Delete
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    @foreach ($admin as $stat)
        <div class="modal fade" id="EditData-{{ $stat->id }}">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Detail Admin</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="detail-main">
                        <img src="/image/Chat.svg" class="float-start" style="width:90px" alt="">
                    </div>
                    <div class="modal-footer">
                        <form action="{{route('editData')}}" method="post">
                            @method("put")
                            @csrf
                            <div class="row g-3 align-items-center">
                                <div class="row g-3 align-items-center">
                                    <div class="col-3">
                                        <label for="inputUsername" class="col-form-label">Username</label>
                                    </div>
                                    <div class="col-1">
                                        <label class="col-form-label">:</label>
                                    </div>
                                    <div class="col-8">
                                        <input id="inputUsername" name="username" class="form-control"
                                               placeholder="Username" value="{{old('username',$stat->username)}}">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center">
                                    <div class="col-3">
                                        <label for="inputEmail" class="col-form-label">Email</label>
                                    </div>
                                    <div class="col-1">
                                        <label class="col-form-label">:</label>
                                    </div>
                                    <div class="col-8">
                                        <input id="inputEmail" name="email" class="form-control"
                                               placeholder="Email" value="{{old('email',$stat->email)}}">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center">
                                    <div class="col-3">
                                        <label for="inputTtl" class="col-form-label">Tanggal Lahir</label>
                                    </div>
                                    <div class="col-1">
                                        <label class="col-form-label">:</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" id="inputTtl" name="TTL" class="form-control"
                                               value="{{old('TTL',$stat->TTL)}}">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center">
                                    <div class="col-3">
                                        <label for="inputNoTlpn" class="col-form-label">No Telepon</label>
                                    </div>
                                    <div class="col-1">
                                        <label class="col-form-label">:</label>
                                    </div>
                                    <div class="col-8">
                                        <input id="inputNoTlpn" name="number" class="form-control"
                                               placeholder="No Telepon" value="{{old('number',$stat->number)}}">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center">
                                    <div class="col-3">
                                        <label for="inputAlamat" class="col-form-label">Alamat</label>
                                    </div>
                                    <div class="col-1">
                                        <label class="col-form-label">:</label>
                                    </div>
                                    <div class="col-8">
                                        <input id="inputAlamat" name="address" class="form-control"
                                               placeholder="Alamat" value="{{old('address',$stat->address)}}">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center" hidden>
                                    <div class="col-3">
                                        <label for="inputRole" class="col-form-label">Posisi</label>
                                    </div>
                                    <div class="col-1">
                                        <label class="col-form-label">:</label>
                                    </div>
                                    <div class="col-8">
                                        <input id="inputRole" name="role" class="form-control"
                                               placeholder="role" value="{{old('role',$stat->role)}}">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="container-fluid">
                                        <div class="container-fluid">
                                            <button type="submit" class="btn btn-info" data-bs-toggle="modal"
                                                    data-bs-target="#disimpan">Simpan
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection
@section('script')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(.delete
        ).click(function () {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                }
            });
        });
    </script>
@endsection
