@extends('Layout.Index')

@section('link')
    <link rel="stylesheet" href="{{ asset('css/dashboard-adm.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.1/Chart.bundle.js"></script>
@endsection

@section('container')

    <div class="dashboard" >
        <div class="content1">
            <div class="chartBox">
                <canvas id="myChart" ></canvas></div>
            <script>
                const ctx = document.getElementById('myChart').getContext('2d');
                const myChart = new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: ['green', 'green'],
                        datasets: [{
                            label: '# of Votes',
                            data: [13, 18],
                            backgroundColor: [
                                '#92FF80',

                                '#348727'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 0)',

                                'rgba(255, 159, 64, 0)'
                            ],
                            borderWidth: 4
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            </script>
            <div class="container-fluid" style=" ">
                <div class="d-flex align-items-center">
                    <div class="d-flex flex-column mb-0">
                        <p>Profit ratio</p>
                        <h3>Rp 4.250.000</h3>
                        <i class="fa fa-arrow-up" aria-hidden="true"> Meningkat dari minggu lalu</i>
                    </div>
                </div>
            </div>
        </div>
        <div class="content1" style="margin-top: 50px">

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

