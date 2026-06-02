@extends('layouts.app')

@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">

                <div class="d-flex justify-content-between mb-3">
                    <h4 class="fw-semibold">Lisensi</h4>

                    <div>
                        <a href="{{ route('lisensi.create') }}" class="btn btn-primary">
                            + Tambah Lisensi
                        </a>

                        <a href="{{ route('lisensi.pdf') }}" class="btn btn-danger">
                            Export PDF
                        </a>

                        <a href="{{ route('lisensi.excel') }}" class="btn btn-success">
                            Export Excel
                        </a>
                    </div>
                </div>

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="table-responsive">
                    <table id="simpletable" class="table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th width="50">No.</th>
                                <th>Jenis</th>
                                <th>Brand / Nama Lisensi</th>
                                <th>Serial Number</th>
                                <th>End Date</th>
                                <th>PIC</th>
                                <th>Vendor</th>
                                <th>Status</th>
                                <th width="180">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($data as $item)
                                @php
                                    $badge = match ($item->status) {
                                        'done' => 'success',
                                        'renewal' => 'warning',
                                        'expired' => 'danger',
                                        default => 'secondary',
                                    };
                                @endphp

                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->jenis }}</td>
                                    <td>{{ $item->brand_nama_lisensi }}</td>
                                    <td>{{ $item->contract_serial_number }}</td>
                                    <td>
                                        {{ $item->end_date ? \Carbon\Carbon::parse($item->end_date)->format('d-m-Y') : '-' }}
                                    </td>
                                    <td>{{ $item->pic }}</td>
                                    <td>{{ $item->vendor }}</td>

                                    <td>
                                        <span class="badge bg-{{ $badge }}">
                                            {{ ucfirst($item->status) }}
                                        </span>
                                    </td>

                                    <td>
                                        <a href="{{ route('lisensi.show', $item->id) }}" class="btn btn-info btn-sm">
                                            Detail
                                        </a>

                                        <a href="{{ route('lisensi.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                            Edit
                                        </a>

                                        <form action="{{ route('lisensi.destroy', $item->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')

                                            <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus data?')">
                                                Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
