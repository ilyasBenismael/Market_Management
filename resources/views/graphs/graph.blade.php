@extends('layouts.app')

@section('content')


    <h1>your graph :</h1>
    <div style="display: flex; align-items: flex-end; margin-bottom: 100px;">
        <div style="width: 50%;">
            <canvas id="lineChart"></canvas>
        </div>
        <div style="width: 50%; ">
            <canvas id="barChart"></canvas>
        </div>
    </div>

    <div style="display: flex; align-items: flex-end; margin-bottom: 100px;">
        <div style="width: 50%;">
            <canvas id="pieChart"></canvas>
        </div>
        <div style="width: 50%; ">
            <canvas id="radarChart"></canvas>
        </div>
    </div>

    <div style="display: flex; align-items: flex-end; margin-bottom: 100px;">
        <div style="width: 50%;">
            <canvas id="doughnutChart"></canvas>
        </div>
        <div style="width: 50%; ">
            <canvas id="polarAreaChart"></canvas>
        </div>
    </div>




    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Assuming you have the user array and post count data available
            var labels = {!! json_encode($labels) !!};
            var values = {!! json_encode($values) !!};


            // Create the chart
            var ctx = document.getElementById('pieChart').getContext('2d');
            var pieChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Labels',
                        data: values,
                        backgroundColor: ['rgb(114,16,16)',
                            'rgb(67,171,67)',
                            'rgb(189,133,133)',
                            'rgb(23,45,23)',
                            'rgb(39,75,189)'],
                        borderColor: 'rgb(0,0,0)',
                        borderWidth: 2
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


            var ctx = document.getElementById('barChart').getContext('2d');
            var barChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'your labels',
                        data: values,
                        backgroundColor: ['rgb(114,16,16)',
                            'rgb(67,171,67)',
                            'rgb(189,133,133)',
                            'rgb(23,45,23)',
                            'rgb(39,75,189)'],
                        borderColor: 'rgb(0,0,0)',
                        borderWidth: 2
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






            var ctx = document.getElementById('lineChart').getContext('2d');
            var barChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'your labels',
                        data: values,
                        backgroundColor: ['rgb(114,16,16)',
                            'rgb(67,171,67)',
                            'rgb(189,133,133)',
                            'rgb(23,45,23)',
                            'rgb(39,75,189)'],
                        borderColor: 'rgb(0,0,0)',
                        borderWidth: 2
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

            var ctx = document.getElementById('doughnutChart').getContext('2d');
            var barChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'your labels',
                        data: values,
                        backgroundColor: ['rgb(114,16,16)',
                            'rgb(67,171,67)',
                            'rgb(189,133,133)',
                            'rgb(23,45,23)',
                            'rgb(39,75,189)'],
                        borderColor: 'rgb(0,0,0)',
                        borderWidth: 2
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






            var ctx = document.getElementById('radarChart').getContext('2d');
            var barChart = new Chart(ctx, {
                type: 'radar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'your labels',
                        data: values,
                        backgroundColor: ['rgb(114,16,16)',
                            'rgb(67,171,67)',
                            'rgb(189,133,133)',
                            'rgb(23,45,23)',
                            'rgb(39,75,189)'],
                        borderColor: 'rgb(0,0,0)',
                        borderWidth: 2
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

            var ctx = document.getElementById('polarAreaChart').getContext('2d');
            var barChart = new Chart(ctx, {
                type: 'polarArea',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'your labels',
                        data: values,
                        backgroundColor: ['rgb(114,16,16)',
                            'rgb(67,171,67)',
                            'rgb(189,133,133)',
                            'rgb(23,45,23)',
                            'rgb(39,75,189)'],
                        borderColor: 'rgb(0,0,0)',
                        borderWidth: 2
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





        });
    </script>


@endsection
