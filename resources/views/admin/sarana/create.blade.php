@extends('layouts.admin')

@section('title', 'Tambah Sarana Prasarana - Admin SDN Kroyolor')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold">Tambah Sarana Prasarana</h4>
    <a href="{{ route('sarana.index') }}" class="btn btn-outline-secondary rounded-pill px-4"><i class="bi bi-arrow-left me-2"></i> Batal</a>
</div>

<div class="card border-0 shadow-sm rounded-4">
    <div class="card-body p-4 p-md-5">
        <form action="{{ route('sarana.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label class="form-label fw-bold">Nama Sarana</label>
                <input type="text" name="nama" class="form-control form-control-lg bg-light border-0" placeholder="Misal: Laboratorium Komputer" required>
            </div>
            
            <div class="mb-4">
                <label class="form-label fw-bold">Deskripsi</label>
                <textarea name="deskripsi" class="form-control bg-light border-0" rows="4" placeholder="Keterangan mengenai fasilitas..."></textarea>
            </div>
            
            <div class="mb-4" id="input-foto">
                <label class="form-label fw-bold">Foto</label>
                <input type="file" name="foto" class="form-control bg-light border-0" accept="image/*">
            </div>
            
            <div class="d-flex justify-content-end mt-5">
                <button type="submit" class="btn btn-primary rounded-pill px-5 py-2 fw-bold shadow-sm"><i class="bi bi-send me-2"></i> Simpan Data</button>
            </div>
        </form>
    </div>
</div>
@endsection
