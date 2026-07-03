@extends('layouts.app')

@section('title', 'Dokumentasi Siswa')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Dokumentasi Siswa</h1>
    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="bg-light">
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>Judul Kegiatan</th>
                            <th>Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($dokumentasis as $index => $item)
                        <tr>
                            <td>{{ $dokumentasis->firstItem() + $index }}</td>
                            <td>
                                @if($item->foto)
                                    <img src="{{ asset('storage/'.$item->foto) }}" class="rounded shadow-sm" style="width: 80px; height: 60px; object-fit: cover;" alt="{{ $item->judul }}">
                                @else
                                    <i class="bi bi-image fs-3 text-muted"></i>
                                @endif
                            </td>
                            <td class="fw-bold">{{ $item->judul }}</td>
                            <td>{{ Str::limit($item->deskripsi, 100) }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center py-4 text-muted">Data peserta didik belum tersedia.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            <div class="mt-4 d-flex justify-content-center">
                {{ $dokumentasis->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
