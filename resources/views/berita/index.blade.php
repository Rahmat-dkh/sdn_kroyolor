@extends('layouts.app')

@section('title', 'Berita')
@section('meta_description', 'Berita dan informasi terbaru dari SD Negeri Kroyolor, Kemiri, Purworejo. Update kegiatan sekolah, prestasi siswa, dan pengumuman penting.')
@section('og_title', 'Berita & Kegiatan - SD Negeri Kroyolor')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Berita Terbaru</h1>
    <div class="row">
        @forelse($beritas as $item)
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-0 shadow-sm">
                @if($item->gambar)
                    <img src="{{ asset('storage/'.$item->gambar) }}" class="card-img-top" alt="{{ $item->judul }}" style="height: 250px; object-fit: cover;">
                @else
                    <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="Placeholder" style="height: 250px; object-fit: cover;">
                @endif
                <div class="card-body">
                    <h5 class="card-title"><a href="{{ url('/berita/'.$item->slug) }}" class="text-decoration-none text-dark stretched-link">{{ $item->judul }}</a></h5>
                    <p class="card-text text-muted small">{{ date('d M Y', strtotime($item->tanggal)) }}</p>
                    <p class="card-text">{{ Str::limit(strip_tags($item->isi), 100) }}</p>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12 text-center py-5 text-muted">Belum ada berita yang diterbitkan.</div>
        @endforelse
    </div>
    
    <div class="mt-4 d-flex justify-content-center">
        {{ $beritas->links() }}
    </div>
</div>
@endsection
