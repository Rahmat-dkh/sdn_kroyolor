@extends('layouts.admin')

@section('title', 'Tambah Guru/Staff - Admin SDN Kroyolor')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold">Tambah Guru / Staff Baru</h4>
    <a href="{{ route('staff.index') }}" class="btn btn-outline-secondary rounded-pill px-4"><i class="bi bi-arrow-left me-2"></i> Batal</a>
</div>

<div class="card border-0 shadow-sm rounded-4">
    <div class="card-body p-4 p-md-5">
        <form action="{{ route('staff.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label class="form-label fw-bold">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control form-control-lg bg-light border-0" placeholder="Nama beserta gelar..." required>
            </div>
            
            <div class="row mb-4">
                <div class="col-md-6">
                    <label class="form-label fw-bold">Jabatan</label>
                    <input type="text" name="jabatan" class="form-control bg-light border-0" placeholder="Contoh: Guru Kelas IV, Operator" required>
                </div>
                <div class="col-md-6 mt-3 mt-md-0">
                    <label class="form-label fw-bold">Kategori</label>
                    <select name="kategori" class="form-select bg-light border-0" required>
                        <option value="guru">Guru</option>
                        <option value="tendik">Tenaga Kependidikan</option>
                    </select>
                </div>
            </div>
            
            <div class="mb-4">
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
