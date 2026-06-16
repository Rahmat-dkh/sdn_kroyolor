@extends('layouts.admin')

@section('title', 'Edit Berita - Admin SDN Kroyolor')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold">Edit Berita</h4>
    <a href="{{ route('berita.index') }}" class="btn btn-outline-secondary rounded-pill px-4"><i class="bi bi-arrow-left me-2"></i> Batal</a>
</div>

<div class="card border-0 shadow-sm rounded-4">
    <div class="card-body p-4 p-md-5">
        <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="form-label fw-bold">Judul Berita</label>
                <input type="text" name="judul" class="form-control form-control-lg bg-light border-0" value="{{ $berita->judul }}" required>
            </div>
            
            <div class="row mb-4">
                <div class="col-md-6">
                    <label class="form-label fw-bold">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control bg-light border-0" value="{{ $berita->tanggal }}" required>
                </div>
                <div class="col-md-6 mt-3 mt-md-0">
                    <label class="form-label fw-bold">Gambar Utama</label>
                    @if($berita->gambar)
                        <div class="mb-2">
                            <img src="{{ asset('storage/'.$berita->gambar) }}" class="rounded shadow-sm" style="height: 80px; object-fit: cover;">
                        </div>
                    @endif
                    <input type="file" name="gambar" class="form-control bg-light border-0" accept="image/*">
                    <div class="form-text small mt-2"><i class="bi bi-info-circle me-1"></i> Kosongkan jika tidak ingin mengubah gambar. Maksimal: 2MB.</div>
                </div>
            </div>
            
            <div class="mb-4">
                <label class="form-label fw-bold">Isi Berita</label>
                <textarea name="isi" class="form-control bg-light border-0" rows="10" required>{{ $berita->isi }}</textarea>
            </div>
            
            <div class="d-flex justify-content-end mt-5">
                <button type="submit" class="btn btn-primary rounded-pill px-5 py-2 fw-bold shadow-sm"><i class="bi bi-save me-2"></i> Update Berita</button>
            </div>
        </form>
    </div>
</div>
@endsection
