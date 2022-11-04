@extends('Layout.Index')

@section('link')
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;1,700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('css/det_pembatalan.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/table4.css') }}" /> --}}
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
@endsection

@section('container')
    @if (Auth::guard('admin')->user()->role == '1')
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
                        <button class="decline" type="reset" onclick="alert('Permintaan telah ditolak!')">Tolak</button>
                        <button class="accept" type="submit" onclick="alert('Saldo telah dikembalikan!')">Setujui
                            Pembatalan</button>
                    </div>
                </div>
            </div>
        </div>
    @elseif (Auth::guard('admin')->user()->role == '2')
        <div class="row-cols-3">
            <!-- navbar -->
            <div class="leftcontent">
                <h1 class="title">Detail Pembatalan</h1>
                <br><br><br><br><br><br>
                <div class="bborder">
                    <div class="cardbody">
                        <div class="form-group">

                            <h5 class="card-title">Alasan
                                Pembatalan</h5>
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
                        <h5 class="card-title">Note dari
                            admin</h5>
                        <!-- text area -->
                        <div class="form-group">
                            <textarea class="form-control" rows="7" placeholder="enter..">Bla Bla Bla Bla Bla BlaBlaBla Bla Bla BlaBlaBlaBlaBla        </textarea>
                        </div>
                    </div>
                    <div>
                        <button class="decline" type="reset" onclick="alert('Permintaan telah ditolak!')">Tolak</button>
                        <button class="accept" type="submit" onclick="alert('Saldo telah dikembalikan!')">Setujui
                            Pembatalan</button>
                    </div>

                </div>
                </table>
            </div>
        </div>
    @endif
@endsection
