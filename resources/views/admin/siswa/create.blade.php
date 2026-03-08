<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa - Admin SDN Kroyolor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body { background-color: #f8f9fa; }
        .sidebar { min-height: 100vh; background: #343a40; color: white; }
        .sidebar a { color: rgba(255,255,255,0.8); text-decoration: none; padding: 10px 20px; display: block; }
        .sidebar a:hover, .sidebar a.active { background: rgba(255,255,255,0.1); color: white; }
        .main-content { padding: 20px; }
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
            <a href="/admin/dashboard"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a>
            <a href="{{ route('berita.index') }}"><i class="bi bi-newspaper me-2"></i> Berita</a>
            <a href="{{ route('staff.index') }}"><i class="bi bi-people me-2"></i> Guru & Staff</a>
            <a href="{{ route('peserta-didik.index') }}" class="active"><i class="bi bi-person-badge me-2"></i> Peserta Didik</a>
        </nav>

        <!-- Main Content -->
        <main class="col-md-10 main-content">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4>Tambah Peserta Didik Baru</h4>
                <a href="{{ route('peserta-didik.index') }}" class="btn btn-outline-secondary btn-sm">Batal</a>
            </div>

            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <form action="{{ route('peserta-didik.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama lengkap siswa" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kelas</label>
                            <select name="kelas" class="form-select" required>
                                <option value="I">I (Satu)</option>
                                <option value="II">II (Dua)</option>
                                <option value="III">III (Tiga)</option>
                                <option value="IV">IV (Empat)</option>
                                <option value="V">V (Lima)</option>
                                <option value="VI">VI (Enam)</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Foto</label>
                            <input type="file" name="foto" class="form-control" accept="image/*">
                        </div>
                        <button type="submit" class="btn btn-primary px-5">Simpan Data</button>
                    </form>
                </div>
            </div>
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
