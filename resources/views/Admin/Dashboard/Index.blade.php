@extends('Layout.Index')

@section('link')
    <link rel="stylesheet" href="{{ asset('css/dashboard-adm.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.1/Chart.bundle.js"></script>
@endsection
<style>
    .donut-size {
        font-size: 7em;
    }

    .pie-wrapper {
        position: relative;
        width: 1em;
        height: 1em;
        margin: 0px auto;
    }

    .pie {
        position: absolute;
        top: 0px;
        left: 0px;
        width: 100%;
        height: 100%;
        clip: rect(0, 1em, 1em, 0.5em);
    }

    .half-circle {
        position: absolute;
        top: 0px;
        left: 0px;
        width: 100%;
        height: 100%;
        border: 0.1em solid #348727;
        border-radius: 50%;
        clip: rect(0em, 0.5em, 1em, 0em);
    }

    .right-side {
        transform: rotate(0deg);
    }

    .label {
        position: absolute;
        top: 0.52em;
        right: 0.4em;
        bottom: 0.4em;
        left: 0.4em;
        display: block;
        background: none;
        border-radius: 50%;
        color: #7F8C8D;
        font-size: 0.25em;
        line-height: 2.6em;
        text-align: center;
        cursor: default;
        z-index: 2;
    }

    .smaller {
        padding-bottom: 20px;
        color: #BDC3C7;
        font-size: .45em;
        vertical-align: super;
    }

    .shadow {
        width: 100%;
        height: 100%;
        border: 0.1em solid #A8FF9A;
        border-radius: 50%;
    }

    .content-1 {
        grid-area: content2;
        display: grid;
        background: linear-gradient(246.89deg, #9DFBAC -9.34%, #85FD26 105.23%);
        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.25);
        padding: 1em;
        margin: 10px;
        font-size: 15px;
        color: white;
    }


    .content-2 {
        grid-area: content3;
        display: grid;
        border-radius: 10px;
        background: linear-gradient(248.2deg, #FFCCC6 -12.81%, #E36252 122.46%);
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.25);
        padding: 1em;
        margin: 10px;
        font-size: 15px;
        color: white;
    }

    .total-pendpt {
        position: relative;
        font-family: 'Poppins';
        font-style: normal;
        height: 270px;
        letter-spacing: 0.05em;
        color: #000000;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.25);
        border-radius: 10px;
        margin: 10px;
        padding: 1em;
    }

    .menunggu-konfirmasi {
        position: relative;
        font-family: 'Poppins';
        font-style: normal;
        letter-spacing: 0.05em;
        color: #000000;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.25);
        border-radius: 10px;
        margin: 10px;
        padding: 1em;
    }
