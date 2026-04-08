@extends('layouts.app')

@section('content')

    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">

                <h4 class="mb-3 fw-semibold">Detail Kendaraan</h4>

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">

                        <h5 class="fw-bold mb-3">Informasi Kendaraan</h5>

                        <div class="row mb-2">
                            <div class="col-md-4 fw-semibold">Nama Kendaraan</div>
                            <div class="col-md-8">: {{ $kendaraan->nama_kendaraan }}</div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-4 fw-semibold">No Polisi</div>
                            <div class="col-md-8">: {{ $kendaraan->no_polisi }}</div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-4 fw-semibold">Tahun</div>
                            <div class="col-md-8">: {{ $kendaraan->tahun ?? '-' }}</div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 fw-semibold">Jenis</div>
                            <div class="col-md-8">: {{ $kendaraan->jenis ?? '-' }}</div>
                        </div>

                    </div>
                </div>

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">

                        <h5 class="fw-bold mb-3">Divisi Terkait</h5>

                        @if ($kendaraan->divisi->count())
                            @foreach ($kendaraan->divisi as $d)
                                <span class="badge bg-info me-1 mb-1">
                                    {{ $d->nama_divisi }}
                                </span>
                            @endforeach
                        @else
                            <p class="text-muted">Tidak ada divisi</p>
                        @endif

                    </div>
                </div>

                <div class="text-end">
                    <a href="{{ route('kendaraan.index') }}" class="btn btn-secondary px-4">
                        Kembali
                    </a>
                </div>

            </div>
        </div>
    </div>

@endsection
