@extends('layouts.app')

@section('content')
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('divisi.update', $divisi->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    @include('divisi.form')

                    <div class="card-footer text-end">
                        <button class="btn btn-primary">Simpan Perubahan</button>
                        <a href="{{ route('divisi.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
