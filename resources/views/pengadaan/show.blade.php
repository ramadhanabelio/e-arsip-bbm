@extends('layouts.app')

@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">

                <h4 class="mb-3 fw-semibold">
                    Detail Pengadaan
                </h4>

                <div class="card border-0 shadow-sm">
                    <div class="card-body">

                        <div class="row mb-2">
                            <div class="col-md-4 fw-semibold">Nama Pekerjaan</div>
                            <div class="col-md-8">: {{ $pengadaan->nama_pekerjaan }}</div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-4 fw-semibold">Penyedia</div>
                            <div class="col-md-8">: {{ $pengadaan->nama_penyedia }}</div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-4 fw-semibold">PIC</div>
                            <div class="col-md-8">: {{ $pengadaan->pic }}</div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-4 fw-semibold">Nilai Pengadaan</div>
                            <div class="col-md-8">
                                : Rp. {{ number_format($pengadaan->nilai_pengadaan) }}
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-4 fw-semibold">Biaya Anggaran</div>
                            <div class="col-md-8">
                                : {{ $pengadaan->biaya_anggaran ?? '-' }}
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-4 fw-semibold">Jangka Waktu</div>
                            <div class="col-md-8">
                                : {{ $pengadaan->jangka_waktu_pekerjaan }}
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-4 fw-semibold">Status</div>
                            <div class="col-md-8">
                                : {{ ucfirst($pengadaan->status) }}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 fw-semibold">Keterangan</div>
                            <div class="col-md-8">
                                : {{ $pengadaan->keterangan ?? '-' }}
                            </div>
                        </div>

                    </div>
                </div>

                <div class="text-end mt-3">
                    <a href="{{ route('pengadaan.index') }}" class="btn btn-secondary">
                        Kembali
                    </a>
                </div>

            </div>
        </div>
    </div>
@endsection
