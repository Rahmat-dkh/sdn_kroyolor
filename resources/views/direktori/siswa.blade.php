@extends('layouts.app')

@section('title', 'Peserta Didik')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Direktori Peserta Didik</h1>
    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="bg-light">
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>Nama Lengkap</th>
                            <th>Kelas</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($siswas as $index => $item)
                        <tr>
                            <td>{{ $siswas->firstItem() + $index }}</td>
                            <td>
                                @if($item->foto)
                                    <img src="{{ asset('storage/'.$item->foto) }}" class="rounded-circle shadow-sm" style="width: 40px; height: 40px; object-fit: cover;" alt="{{ $item->nama }}">
                                @else
                                    <i class="bi bi-person-circle fs-3 text-muted"></i>
                                @endif
                            </td>
                            <td class="fw-bold">{{ $item->nama }}</td>
                            <td>Kelas {{ $item->kelas }}</td>
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
                {{ $siswas->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
