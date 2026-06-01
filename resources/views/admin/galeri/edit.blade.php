<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Item Galeri - Admin SDN Kroyolor</title>
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
        @include('admin.partials.sidebar')

        <!-- Main Content -->
        <main class="col-md-10 main-content">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4>Edit Item Galeri</h4>
                <a href="{{ route('galeri.index') }}" class="btn btn-outline-secondary btn-sm">Batal</a>
            </div>

            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <form action="{{ route('galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Judul Item</label>
                            <input type="text" name="judul" class="form-control" value="{{ $galeri->judul }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jenis Konten</label>
                            <select name="jenis" id="jenis" class="form-select" required onchange="toggleInput()">
                                <option value="foto" {{ $galeri->jenis == 'foto' ? 'selected' : '' }}>Foto</option>
                                <option value="video" {{ $galeri->jenis == 'video' ? 'selected' : '' }}>Video (YouTube URL)</option>
                            </select>
                        </div>
                        
                        <div class="mb-3 {{ $galeri->jenis == 'video' ? 'd-none' : '' }}" id="input-foto">
                            <label class="form-label">File Foto</label>
                            @if($galeri->jenis == 'foto' && $galeri->file)
                                <div class="mb-2">
                                    <img src="{{ asset('storage/'.$galeri->file) }}" class="rounded shadow-sm" style="height: 100px;">
                                </div>
                            @endif
                            <input type="file" name="file" class="form-control" accept="image/*">
                            <div class="form-text small">Kosongkan jika tidak ingin mengubah foto.</div>
                        </div>

                        <div class="mb-3 {{ $galeri->jenis == 'foto' ? 'd-none' : '' }}" id="input-video">
                            <label class="form-label">URL Video YouTube</label>
                            <input type="text" name="video_url" class="form-control" value="{{ $galeri->jenis == 'video' ? $galeri->file : '' }}" placeholder="https://www.youtube.com/watch?v=...">
                            <div class="form-text small">Masukkan link lengkap video YouTube.</div>
                        </div>

                        <button type="submit" class="btn btn-primary px-5">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </main>
    </div>
</div>

<script>
    function toggleInput() {
        const jenis = document.getElementById('jenis').value;
        const inputFoto = document.getElementById('input-foto');
        const inputVideo = document.getElementById('input-video');
        
        if (jenis === 'foto') {
            inputFoto.classList.remove('d-none');
            inputVideo.classList.add('d-none');
        } else {
            inputFoto.classList.add('d-none');
            inputVideo.classList.remove('d-none');
        }
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
