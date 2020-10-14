@extends('layouts.layout')

@section('title', '感情詳細情報')

@section('content')

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script src="./js/utils.js"></script>
<div style="width:75%;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
    <canvas id="canvas" style="display: block; width: 70%; height: 30%;" class="chartjs-render-monitor"></canvas>
</div>
<br>
<script>
    var config = {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'Aug'],
            datasets: [{
                label: 'My First dataset',
                backgroundColor: window.chartColors.red,
                borderColor: window.chartColors.red,
                data: [10,100,10,100,10,100,100],
                fill: false,
            }, {
                label: 'My Second dataset',
                fill: false,
                backgroundColor: window.chartColors.blue,
                borderColor: window.chartColors.blue,
                data: [100,10,100,10,100,10,50],
            }]
        },
        options: {
            responsive: true,
            title: {
                display: true,
                text: 'Chart.js Line Chart'
            },
            tooltips: {
                mode: 'index',
                intersect: false,
            },
            hover: {
                mode: 'nearest',
                intersect: true
            },
            scales: {
                xAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Month'
                    }
                }],
                yAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Value'
                    }
                }]
            }
        }
    };

    window.onload = function() {
        var ctx = document.getElementById('canvas').getContext('2d');
        window.myLine = new Chart(ctx, config);
    };

</script>

@endsection
