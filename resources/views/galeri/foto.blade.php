@extends('layouts.app')

@section('title', 'Galeri Foto')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Galeri Foto</h1>
    <div class="row g-3">
        @forelse($fotos as $item)
        <div class="col-12 col-sm-6 col-md-3">
            <div class="card border-0 shadow-sm h-100 overflow-hidden galeri-card">
                <a href="{{ asset('storage/'.$item->file) }}" target="_blank">
                    <img src="{{ asset('storage/'.$item->file) }}" class="img-fluid" alt="{{ $item->judul }}" style="height: 200px; width: 100%; object-fit: cover;" loading="lazy">
                </a>
                <div class="p-2 small text-center text-truncate bg-white border-top">
                    {{ $item->judul }}
                </div>
            </div>
        </div>
        @empty
        <div class="col-12 text-center py-5 text-muted">Galeri foto belum memiliki konten.</div>
        @endforelse
    </div>
    
    <div class="mt-4 d-flex justify-content-center">
        {{ $fotos->links() }}
    </div>
</div>
@endsection
