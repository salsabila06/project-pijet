@extends('Layout.Index')

@section('link')
    <link rel="stylesheet" href="{{ asset('css/dashboard-adm.css') }}">
@endsection

@section('container')
    <div class="dashboard">
        <div class="content1">
            <div class="container-fluid">
                <div class="d-flex align-items-center">
                    <div class="d-flex flex-column mb-0">
                        <p>Profit ratio</p>
                        <h3>Rp 4.250.000</h3>
                        <i class="fa fa-arrow-up" aria-hidden="true"> Meningkat dari minggu lalu</i>
                    </div>
                </div>
            </div>
        </div>
        <div class="content2">
            <div class="container-fluid">
                <h4>Pengguna aktif </h4>
                <h4><i class="fa fa-user" aria-hidden="true"></i>{{ $jumlah_data }} </h4>
            </div>
        </div>
        <div class="content3">
            <div class="container-fluid">
                <h4>Total booking bulan ini </h4>
                <h4><i class="fa fa-calendar" aria-hidden="true"></i>{{ $jumlah_booking }}</h4>
            </div>
        </div>
        <div class="content4">
            <div id="diagram">
            </div>
        </div>
    </div>
@endsection

@section('script')
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
@endsection
