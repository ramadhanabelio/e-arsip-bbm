@extends('layouts.app')

@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="container text-end">
                    <a href="{{ route('kendaraan.create') }}" class="btn btn-primary mb-3">+ Tambah Kendaraan</a>
                </div>

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <table id="simpletable" class="table table-striped table-bordered nowrap">
                    <thead>
                        <tr>
                            <th width="50" class="text-center">No.</th>
                            <th>Nama Kendaraan</th>
                            <th>No Polisi</th>
                            <th>Tahun</th>
                            <th>Jenis</th>
                            <th>Divisi</th>
                            <th width="150">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}.</td>
                                <td>{{ $item->nama_kendaraan }}</td>
                                <td>{{ $item->no_polisi }}</td>
                                <td>{{ $item->tahun }}</td>
                                <td>{{ $item->jenis }}</td>
                                <td>
                                    @foreach ($item->divisi as $d)
                                        <span class="badge bg-info">{{ $d->nama_divisi }}</span>
                                    @endforeach
                                </td>
                                <td>
                                    <a href="{{ route('kendaraan.show', $item->id) }}"
                                        class="btn btn-info btn-sm">Detail</a>
                                    <a href="{{ route('kendaraan.edit', $item->id) }}"
                                        class="btn btn-warning btn-sm">Edit</a>

                                    <form action="{{ route('kendaraan.destroy', $item->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf @method('DELETE')
                                        <button class="btn btn-danger btn-sm"
                                            onclick="return confirm('Hapus data?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
