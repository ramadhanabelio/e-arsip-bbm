@extends('layouts.auth')

@section('content')
    <div class="card border-0 shadow-lg rounded-4 my-5" style="max-width: 450px; margin: 0 auto;">
        <div class="card-body p-5">
            <div class="text-center mb-4">
                <img src="{{ asset('images/logo.png') }}" alt="Logo Bank" width="80" class="mb-3">
                <h3 class="fw-bold mb-1">Selamat Datang</h3>
                <p class="text-muted">Silakan masuk ke akun E-Arsip BBM</p>
            </div>

            @if ($errors->has('login'))
                <div class="alert alert-danger alert-dismissible fade show rounded-3" role="alert">
                    <i class="fas fa-exclamation-circle me-2"></i> {{ $errors->first('login') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show rounded-3" role="alert">
                    <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form method="POST" action="{{ route('login.process') }}">
                @csrf

                <div class="mb-4">
                    <label class="form-label fw-semibold">Username / Email</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light border-end-0">
                            <i class="fas fa-user text-muted"></i>
                        </span>
                        <input type="text" name="login" class="form-control bg-light border-start-0 ps-0"
                            placeholder="Masukkan username atau email" required>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-semibold">Password</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light border-end-0">
                            <i class="fas fa-lock text-muted"></i>
                        </span>
                        <input type="password" name="password" class="form-control bg-light border-start-0 ps-0"
                            placeholder="Masukkan password" required>
                    </div>
                </div>

                <div class="d-grid mt-5">
                    <button type="submit" class="btn btn-warning btn-lg fw-bold rounded-pill text-dark shadow-sm">
                        Masuk Sekarang <i class="fas fa-sign-in-alt ms-1"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

