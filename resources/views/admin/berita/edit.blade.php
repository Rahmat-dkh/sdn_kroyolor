<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Berita - Admin SDN Kroyolor</title>
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
            <a href="{{ route('berita.index') }}" class="active"><i class="bi bi-newspaper me-2"></i> Berita</a>
            <a href="#"><i class="bi bi-people me-2"></i> Guru & Staff</a>
            <a href="#"><i class="bi bi-person-badge me-2"></i> Peserta Didik</a>
            <a href="#"><i class="bi bi-images me-2"></i> Galeri</a>
        </nav>

        <!-- Main Content -->
        <main class="col-md-10 main-content">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4>Edit Berita</h4>
                <a href="{{ route('berita.index') }}" class="btn btn-outline-secondary btn-sm">Batal</a>
            </div>

            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Judul Berita</label>
                            <input type="text" name="judul" class="form-control" value="{{ $berita->judul }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal</label>
                            <input type="date" name="tanggal" class="form-control" value="{{ $berita->tanggal }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Gambar Utama</label>
                            @if($berita->gambar)
                                <div class="mb-2">
                                    <img src="{{ asset('storage/'.$berita->gambar) }}" class="img-thumbnail" style="height: 100px;">
                                </div>
                            @endif
                            <input type="file" name="gambar" class="form-control" accept="image/*">
                            <div class="form-text small">Kosongkan jika tidak ingin mengubah gambar. Max: 2MB.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Isi Berita</label>
                            <textarea name="isi" class="form-control" rows="10" required>{{ $berita->isi }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary px-5">Update Berita</button>
                    </form>
                </div>
            </div>
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
