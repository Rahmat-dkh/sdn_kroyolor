@extends('layouts.admin')

@section('title', 'Pesan Masuk - Admin SDN Kroyolor')

@section('content')
<div class="mb-4">
    <h4 class="fw-bold">Pesan Masuk</h4>
    <p class="text-muted small">Kelola pesan dan saran dari pengunjung website.</p>
</div>

@if(session('success'))
    <div class="alert alert-success border-0 shadow-sm mb-4 rounded-3">
        <i class="bi bi-check-circle me-2"></i> {{ session('success') }}
    </div>
@endif

<div class="card border-0 shadow-sm rounded-4 overflow-hidden">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0 align-top">
                <thead class="bg-light">
                    <tr>
                        <th class="px-4 py-3 border-0">No</th>
                        <th class="border-0">Pengirim</th>
                        <th class="border-0">Pesan</th>
                        <th class="border-0">Waktu</th>
                        <th class="text-end px-4 border-0">Aksi</th>
                    </tr>
                </thead>
                <tbody class="border-top-0">
                    @forelse($messages as $index => $item)
                    <tr>
                        <td class="px-4 text-muted">{{ $messages->firstItem() + $index }}</td>
                        <td>
                            <div class="fw-bold text-dark">{{ $item->nama }}</div>
                            <div class="text-muted small">{{ $item->email }}</div>
                        </td>
                        <td style="max-width: 400px;">
                            <div class="text-wrap small text-muted">{{ $item->pesan }}</div>
                        </td>
                        <td class="text-muted small">{{ $item->created_at->diffForHumans() }}</td>
                        <td class="text-end px-4">
                            <form action="{{ route('admin.kontak.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Hapus pesan ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-light rounded-circle shadow-sm" title="Hapus">
                                    <i class="bi bi-trash text-danger"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center py-5">
                            <div class="p-4">
                                <i class="bi bi-envelope-open display-4 text-muted opacity-25"></i>
                                <p class="text-muted mt-3">Belum ada pesan yang masuk.</p>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    @if($messages->hasPages())
    <div class="card-footer bg-white border-0 px-4 py-3">
        {{ $messages->links() }}
    </div>
    @endif
</div>
@endsection
