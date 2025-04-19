@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')


<div class="main-content-table">
    <div class="section">
        <div class="margin-content">
            <div class="container-sm">
                <div class="section-header text-center">
                    <h1>Dashboard Kasir</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container d-flex justify-content-center align-items-center padding-0" style="height: 100 weight: 100;">
    <div>
        <h1 class="text-center">Dashboard Kasir</h1>
        <canvas id="myChart" width="600" height="400" class="padding-0"></canvas>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei'],
            datasets: [{
                label: 'Penjualan',
                data: [12, 19, 3, 5, 2],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',

                ],
                borderWidth: 1
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

@endsection
