@extends('layouts.app')

@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">

                <h4 class="mb-3 fw-semibold">Detail Transaksi BBM</h4>

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <h5 class="fw-bold mb-3">Informasi Transaksi</h5>

                        <div class="row mb-2">
                            <div class="col-md-4 fw-semibold">Tanggal</div>
                            <div class="col-md-8">: {{ $transaksi->tanggal }}</div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-4 fw-semibold">Kendaraan</div>
                            <div class="col-md-8">: {{ $transaksi->kendaraan->no_polisi }}</div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-4 fw-semibold">Jenis BBM</div>
                            <div class="col-md-8">
                                :
                                <span class="badge bg-success">
                                    {{ $transaksi->jenis_bbm }}
                                </span>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-4 fw-semibold">Jumlah Liter</div>
                            <div class="col-md-8">: {{ $transaksi->jumlah_liter }} Liter</div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-4 fw-semibold">Harga / Liter</div>
                            <div class="col-md-8">: Rp {{ number_format($transaksi->harga_per_liter) }}</div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 fw-semibold">Total</div>
                            <div class="col-md-8 fw-bold text-success">
                                : Rp {{ number_format($transaksi->total) }}
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <h5 class="fw-bold mb-3">Data Nota</h5>

                        <div class="row mb-2">
                            <div class="col-md-4 fw-semibold">No Nota</div>
                            <div class="col-md-8">: {{ $transaksi->no_nota ?? '-' }}</div>
                        </div>

                        @if ($transaksi->foto_nota)
                            <div class="mt-3">
                                <p class="fw-semibold">Foto Nota:</p>
                                <img src="{{ asset('storage/' . $transaksi->foto_nota) }}"
                                    class="img-fluid rounded shadow-sm" style="max-width: 350px;">
                            </div>
                        @else
                            <p class="text-muted">Tidak ada foto nota</p>
                        @endif
                    </div>
                </div> --}}

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <h5 class="fw-bold mb-3">Keterangan</h5>

                        <p class="text-muted">
                            {{ $transaksi->keterangan ?? 'Tidak ada keterangan' }}
                        </p>
                    </div>
                </div>

                <div class="text-end">
                    <a href="{{ route('transaksi.index') }}" class="btn btn-secondary px-4">
                        Kembali
                    </a>
                </div>

            </div>
        </div>
    </div>
@endsection
