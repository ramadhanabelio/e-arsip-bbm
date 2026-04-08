@extends('layouts.app')

@section('content')
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('transaksi.update', $transaksi->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    @include('transaksi.form')

                    <div class="card-footer text-end">
                        <button class="btn btn-primary">Simpan Perubahan</button>
                        <a href="{{ route('transaksi.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
