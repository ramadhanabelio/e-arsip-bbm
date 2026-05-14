@extends('layouts.app')

@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="container text-end">
                    <a href="{{ route('pengadaan.create') }}" class="btn btn-primary mb-3">+ Register Pekerjaan Baru</a>
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
                                <th width="50" class="text-center">No.</th>
                                <th>Nama Pekerjaan</th>
                                <th>Penyedia</th>
                                <th>PIC</th>
                                <th>Nilai</th>
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
                                    <td class="text-center">
                                        {{ $loop->iteration }}.
                                    </td>

                                    <td>{{ $item->nama_pekerjaan }}</td>

                                    <td>{{ $item->nama_penyedia }}</td>

                                    <td>{{ $item->pic }}</td>

                                    <td>
                                        Rp. {{ number_format($item->nilai_pengadaan) }}
                                    </td>

                                    <td>
                                        <span class="badge bg-{{ $badge }}">
                                            {{ ucfirst($item->status) }}
                                        </span>
                                    </td>

                                    <td>
                                        <a href="{{ route('pengadaan.show', $item->id) }}" class="btn btn-info btn-sm">
                                            Detail
                                        </a>

                                        <a href="{{ route('pengadaan.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                            Edit
                                        </a>

                                        <form action="{{ route('pengadaan.destroy', $item->id) }}" method="POST"
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
