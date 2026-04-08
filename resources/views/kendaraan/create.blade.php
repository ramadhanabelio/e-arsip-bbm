@extends('layouts.app')

@section('content')
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('kendaraan.store') }}" method="POST">
                    @csrf

                    @include('kendaraan.form')

                    <div class="card-footer text-end">
                        <button class="btn btn-primary">Simpan</button>
                        <a href="{{ route('kendaraan.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
