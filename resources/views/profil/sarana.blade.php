@extends('layouts.app')

@section('title', 'Sarana dan Prasarana')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Sarana dan Prasarana</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @forelse($saranas as $item)
        <div class="col">
            <div class="card h-100 border-0 shadow-sm">
                @if($item->foto)
                    <img src="{{ asset('storage/'.$item->foto) }}" class="card-img-top object-fit-cover" style="height: 250px;" alt="{{ $item->nama }}">
                @else
                    <div class="bg-light d-flex align-items-center justify-content-center" style="height: 250px;">
                        <i class="bi bi-image text-muted display-4"></i>
                    </div>
                @endif
                <div class="card-body">
                    <h5 class="card-title fw-bold text-primary">{{ $item->nama }}</h5>
                    <p class="card-text text-muted">{{ $item->deskripsi }}</p>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12 text-center py-5">
            <div class="p-5 bg-light rounded-4">
                <i class="bi bi-building display-1 text-muted opacity-25 mb-3"></i>
                <p class="text-muted fs-5">Belum ada data sarana prasarana.</p>
            </div>
        </div>
        @endforelse
    </div>
</div>
@endsection
