<!DOCTYPE html>
<html lang="id">
<head>
    @section('title', 'Dashboard Admin - SDN Kroyolor')
</head>
<body>
    @extends('layouts.admin')
    @section('content')
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4>Dashboard Overview</h4>
            <div>Selamat datang, <strong>{{ Auth::user()->name }}</strong></div>
        </div>
        <div class="row g-4 text-white text-center">
            <div class="col-md-4">
                <div class="card card-stat bg-primary p-4 shadow-sm">
                    <i class="bi bi-newspaper fs-1 mb-2"></i>
                    <h3>{{ $countBerita }}</h3>
                    <p class="mb-0">Berita</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-stat bg-success p-4 shadow-sm">
                    <i class="bi bi-people fs-1 mb-2"></i>
                    <h3>{{ $countStaff }}</h3>
                    <p class="mb-0">Guru & Staff</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-stat bg-warning p-4 shadow-sm">
                    <i class="bi bi-person-badge fs-1 mb-2"></i>
                    <h3>{{ $countSiswa }}</h3>
                    <p class="mb-0">Peserta Didik</p>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <div class="card border-0 shadow-sm p-4">
                <h5>Aktivitas Terakhir</h5>
                <p class="text-muted small">Belum ada aktivitas terbaru.</p>
            </div>
        </div>
    @endsection
</body>
</html>
