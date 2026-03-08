@extends('layouts.app')

@section('title', 'Guru & Tendik')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Direktori Guru & Tenaga Kependidikan</h1>
    <div class="row row-cols-2 row-cols-md-4 g-4">
        @forelse($staffs as $item)
        <div class="col text-center">
            <div class="card border-0 shadow-sm h-100 p-3">
                @if($item->foto)
                    <img src="{{ asset('storage/'.$item->foto) }}" class="img-fluid rounded-circle mb-3 shadow-sm mx-auto" alt="{{ $item->nama }}" style="width: 120px; height: 120px; object-fit: cover;">
                @else
                    <div class="bg-light rounded-circle mb-3 mx-auto d-flex align-items-center justify-content-center" style="width: 120px; height: 120px;">
                        <i class="bi bi-person fs-1 text-muted"></i>
                    </div>
                @endif
                <h6 class="mb-1 fw-bold">{{ $item->nama }}</h6>
                <p class="text-primary small mb-2">{{ $item->jabatan }}</p>
                <span class="badge bg-light text-dark border small mt-auto mx-auto">{{ ucfirst($item->kategori) }}</span>
            </div>
        </div>
        @empty
        <div class="col-12 text-center py-5 text-muted">Data guru dan staff belum tersedia.</div>
        @endforelse
    </div>
</div>
@endsection
