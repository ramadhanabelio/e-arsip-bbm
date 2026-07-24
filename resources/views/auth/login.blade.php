@extends('layouts.auth')

@section('content')
    <div class="card my-5">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-end mb-4">
                <h3 class="mb-0"><b>Masuk</b></h3>
            </div>
            <div class="form-group mb-3">
                @if ($errors->has('login'))
                    <div class="alert alert-danger">{{ $errors->first('login') }}</div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form method="POST" action="{{ route('login.process') }}">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Username / Email</label>
                        <input type="text" name="login" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <div class="d-grid mt-4">
                        <button class="btn btn-warning w-100">Masuk</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection

