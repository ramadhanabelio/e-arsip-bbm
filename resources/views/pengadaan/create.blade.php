@extends('layouts.app')

@section('content')
    <div class="col-sm-8">
        <div class="card">
            <div class="card-body">

                <form action="{{ route('pengadaan.store') }}" method="POST">
                    @csrf

                    @include('pengadaan.form')

                    <div class="card-footer text-end">
                        <button class="btn btn-primary">
                            Simpan
                        </button>

                        <a href="{{ route('pengadaan.index') }}" class="btn btn-secondary">
                            Kembali
                        </a>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection
