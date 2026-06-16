@extends('layouts.admin')

@section('title', 'Tambah Berita - Admin SDN Kroyolor')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold">Tambah Berita Baru</h4>
    <a href="{{ route('berita.index') }}" class="btn btn-outline-secondary rounded-pill px-4"><i class="bi bi-arrow-left me-2"></i> Batal</a>
</div>

<div class="card border-0 shadow-sm rounded-4">
    <div class="card-body p-4 p-md-5">
        <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label class="form-label fw-bold">Judul Berita</label>
                <input type="text" name="judul" class="form-control form-control-lg bg-light border-0" placeholder="Masukkan judul berita..." required>
            </div>
            
            <div class="row mb-4">
                <div class="col-md-6">
                    <label class="form-label fw-bold">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control bg-light border-0" value="{{ date('Y-m-d') }}" required>
                </div>
                <div class="col-md-6 mt-3 mt-md-0">
                    <label class="form-label fw-bold">Gambar Utama</label>
                    <input type="file" name="gambar" class="form-control bg-light border-0" accept="image/*">
                    <div class="form-text small mt-2"><i class="bi bi-info-circle me-1"></i> Format: JPG, PNG, JPEG. Maksimal: 2MB.</div>
                </div>
            </div>
            
            <div class="mb-4">
                <label class="form-label fw-bold">Isi Berita</label>
                <textarea name="isi" class="form-control bg-light border-0" rows="10" placeholder="Tuliskan isi berita di sini..." required></textarea>
            </div>
            
            <div class="d-flex justify-content-end mt-5">
                <button type="submit" class="btn btn-primary rounded-pill px-5 py-2 fw-bold shadow-sm"><i class="bi bi-send me-2"></i> Simpan Berita</button>
            </div>
        </form>
    </div>
</div>
@endsection