</style>
@section('container')
    @if (Auth::guard('admin')->user()->role == '1')
        <div class="dashboard">
            <div class="content1">
                <div id="specificChart" class="donut-size">
                    <div class="pie-wrapper">
                        <span class="label">
                            <span class="num">0</span><span class="smaller">%</span>
                        </span>
                        <div class="pie">
                            <div class="left-side half-circle"></div>
                            <div class="right-side half-circle"></div>
                        </div>
                        <div class="shadow"></div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="d-flex align-items-center">
                        <div class="d-flex flex-column mb-0">
                            <p>Profit ratio</p>
                            <h3>
                                Rp. {{ $profit }}
                            </h3>
                            <i class="fa fa-arrow-up" aria-hidden="true"> Meningkat dari minggu lalu</i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content2" style="margin-top: 50px">
                <div class="container-fluid">
                    <h4>Pengguna aktif </h4>
                    <h4><i class="fa fa-user" aria-hidden="true"></i>{{ $jumlah_data }} </h4>
                </div>
            </div>
            <div class="content3" style="margin-top: 50px">
                <div class="container-fluid">
                    <h3>Total booking bulan ini </h3>
                    <h4><i class="fa fa-calendar" aria-hidden="true"></i>{{ $jumlah_booking }}</h4>
                </div>
            </div>
            <div class="content4" style="margin-top: 50px">
                <div id="diagram">
                </div>
            </div>
        @elseif(Auth::guard('admin')->user()->role == '2')
            <div class="container">
                <h2>Detail Transaksi</h2>
                <div class="row justify-content-start">
                    <div class="col-md-12 col-lg-4 col-xl-4">
                        <div class="content-1">
                            <h5><i class="fa fa-calendar-o" aria-hidden="true"></i></h5>
                            <h5> Pendapatan Keseluruhan </h5>
                            <h3 class="fw-bold">Rp. {{ $profit }}</h3>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4 col-xl-4">
                        <div class="content-2">
                            <h5><i class="fa fa-calendar" aria-hidden="true"></i> </h5>
                            <h5>Booking bulan ini </h5>
                            <h3 class="fw-bold">{{ $jumlah_booking }}</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content4" style="margin-top: 50px">
                <h2>Grafik Total Pendapatan</h2>
                <div class="col-4">
                </div>
                <h6 class="text-active" style="margin-left: 1000px"> <i class="fa fa-calendar-o">6 bulan</i>
                </h6>
                <div id="diagram1">

                </div>
            </div>
            <div class="row" style="width: 100%">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <div class="menunggu-konfirmasi">
                        <h3>Menunggu konfirmasi</h3>
                        <div class="table-responsive-sm ">
                            <table class="table caption-top table-borderless" style="width: 100%">
                                <thead>
                                    <tr class="col-style">
                                        <th scope="col">ID Pijat</th>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col">Waktu Booking</th>
                                        <th scope="col">Durasi Waktu</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pemesanan as $data)
                                        <tr>
                                            <td>{{ $data['jenispijat_id'] }}</td>
                                            <td>{{ $data['jenis_kelamin'] }}</td>
                                            <td>{{ $data['waktu_booking'] }}</td>
                                            <td>{{ $data['durasi_waktu'] }}</td>
                                            <td>{{ $data['alamat'] }}</td>
                                            <td>{{ $data['status'] }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @elseif (Auth::guard('admin')->user()->role == '3')
        <div class="dashboard">
            <div class="content1">
                <div id="specificChart" class="donut-size">
                    <div class="pie-wrapper">
                        <span class="label">
                            <span class="num">0</span><span class="smaller">%</span>
                        </span>
                        <div class="pie">
                            <div class="left-side
half-circle"></div>
                            <div class="right-side
half-circle"></div>
                        </div>
                        <div class="shadow"></div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="d-flex align-items-center">
                        <div class="d-flex flex-column mb-0">
                            <p>Profit ratio</p>
                            <h3>
                                Rp. {{ $profit }}
                            </h3>
                            <i class="fa fa-arrow-up" aria-hidden="true">
                                Meningkat dari minggu lalu</i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content2" style="margin-top: 50px">
                <div class="container-fluid">
                    <h4>Pengguna aktif </h4>
                    <h4><i class="fa fa-user" aria-hidden="true"></i>{{ $jumlah_data }}
                    </h4>
                </div>
            </div>
            <div class="content3" style="margin-top: 50px">
                <div class="container-fluid">
                    <h3>Total booking bulan ini </h3>
                    <h4><i class="fa fa-calendar" aria-hidden="true"></i>
                        {{ $jumlah_booking }}</h4>
                </div>
            </div>
            <div class="content4" style="margin-top: 50px">
                <div id="diagram">
                </div>
            </div>
    @endif
    </div>
@endsection

@section('script')
    <script src="/js/dasboard.js"></script>

    <script src="https://code.highcharts.com/highcharts.js"></script>

    <script>
        Highcharts.chart('diagram', {
            chart: {
                type: 'area'
            },
            title: {
                text: 'Diagram'
            },
            xAxis: {
                categories: [
                    'Monday',
                    'Tuesday',
                    'Wednesday',
                    'Thursday',
                    'Friday',
                    'Saturday',
                    'Sunday'
                ],
            },
            yAxis: {
                title: {
                    text: 'Booking'
                },
            },
            plotOptions: {
                area: {
                    fillColor: {
                        linearGradient: {
                            x1: 0,
                            y1: 0,
                            x2: 0,
                            y2: 1
                        },
                        stops: [
                            [0, Highcharts.getOptions().colors[0]],
                            [1, Highcharts.color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
                        ]
                    },
                    marker: {
                        enabled: false,
                        symbol: 'circle',
                        states: {
                            hover: {
                                enabled: true
                            }
                        }
                    }
                }
            },
            series: [{
                name: 'Booking',
                data: [
                    110, 140, 100, 123, 99, 110, 150
                ]
            }]
        });
    </script>
    <script>
        Highcharts.chart('diagram1', {
            chart: {
                type: 'area'
            },
            title: {
                text: 'Diagram'
            },
            xAxis: {
                categories: [
                    'January',
                    'February',
                    'March',
                    'April',
                    'May',
                    'June',
                    'July',
                    'August',
                    'September',
                    'October',
                    'November',
                    'December'
                ],
            },
            yAxis: {
                title: {
                    text: 'Booking'
                },
            },
            plotOptions: {
                area: {
                    fillColor: {
                        linearGradient: {
                            x1: 0,
                            y1: 0,
                            x2: 0,
                            y2: 1
                        },
                        stops: [
                            [0, Highcharts.getOptions().colors[0]],
                            [1, Highcharts.color(Highcharts.getOptions().colors[0]).setOpacity(0).
                                get('rgba')
                            ]
                        ]
                    },
                    marker: {
                        enabled: false,
                        symbol: 'circle',
                        states: {
                            hover: {
                                enabled: true
                            }
                        }
                    }
                }
            },
            series: [{
                name: 'Booking',
                data: [
                    110, 140, 100, 123, 99, 110, 150
                ]
            }]
        });
    </script>
@endsection
