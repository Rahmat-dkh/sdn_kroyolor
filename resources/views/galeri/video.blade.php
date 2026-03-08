@extends('layouts.app')

@section('title', 'Galeri Video')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Galeri Video</h1>
    <div class="row g-4">
        @forelse($videos as $item)
        <div class="col-md-6">
            <div class="card border-0 shadow-sm overflow-hidden h-100">
                <div class="ratio ratio-16x9">
                    @php
                        $url = $item->file;
                        $videoId = "";
                        if (preg_match('/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/ ]{11})/i', $url, $match)) {
                            $videoId = $match[1];
                        }
                    @endphp
                    @if($videoId)
                        <iframe src="https://www.youtube.com/embed/{{ $videoId }}" title="{{ $item->judul }}" allowfullscreen></iframe>
                    @else
                        <div class="bg-dark text-white d-flex align-items-center justify-content-center">Link Video Tidak Valid</div>
                    @endif
                </div>
                <div class="card-body p-3 text-center">
                    <h6 class="card-title fw-bold mb-0">{{ $item->judul }}</h6>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12 text-center py-5 text-muted">Galeri video belum memiliki konten.</div>
        @endforelse
    </div>

    <div class="mt-4 d-flex justify-content-center">
        {{ $videos->links() }}
    </div>
</div>
@endsection
