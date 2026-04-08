@extends('layouts.app')

@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">

                <div class="d-flex justify-content-between mb-3">
                    <h4 class="fw-semibold">Data Transaksi BBM</h4>

                    <div>
                        <a href="{{ route('transaksi.create') }}" class="btn btn-primary">
                            + Masukkan Transaksi BBM
                        </a>
                        <a href="{{ route('transaksi.pdf', request()->all()) }}" class="btn btn-danger">
                            Export PDF
                        </a>
                    </div>
                </div>

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <h6 class="fw-bold mb-3">Filter Data</h6>

                        <form method="GET" action="{{ route('transaksi.index') }}">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Dari Tanggal</label>
                                    <input type="date" name="dari" class="form-control" value="{{ request('dari') }}">
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label">Sampai Tanggal</label>
                                    <input type="date" name="sampai" class="form-control"
                                        value="{{ request('sampai') }}">
                                </div>

                                <div class="col-md-6 d-flex align-items-end gap-2">
                                    <button class="btn btn-primary">Filter</button>

                                    <a href="{{ route('transaksi.index') }}" class="btn btn-secondary">
                                        Reset
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="table-responsive">
                    <table id="simpletable" class="table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th width="50" class="text-center">No</th>
                                <th>Tanggal</th>
                                <th>No Polisi</th>
                                <th>BBM</th>
                                <th class="text-end">Liter</th>
                                <th class="text-end">Harga</th>
                                <th class="text-end">Total</th>
                                <th width="160">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $grandTotal = 0; @endphp

                            @foreach ($data as $item)
                                @php $grandTotal += $item->total; @endphp
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}.</td>
                                    <td>{{ $item->tanggal }}</td>
                                    <td>{{ $item->kendaraan->no_polisi }}</td>
                                    <td>
                                        <span class="badge bg-success">
                                            {{ $item->jenis_bbm }}
                                        </span>
                                    </td>
                                    <td class="text-end">{{ $item->jumlah_liter }}</td>
                                    <td class="text-end">Rp. {{ number_format($item->harga_per_liter) }}</td>
                                    <td class="text-end fw-semibold">Rp. {{ number_format($item->total) }}</td>
                                    <td>
                                        <a href="{{ route('transaksi.show', $item->id) }}"
                                            class="btn btn-info btn-sm">Detail</a>

                                        <a href="{{ route('transaksi.edit', $item->id) }}"
                                            class="btn btn-warning btn-sm">Edit</a>

                                        <form action="{{ route('transaksi.destroy', $item->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf @method('DELETE')
                                            <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus data?')">
                                                Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                        @if ($data->count())
                            <tfoot>
                                <tr>
                                    <th colspan="6" class="text-end">Total Keseluruhan</th>
                                    <th class="text-end text-success">
                                        Rp. {{ number_format($grandTotal) }}
                                    </th>
                                    <th></th>
                                </tr>
                            </tfoot>
                        @endif
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
