@extends('admin.layout.index')
@section('main')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Tổng quan</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"></li>
                    <li class="breadcrumb-item active">Tổng quan</li>
                </ol>
            </nav>

            @if (session('success'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    {{session('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>

        <section class="section dashboard">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Doanh số bán hàng</h5>
                                    <div class="form-group d-flex align-items-center justify-content-between">
                                        <form class="d-flex align-items-center w-50" method="get" id="dashboard"
                                              action="{{route('admin.dashboard')}}">
                                            <input type="month" id="monthPicker" name="date" class="form-control w-50"
                                                   value="{{request()->get('date')}}"
                                                   max="<?= date('Y-m') ?>" onchange="submitForm()">
                                        </form>
                                        <div>Tổng doanh thu của tháng là: {{number_format($totalMonthlySales)}} đ</div>
                                    </div>
                                    <div id="areaChart"></div>
                                    <script>
                                        document.addEventListener("DOMContentLoaded", () => {
                                            updateChart();
                                        });

                                        function updateChart() {
                                            let monthYear = document.querySelector("#monthPicker").value;
                                            if (monthYear === "") {
                                                const currentDate = new Date();
                                                const currentMonth = currentDate.getMonth() + 1;
                                                const currentYear = currentDate.getFullYear();
                                                monthYear = currentYear + '-' + (currentMonth < 10 ? '0' : '') + currentMonth;
                                            }
                                            const firstDayOfMonth = new Date(monthYear + '-01');
                                            const lastDayOfMonth = new Date(firstDayOfMonth.getFullYear(), firstDayOfMonth.getMonth() + 1, 1);
                                            const dateRange = [];

                                            let currentDate = new Date(firstDayOfMonth);
                                            while (currentDate <= lastDayOfMonth) {
                                                dateRange.push(currentDate.toISOString().split('T')[0]);
                                                currentDate.setDate(currentDate.getDate() + 1);
                                            }
                                            const sampleData = {!! json_encode($dailySalesData) !!};
                                            const chartData = dateRange.map(date => {
                                                const sales = sampleData[date] || 0;
                                                return {
                                                    x: date,
                                                    y: sales
                                                };
                                            });

                                            const chart = new ApexCharts(document.querySelector("#areaChart"), {
                                                series: [{
                                                    name: "Doanh số",
                                                    data: chartData
                                                }],
                                                chart: {
                                                    type: 'area',
                                                    height: 350,
                                                    zoom: {
                                                        enabled: false
                                                    }
                                                },
                                                dataLabels: {
                                                    enabled: false
                                                },
                                                stroke: {
                                                    curve: 'smooth'
                                                },
                                                xaxis: {
                                                    type: 'date',
                                                    labels: {
                                                        datetimeUTC: false
                                                    }
                                                },
                                                yaxis: {
                                                    opposite: false,
                                                    labels: {
                                                        formatter: function (value) {
                                                            return value.toLocaleString('vi-VN', {
                                                                style: 'currency',
                                                                currency: 'VND'
                                                            });
                                                        }
                                                    }
                                                },
                                                legend: {
                                                    horizontalAlign: 'left'
                                                },
                                                tooltip: {
                                                    x: {
                                                        format: 'yyyy-MM-dd',
                                                    },
                                                    y: {
                                                        formatter: function (val) {
                                                            return val.toLocaleString('vi-VN', {
                                                                style: 'currency',
                                                                currency: 'VND'
                                                            });
                                                        }
                                                    }
                                                }
                                            });

                                            chart.render();
                                        }

                                        function submitForm() {
                                            document.getElementById("dashboard").submit();
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
