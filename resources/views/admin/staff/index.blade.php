@extends('layouts.admin')

@section('title', 'Kelola Staff - Admin SDN Kroyolor')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold">Kelola Guru & Staff</h4>
    <a href="{{ route('staff.create') }}" class="btn btn-primary rounded-pill px-4"><i class="bi bi-plus-lg me-2"></i> Tambah Staff</a>
</div>

@if(session('success'))
    <div class="alert alert-success border-0 shadow-sm mb-4 rounded-3">
        <i class="bi bi-check-circle me-2"></i> {{ session('success') }}
    </div>
@endif

<div class="card border-0 shadow-sm rounded-4 overflow-hidden">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0 align-middle">
                <thead class="bg-light">
                    <tr>
                        <th class="px-4 py-3 border-0">No</th>
                        <th class="border-0">Foto</th>
                        <th class="border-0">Nama</th>
                        <th class="border-0">Jabatan</th>
                        <th class="border-0">Kategori</th>
                        <th class="text-end px-4 border-0">Aksi</th>
                    </tr>
                </thead>
                <tbody class="border-top-0">
                    @forelse($staffs as $index => $item)
                    <tr>
                        <td class="px-4 text-muted">{{ $staffs->firstItem() + $index }}</td>
                        <td>
                            @if($item->foto)
                                <img src="{{ asset('storage/'.$item->foto) }}" class="rounded-circle shadow-sm" style="width: 40px; height: 40px; object-fit: cover;">
                            @else
                                <div class="bg-light rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                    <i class="bi bi-person text-muted"></i>
                                </div>
                            @endif
                        </td>
                        <td class="fw-bold text-dark">{{ $item->nama }}</td>
                        <td class="text-muted">{{ $item->jabatan }}</td>
                        <td>
                            <span class="badge {{ $item->kategori == 'guru' ? 'bg-info-subtle text-info' : 'bg-secondary-subtle text-secondary' }} rounded-pill px-3">
                                {{ ucfirst($item->kategori) }}
                            </span>
                        </td>
                        <td class="text-end px-4">
                            <div class="d-flex justify-content-end gap-2">
                                <a href="{{ route('staff.edit', $item->id) }}" class="btn btn-sm btn-light rounded-circle shadow-sm" title="Edit">
                                    <i class="bi bi-pencil text-primary"></i>
                                </a>
                                <form action="{{ route('staff.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-light rounded-circle shadow-sm" title="Hapus">
                                        <i class="bi bi-trash text-danger"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center py-5">
                            <div class="p-4">
                                <i class="bi bi-people display-4 text-muted opacity-25"></i>
                                <p class="text-muted mt-3">Belum ada data staff yang tersedia.</p>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    @if($staffs->hasPages())
    <div class="card-footer bg-white border-0 px-4 py-3">
        {{ $staffs->links() }}
    </div>
    @endif
</div>
@endsection
