@extends('layouts.admin')

@section('title', 'Sarana Prasarana - Admin SDN Kroyolor')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold">Manajemen Sarana Prasarana</h4>
    <a href="{{ route('sarana.create') }}" class="btn btn-primary rounded-pill shadow-sm px-4">
        <i class="bi bi-plus-lg me-2"></i> Tambah Sarana
    </a>
</div>

@if(session('success'))
<div class="alert alert-success alert-dismissible fade show border-0 shadow-sm" role="alert">
    <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="card border-0 shadow-sm rounded-4">
    <div class="card-body p-4">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th width="80">No</th>
                        <th width="150">Foto</th>
                        <th>Nama Sarana</th>
                        <th>Deskripsi</th>
                        <th width="150" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($saranas as $index => $item)
                    <tr>
                        <td>{{ $saranas->firstItem() + $index }}</td>
                        <td>
                            @if($item->foto)
                            <img src="{{ asset('storage/'.$item->foto) }}" class="rounded shadow-sm" style="width: 80px; height: 60px; object-fit: cover;">
                            @else
                            <div class="bg-light rounded d-flex align-items-center justify-content-center" style="width: 80px; height: 60px;">
                                <i class="bi bi-image text-muted"></i>
                            </div>
                            @endif
                        </td>
                        <td class="fw-bold text-dark">{{ $item->nama }}</td>
                        <td class="text-muted small">{{ Str::limit($item->deskripsi, 60) }}</td>
                        <td class="text-center">
                            <div class="btn-group shadow-sm">
                                <a href="{{ route('sarana.edit', $item->id) }}" class="btn btn-sm btn-light border" title="Edit">
                                    <i class="bi bi-pencil text-primary"></i>
                                </a>
                                <form action="{{ route('sarana.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus item ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-light border" title="Hapus">
                                        <i class="bi bi-trash text-danger"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center py-5 text-muted">
                            <i class="bi bi-building display-4 mb-3 d-block opacity-25"></i>
                            Belum ada data sarana prasarana
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <div class="d-flex justify-content-end mt-4">
            {{ $saranas->links() }}
        </div>
    </div>
</div>
@endsection
