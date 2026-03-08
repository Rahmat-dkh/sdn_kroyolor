@extends('layouts.app')

@section('title', 'Detail Berita')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <h1 class="mb-3">{{ $berita->judul }}</h1>
            <p class="text-muted mb-4 small">Diposting pada: {{ date('d M Y', strtotime($berita->tanggal)) }} | Oleh: Admin</p>
            
            @if($berita->gambar)
                <img src="{{ asset('storage/'.$berita->gambar) }}" class="img-fluid rounded mb-4 w-100" alt="{{ $berita->judul }}">
            @else
                <img src="https://via.placeholder.com/800x450" class="img-fluid rounded mb-4 w-100" alt="Placeholder">
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
