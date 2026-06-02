@extends('layouts.app')

@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">

                <h4 class="mb-3 fw-semibold">
                    Detail Lisensi
                </h4>

                <div class="card border-0 shadow-sm">
                    <div class="card-body">

                        <div class="row mb-2">
                            <div class="col-md-4 fw-semibold">Jenis</div>
                            <div class="col-md-8">: {{ ucfirst($lisensi->jenis) }}</div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-4 fw-semibold">Brand / Nama Lisensi</div>
                            <div class="col-md-8">: {{ $lisensi->brand_nama_lisensi }}</div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-4 fw-semibold">Serial Number</div>
                            <div class="col-md-8">: {{ $lisensi->contract_serial_number }}</div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-4 fw-semibold">Start Date</div>
                            <div class="col-md-8">
                                :
                                {{ $lisensi->start_date ? \Carbon\Carbon::parse($lisensi->start_date)->format('d-m-Y') : '-' }}
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-4 fw-semibold">End Date</div>
                            <div class="col-md-8">
                                :
                                {{ $lisensi->end_date ? \Carbon\Carbon::parse($lisensi->end_date)->format('d-m-Y') : '-' }}
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-4 fw-semibold">Maintenance</div>
                            <div class="col-md-8">
                                : {{ $lisensi->kebutuhan_maintenance }}
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-4 fw-semibold">PIC</div>
                            <div class="col-md-8">: {{ $lisensi->pic }}</div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-4 fw-semibold">Vendor</div>
                            <div class="col-md-8">: {{ $lisensi->vendor }}</div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-4 fw-semibold">Status</div>
                            <div class="col-md-8">: {{ ucfirst($lisensi->status) }}</div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 fw-semibold">Keterangan</div>
                            <div class="col-md-8">
                                : {{ $lisensi->keterangan ?? '-' }}
                            </div>
                        </div>

                    </div>
                </div>

                <div class="text-end mt-3">
                    <a href="{{ route('lisensi.index') }}" class="btn btn-secondary">
                        Kembali
                    </a>
                </div>

            </div>
        </div>
    </div>
@endsection
