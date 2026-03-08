@extends('layouts.app')

@section('title', 'Sarana dan Prasarana')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Sarana dan Prasarana</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100 border-0 shadow-sm">
                <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="Ruang Kelas">
                <div class="card-body">
                    <h5 class="card-title">Ruang Kelas</h5>
                    <p class="card-text">Ruang kelas yang nyaman dan representatif untuk proses belajar mengajar.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 border-0 shadow-sm">
                <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="Perpustakaan">
                <div class="card-body">
                    <h5 class="card-title">Perpustakaan</h5>
                    <p class="card-text">Koleksi buku lengkap untuk menunjang literasi siswa.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 border-0 shadow-sm">
                <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="Laboratorium Komputer">
                <div class="card-body">
                    <h5 class="card-title">Lab Komputer</h5>
                    <p class="card-text">Fasilitas komputer modern untuk pengenalan teknologi informasi.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
