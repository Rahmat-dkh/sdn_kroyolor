@extends('layouts.app')

@section('title', 'Kontak')

@section('content')
<div class="container py-5">
    <h1 class="mb-5 text-center">Hubungi Kami</h1>
    <div class="row g-5">
        <div class="col-md-6">
            <div class="card border-0 shadow-sm p-4 h-100">
                <h3>Informasi Kontak</h3>
                <p class="mb-4">Silakan hubungi kami melalui saluran berikut untuk informasi lebih lanjut.</p>
                <div class="d-flex mb-3">
                    <div class="me-3 text-primary"><i class="bi bi-geo-alt-fill fs-4"></i></div>
                    <div>
                        <strong>Alamat:</strong><br>
                        Kroyolor, Desa Kroyo Lor, Kec. Kemiri, Kab. Purworejo, Jawa Tengah
                    </div>
                </div>
                <div class="d-flex mb-3">
                    <div class="me-3 text-primary"><i class="bi bi-envelope-fill fs-4"></i></div>
                    <div>
                        <strong>Email:</strong><br>
                        sdnkroyolor@gmail.com
                    </div>
                </div>
                <div class="d-flex mb-3">
                    <div class="me-3 text-primary"><i class="bi bi-telephone-fill fs-4"></i></div>
                    <div>
                        <strong>Telepon:</strong><br>
                        (0275) 1234567
                    </div>
                </div>
                
                <div class="mt-4">
                    <div class="ratio ratio-16x9 rounded shadow-sm overflow-hidden">
                        <iframe src="https://www.google.com/maps?q=SD+Negeri+Kroyolor+Kemiri+Purworejo&output=embed" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-0 shadow-sm p-4 h-100">
                <h3>Kirim Pesan</h3>
                <p>Gunakan formulir di bawah ini untuk mengirim pesan langsung kepada kami.</p>
                
                @if(session('success'))
                    <div class="alert alert-success border-0 shadow-sm">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="/kontak" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama Anda" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alamat Email</label>
                        <input type="email" name="email" class="form-control" placeholder="email@contoh.com" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pesan</label>
                        <textarea name="pesan" class="form-control" rows="5" placeholder="Tuliskan pesan Anda di sini..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 py-2 fw-bold">Kirim Pesan Sekarang</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
