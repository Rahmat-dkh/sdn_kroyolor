@extends('layouts.app')

@section('title', 'Guru & Tendik')

@section('content')
<div class="container py-5">
    <div class="mb-4 text-center text-md-start">
        <h5 class="text-primary fw-bold text-uppercase small mb-2" style="letter-spacing: 0.1rem;">Direktori</h5>
        <h2 class="fw-bold mb-0 fs-3 fs-md-2">Guru & Tenaga Kependidikan</h2>
    </div>
    
    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-3 g-md-4">
        @forelse($staffs as $item)
        <div class="col text-center">
            <div class="card border shadow-sm h-100 p-3 p-md-4 rounded-4 transition-all hover-lift">
                @if($item->foto)
                    <div class="mx-auto bg-primary-soft rounded-4 p-2 mb-3 w-100" style="max-width: 220px;">
                        <img src="{{ asset('storage/'.$item->foto) }}" class="img-fluid rounded-3 shadow-sm w-100 border border-3 border-white" alt="{{ $item->nama }}" style="object-fit: cover; aspect-ratio: 3/4;">
                    </div>
                @else
                    <div class="mx-auto bg-primary-soft rounded-4 p-2 mb-3 w-100" style="max-width: 220px;">
                        <div class="bg-light rounded-3 d-flex align-items-center justify-content-center w-100 shadow-sm border border-3 border-white" style="aspect-ratio: 3/4;">
                            <i class="bi bi-person text-muted" style="font-size: 4rem;"></i>
                        </div>
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
