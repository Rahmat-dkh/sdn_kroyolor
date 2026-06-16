@extends('layouts.admin')

@section('title', 'Edit Guru/Staff - Admin SDN Kroyolor')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold">Edit Guru / Staff</h4>
    <a href="{{ route('staff.index') }}" class="btn btn-outline-secondary rounded-pill px-4"><i class="bi bi-arrow-left me-2"></i> Batal</a>
</div>

<div class="card border-0 shadow-sm rounded-4">
    <div class="card-body p-4 p-md-5">
        <form action="{{ route('staff.update', $staff->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="form-label fw-bold">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control form-control-lg bg-light border-0" value="{{ $staff->nama }}" required>
            </div>
            
            <div class="row mb-4">
                <div class="col-md-6">
                    <label class="form-label fw-bold">Jabatan</label>
                    <input type="text" name="jabatan" class="form-control bg-light border-0" value="{{ $staff->jabatan }}" required>
                </div>
                <div class="col-md-6 mt-3 mt-md-0">
                    <label class="form-label fw-bold">Kategori</label>
                    <select name="kategori" class="form-select bg-light border-0" required>
                        <option value="guru" {{ $staff->kategori == 'guru' ? 'selected' : '' }}>Guru</option>
                        <option value="tendik" {{ $staff->kategori == 'tendik' ? 'selected' : '' }}>Tenaga Kependidikan</option>
                    </select>
                </div>
            </div>
            
            <div class="mb-4">
                <label class="form-label fw-bold">Foto</label>
                @if($staff->foto)
                    <div class="mb-2">
                        <img src="{{ asset('storage/'.$staff->foto) }}" class="rounded shadow-sm" style="width: 80px; height: 80px; object-fit: cover;">
                    </div>
                @endif
                <input type="file" name="foto" class="form-control bg-light border-0" accept="image/*">
                <div class="form-text small mt-2"><i class="bi bi-info-circle me-1"></i> Kosongkan jika tidak ingin mengubah foto.</div>
            </div>
            
            <div class="d-flex justify-content-end mt-5">
                <button type="submit" class="btn btn-primary rounded-pill px-5 py-2 fw-bold shadow-sm"><i class="bi bi-save me-2"></i> Update Data</button>
            </div>
        </form>
    </div>
</div>
@endsection
