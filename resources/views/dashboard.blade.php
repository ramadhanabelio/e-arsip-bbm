@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-2 f-w-400 text-muted">Total Transaksi</h6>
                    <h4 class="mb-3">{{ $totalTransaksi }}</h4>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-2 f-w-400 text-muted">Total Pengeluaran</h6>
                    <h4 class="mb-3">Rp. {{ number_format($totalPengeluaran) }}</h4>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-2 f-w-400 text-muted">Total Liter</h6>
                    <h4 class="mb-3">{{ $totalLiter }} L</h4>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-2 f-w-400 text-muted">Total Kendaraan</h6>
                    <h4 class="mb-3">{{ $totalKendaraan }}</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-md-6 mb-3">
            <div class="card">
                <div class="card-body">
                    <h6>Pengeluaran per Bulan</h6>
                    <canvas id="chartBulanan"></canvas>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-3">
            <div class="card">
                <div class="card-body">
                    <h6>Liter BBM per Bulan</h6>
                    <canvas id="chartLiter"></canvas>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-3">
            <div class="card">
                <div class="card-body">
                    <h6>Pengeluaran per Kendaraan</h6>
                    <canvas id="chartKendaraan"></canvas>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-3">
            <div class="card">
                <div class="card-body">
                    <h6>Pengeluaran per Divisi</h6>
                    <canvas id="chartDivisi"></canvas>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        // Bulanan
        new Chart(document.getElementById('chartBulanan'), {
            type: 'bar',
            data: {
                labels: @json($bulanLabels),
                datasets: [{
                    label: 'Rp',
                    data: @json($bulanTotal)
                }]
            }
        });

        // Liter
        new Chart(document.getElementById('chartLiter'), {
            type: 'line',
            data: {
                labels: @json($literLabels),
                datasets: [{
                    label: 'Liter',
                    data: @json($literTotal)
                }]
            }
        });

        // Kendaraan
        new Chart(document.getElementById('chartKendaraan'), {
            type: 'pie',
            data: {
                labels: @json($kendaraanLabel),
                datasets: [{
                    data: @json($kendaraanTotal)
                }]
            }
        });

        // Divisi
        new Chart(document.getElementById('chartDivisi'), {
            type: 'doughnut',
            data: {
                labels: @json($divisiLabel),
                datasets: [{
                    data: @json($divisiTotal)
                }]
            }
        });
    </script>
@endsection
