@extends('layouts.admin')

@section('title', 'Edit Galeri - Admin SDN Kroyolor')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold">Edit Item Galeri</h4>
    <a href="{{ route('galeri.index') }}" class="btn btn-outline-secondary rounded-pill px-4"><i class="bi bi-arrow-left me-2"></i> Batal</a>
</div>

<div class="card border-0 shadow-sm rounded-4">
    <div class="card-body p-4 p-md-5">
        <form action="{{ route('galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="form-label fw-bold">Judul Item</label>
                <input type="text" name="judul" class="form-control form-control-lg bg-light border-0" value="{{ $galeri->judul }}" required>
            </div>
            
            <div class="mb-4">
                <label class="form-label fw-bold">Jenis Konten</label>
                <select name="jenis" id="jenis" class="form-select bg-light border-0" required onchange="toggleInput()">
                    <option value="foto" {{ $galeri->jenis == 'foto' ? 'selected' : '' }}>Foto</option>
                    <option value="video" {{ $galeri->jenis == 'video' ? 'selected' : '' }}>Video (YouTube URL)</option>
                </select>
            </div>
            
            <div class="mb-4 {{ $galeri->jenis == 'video' ? 'd-none' : '' }}" id="input-foto">
                <label class="form-label fw-bold">File Foto</label>
                @if($galeri->jenis == 'foto' && $galeri->file)
                    <div class="mb-2">
                        <img src="{{ asset('storage/'.$galeri->file) }}" class="rounded shadow-sm" style="height: 100px;">
                    </div>
                @endif
                <input type="file" name="file" class="form-control bg-light border-0" accept="image/*">
                <div class="form-text small mt-2"><i class="bi bi-info-circle me-1"></i> Kosongkan jika tidak ingin mengubah foto.</div>
            </div>

            <div class="mb-4 {{ $galeri->jenis == 'foto' ? 'd-none' : '' }}" id="input-video">
                <label class="form-label fw-bold">URL Video YouTube</label>
                <input type="text" name="video_url" class="form-control bg-light border-0" value="{{ $galeri->jenis == 'video' ? $galeri->file : '' }}" placeholder="https://www.youtube.com/watch?v=...">
                <div class="form-text small mt-2"><i class="bi bi-info-circle me-1"></i> Masukkan link lengkap video YouTube.</div>
            </div>

            <div class="d-flex justify-content-end mt-5">
                <button type="submit" class="btn btn-primary rounded-pill px-5 py-2 fw-bold shadow-sm"><i class="bi bi-save me-2"></i> Simpan Perubahan</button>
            </div>
        </form>
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
@endsection
