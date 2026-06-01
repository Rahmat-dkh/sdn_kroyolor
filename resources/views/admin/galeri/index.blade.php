@extends('layouts.admin')

@section('title', 'Kelola Galeri - Admin SDN Kroyolor')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold">Kelola Galeri</h4>
    <a href="{{ route('galeri.create') }}" class="btn btn-primary rounded-pill px-4"><i class="bi bi-plus-lg me-2"></i> Tambah Item</a>
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
                        <th class="border-0">Pratinjau</th>
                        <th class="border-0">Judul</th>
                        <th class="border-0">Jenis</th>
                        <th class="text-end px-4 border-0">Aksi</th>
                    </tr>
                </thead>
                <tbody class="border-top-0">
                    @forelse($galeris as $index => $item)
                    <tr>
                        <td class="px-4 text-muted">{{ $galeris->firstItem() + $index }}</td>
                        <td>
                            @if($item->jenis == 'foto')
                                <img src="{{ asset('storage/'.$item->file) }}" class="rounded-3 shadow-sm" style="width: 60px; height: 40px; object-fit: cover;">
                            @else
                                <div class="bg-dark text-white rounded-3 shadow-sm d-flex align-items-center justify-content-center" style="width: 60px; height: 40px;">
                                    <i class="bi bi-play-fill small"></i>
                                </div>
                            @endif
                        </td>
                        <td class="fw-bold text-dark">{{ $item->judul }}</td>
                        <td>
                            <span class="badge {{ $item->jenis == 'foto' ? 'bg-success-subtle text-success' : 'bg-danger-subtle text-danger' }} rounded-pill px-3">
                                {{ ucfirst($item->jenis) }}
                            </span>
                        </td>
                        <td class="text-end px-4">
                            <div class="d-flex justify-content-end gap-2">
                                <a href="{{ route('galeri.edit', $item->id) }}" class="btn btn-sm btn-light rounded-circle shadow-sm" title="Edit">
                                    <i class="bi bi-pencil text-primary"></i>
                                </a>
                                <form action="{{ route('galeri.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus item ini?')">
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
                        <td colspan="5" class="text-center py-5">
                            <div class="p-4">
                                <i class="bi bi-images display-4 text-muted opacity-25"></i>
                                <p class="text-muted mt-3">Belum ada data galeri yang tersedia.</p>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    @if($galeris->hasPages())
    <div class="card-footer bg-white border-0 px-4 py-3">
        {{ $galeris->links() }}
    </div>
    @endif
</div>
@endsection
