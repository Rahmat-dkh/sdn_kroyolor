<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - SDN Kroyolor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body { background-color: #f8f9fa; }
        .sidebar { min-height: 100vh; background: #343a40; color: white; }
        .sidebar a { color: rgba(255,255,255,0.8); text-decoration: none; padding: 10px 20px; display: block; }
        .sidebar a:hover, .sidebar a.active { background: rgba(255,255,255,0.1); color: white; }
        .main-content { padding: 20px; }
        .card-stat { border: none; border-radius: 10px; transition: transform 0.2s; }
        .card-stat:hover { transform: translateY(-5px); }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav class="col-md-2 d-none d-md-block sidebar px-0">
            <div class="p-4">
                <h5 class="fw-bold">Admin Panel</h5>
                <hr>
            </div>
            <a href="/admin/dashboard" class="{{ Request::is('admin/dashboard') ? 'active' : '' }}"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a>
            <a href="{{ route('berita.index') }}" class="{{ Request::is('admin/berita*') ? 'active' : '' }}"><i class="bi bi-newspaper me-2"></i> Berita</a>
            <a href="{{ route('staff.index') }}" class="{{ Request::is('admin/staff*') ? 'active' : '' }}"><i class="bi bi-people me-2"></i> Guru & Staff</a>
            <a href="{{ route('peserta-didik.index') }}" class="{{ Request::is('admin/peserta-didik*') ? 'active' : '' }}"><i class="bi bi-person-badge me-2"></i> Peserta Didik</a>
            <a href="{{ route('galeri.index') }}" class="{{ Request::is('admin/galeri*') ? 'active' : '' }}"><i class="bi bi-images me-2"></i> Galeri</a>
            <a href="{{ route('admin.kontak.index') }}" class="{{ Request::is('admin/kontak*') ? 'active' : '' }}"><i class="bi bi-envelope me-2"></i> Pesan Kontak</a>
            
            <div class="mt-5 p-3">
                <form action="/admin/logout" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-outline-light btn-sm w-100">Logout</button>
                </form>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="col-md-10 main-content">
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
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
