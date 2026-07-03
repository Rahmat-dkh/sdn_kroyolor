@extends('layouts.app')

@section('title', $berita->judul)
@section('meta_description', Str::limit(strip_tags($berita->isi), 160))
@section('og_title', $berita->judul . ' - SD Negeri Kroyolor')
@section('og_image', $berita->gambar ? asset('storage/'.$berita->gambar) : asset('images/hero.jpg'))

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <h1 class="mb-3">{{ $berita->judul }}</h1>
            <p class="text-muted mb-4 small">Diposting pada: {{ date('d M Y', strtotime($berita->tanggal)) }} | Oleh: Admin</p>
            
            @if($berita->gambar)
                <img src="{{ asset('storage/'.$berita->gambar) }}" class="img-fluid rounded mb-4 w-100" alt="{{ $berita->judul }}" style="max-height: 450px; object-fit: cover;">
            @else
                <img src="https://via.placeholder.com/800x450" class="img-fluid rounded mb-4 w-100" alt="Placeholder" style="max-height: 450px; object-fit: cover;">
            @endif
            
            <div class="article-content leading-relaxed" style="white-space: pre-line;">
                {!! $berita->isi !!}
            </div>
            
            <hr class="my-5">
            <a href="/berita" class="btn btn-outline-secondary">Kembali ke Daftar Berita</a>
        </div>
    </div>
</div>
@endsection
