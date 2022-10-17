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
</style>
@section('container')
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
                <h4>Total booking bulan ini </h4>
                <h4><i class="fa fa-calendar" aria-hidden="true"></i>{{ $jumlah_booking }}</h4>
            </div>
        </div>
        <div class="content4" style="margin-top: 50px">
            <div id="diagram">
            </div>
        </div>
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
@endsection
