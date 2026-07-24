@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h6>Total Pengadaan</h6>
                    <h2>{{ $totalPengadaan }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h6>Total Lisensi</h6>
                    <h2>{{ $totalLisensi }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h6>Pengadaan Done</h6>
                    <h2>{{ $pengadaanDone }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h6>Lisensi Active</h6>
                    <h2>{{ $lisensiActive }}</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h6>Pengadaan</h6>
                    <canvas id="pengadaanChart"></canvas>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h6>Lisensi</h6>
                    <canvas id="lisensiChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        new Chart(document.getElementById('pengadaanChart'), {
            type: 'pie',
            data: {
                labels: ['Done', 'Renewal', 'Expired'],
                datasets: [{
                    data: [
                        {{ $pengadaanDone }},
                        {{ $pengadaanRenewal }},
                        {{ $pengadaanExpired }}
                    ]
                }]
            }
        });

        new Chart(document.getElementById('lisensiChart'), {
            type: 'pie',
            data: {
                labels: ['Active', 'Renewal', 'Expired'],
                datasets: [{
                    data: [
                        {{ $lisensiActive }},
                        {{ $lisensiRenewal }},
                        {{ $lisensiExpired }}
                    ]
                }]
            }
        });
    </script>
@endsection
