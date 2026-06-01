@extends('layouts.admin')

@section('title', 'Pengaturan Tema - SDN Kroyolor')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold text-dark">Pengaturan Tema Website</h4>
    <div class="text-muted small">Kelola tampilan visual situs Anda</div>
</div>

<div class="card border-0 shadow-sm rounded-4 overflow-hidden">
    <div class="card-header bg-white border-0 py-3">
        <h5 class="mb-0 fw-bold">Pilih Tema Warna</h5>
    </div>
    <div class="card-body p-4">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <form method="POST" action="{{ route('admin.theme.update') }}">
            @csrf
            <p class="text-muted mb-4">Pilih skema warna yang akan diterapkan pada seluruh elemen website (Navbar, Tombol, dll).</p>
            
            <div class="row g-4">
                @foreach ($themes as $theme)
                    <div class="col-md-3">
                        <div class="card h-100 border-2 {{ $active == $theme ? 'border-primary shadow' : 'border-light' }} theme-card" style="cursor: pointer;" onclick="document.getElementById('theme-{{ $theme }}').checked = true;">
                            <div class="card-body text-center p-4">
                                <div class="mb-3">
                                    @php
                                        $gradient = match($theme) {
                                            'default' => 'linear-gradient(135deg, #004d40, #00796b)',
                                            'green' => 'linear-gradient(135deg, #198754, #28a745)',
                                            'blue' => 'linear-gradient(135deg, #0d6efd, #007bff)',
                                            'red' => 'linear-gradient(135deg, #dc3545, #ff4757)',
                                            default => 'linear-gradient(135deg, #6c757d, #adb5bd)'
                                        };
                                    @endphp
                                    <div class="rounded-circle shadow-sm mx-auto mb-3" style="width: 80px; height: 80px; background: {{ $gradient }}; border: 4px solid #fff;"></div>
                                </div>
                                <div class="form-check d-flex justify-content-center align-items-center mb-0">
                                    <input class="form-check-input me-2" type="radio" name="theme" id="theme-{{ $theme }}" value="{{ $theme }}"
                                        {{ $active == $theme ? 'checked' : '' }}>
                                    <label class="form-check-label fw-bold" for="theme-{{ $theme }}">
                                        {{ ucfirst($theme) }}
                                    </label>
                                </div>
                                @if($active == $theme)
                                    <div class="mt-2 text-primary small fw-bold"><i class="bi bi-check2-circle"></i> Aktif</div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-5 pt-4 border-top text-end">
                <button type="submit" class="btn btn-primary px-5 py-2 fw-bold rounded-pill">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</div>

<style>
    .theme-card { transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); }
    .theme-card:hover { transform: translateY(-5px); border-color: var(--bs-primary); }
</style>
@endsection
