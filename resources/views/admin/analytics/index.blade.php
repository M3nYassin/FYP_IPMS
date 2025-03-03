@extends('layout.admin-layout')

@section('custom-css')
    <style>
        /* Additional CSS for print */
        @media print {
            .hide-on-print {
                display: none;
            }

            .card {
                page-break-inside: avoid;
            }
        }
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>
@endsection

@section('work-space')
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Form Analytics</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="row">

                    <!-- First Donut Chart -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="card-title">IP Submissions</h5>
                                <select id="month-select-1">
                                    @foreach (['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'] as $month)
                                        <option value="{{ $month }}">{{ $month }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="card-body">
                                <div id="donut-chart-1"></div>
                                <div id="no-data-message-1" style="display: none; text-align: center; color: red;">No data available for the selected month</div>
                            </div>
                        </div>
                    </div>

                    <!-- Second Donut Chart -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="card-title">IdeaKamek Posts</h5>
                                <select id="month-select-2">
                                    @foreach (['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'] as $month)
                                        <option value="{{ $month }}">{{ $month }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="card-body">
                                <div id="donut-chart-2"></div>
                                <div id="no-data-message-2" style="display: none; text-align: center; color: red;">No data available for the selected month</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div><!-- Print Button -->
        <button class="btn btn-primary hide-on-print" onclick="window.print()">Save/Print</button>
        <button class="btn btn-primary hide-on-print" onclick="downloadAnalyticsExcel()">Download Excel</button>

    </div>
@endsection

@section('custom-js')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <script>
        const donutChartData1 = {
            series: [0, 0, 0], // Initialize for the first chart
            labels: ['Approved', 'Pending', 'Denied'],
        };

        const donutChartData2 = {
            series: [0, 0], // Initialize for the second chart
            labels: ['Active', 'Inactive'],
        };

        // Options for the first donut chart
        const options1 = {
            chart: {
                type: 'donut',
            },
            labels: donutChartData1.labels,
            series: donutChartData1.series,
            plotOptions: {
                pie: {
                    donut: {
                        size: '60%',
                    }
                }
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 200,
                    },
                    legend: {
                        position: 'bottom',
                    }
                }
            }]
        };

        // Initialize the first donut chart
        const chart1 = new ApexCharts(document.querySelector("#donut-chart-1"), options1);
        chart1.render();

        // Options for the second donut chart
        const options2 = {
            chart: {
                type: 'donut',
            },
            labels: donutChartData2.labels,
            series: donutChartData2.series,
            plotOptions: {
                pie: {
                    donut: {
                        size: '60%',
                    }
                }
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 200,
                    },
                    legend: {
                        position: 'bottom',
                    }
                }
            }]
        };

        // Initialize the second donut chart
        const chart2 = new ApexCharts(document.querySelector("#donut-chart-2"), options2);
        chart2.render();

        // Function to fetch data for the first donut chart
        function fetchChartData(month) {
            axios.post('{{ route('analytics.data') }}', { month: month })
                .then(response => {
                    const data = response.data;
                    const approvedCount = parseInt(data.approvedCount);
                    const pendingCount = parseInt(data.pendingCount);
                    const deniedCount = parseInt(data.deniedCount);

                    if (approvedCount === 0 && pendingCount === 0 && deniedCount === 0) {
                        document.getElementById('no-data-message-1').innerText = "No data available for the selected month";
                        document.getElementById('no-data-message-1').style.display = 'block';
                        chart1.updateSeries([0, 0, 0]);
                    } else {
                        document.getElementById('no-data-message-1').style.display = 'none';
                        donutChartData1.series = [approvedCount, pendingCount, deniedCount];
                        chart1.updateSeries(donutChartData1.series);
                    }
                })
                .catch(error => {
                    console.error("Error fetching chart data:", error);
                    document.getElementById('no-data-message-1').innerText = "Error fetching data";
                    document.getElementById('no-data-message-1').style.display = 'block';
                });
        }

        // Function to fetch data for the second donut chart
        function fetchChartDataPost(month) {
            axios.post('{{ route('analytics.data.post') }}', { month: month })
                .then(response => {
                    const data = response.data;
                    const activeCount = parseInt(data.active);
                    const inactiveCount = parseInt(data.inactive);

                    if (activeCount === 0 && inactiveCount === 0) {
                        document.getElementById('no-data-message-2').innerText = "No data available for the selected month";
                        document.getElementById('no-data-message-2').style.display = 'block';
                        chart2.updateSeries([0, 0]);
                    } else {
                        document.getElementById('no-data-message-2').style.display = 'none';
                        donutChartData2.series = [activeCount, inactiveCount];
                        chart2.updateSeries(donutChartData2.series);
                    }
                })
                .catch(error => {
                    console.error("Error fetching chart data for posts:", error);
                    document.getElementById('no-data-message-2').innerText = "Error fetching data";
                    document.getElementById('no-data-message-2').style.display = 'block';
                });
        }

        // Event listener for month selection change on the first chart
        document.getElementById('month-select-1').addEventListener('change', function () {
            const selectedMonth = this.value;
            fetchChartData(selectedMonth);
        });

        // Event listener for month selection change on the second chart
        document.getElementById('month-select-2').addEventListener('change', function () {
            const selectedMonth = this.value;
            fetchChartDataPost(selectedMonth);
        });

        // Function to download analytics data as Excel for the selected month
        function downloadAnalyticsExcel() {
            const selectedMonth = document.getElementById('month-select-1').value;

            // Fetch the data for the selected month
            axios.post('{{ route('analytics.data') }}', { month: selectedMonth })
                .then(response => {
                    const data = response.data;
                    const approvedCount = parseInt(data.approvedCount);
                    const pendingCount = parseInt(data.pendingCount);
                    const deniedCount = parseInt(data.deniedCount);

                    // Check if there is data available
                    if (approvedCount === 0 && pendingCount === 0 && deniedCount === 0) {
                        alert("No data available for the selected month.");
                        return; // Exit if no data
                    }

                    // Create a CSV string for Excel download
                    let csvContent = "data:text/csv;charset=utf-8,";
                    csvContent += "Month,Approved,Pending,Denied\n";
                    csvContent += `${selectedMonth},${approvedCount},${pendingCount},${deniedCount}\n`;

                    // Create a downloadable link
                    const encodedUri = encodeURI(csvContent);
                    const link = document.createElement("a");
                    link.setAttribute("href", encodedUri);
                    link.setAttribute("download", `analytics_data_${selectedMonth}.csv`); // Use selected month in file name
                    document.body.appendChild(link); // Required for Firefox

                    link.click(); // This will download the data file
                    document.body.removeChild(link); // Clean up
                })
                .catch(error => {
                    console.error("Error fetching data for Excel download:", error);
                    alert("Failed to fetch data for download. Please try again.");
                });
        }

        // Fetch initial data for the current month on page load
        fetchChartData(new Date().toLocaleString('default', { month: 'long' }));
        fetchChartDataPost(new Date().toLocaleString('default', { month: 'long' }));
    </script>
@endsection
