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
                        Jl. Kroyo No. 123, Kabupaten/Kota, Provinsi
                    </div>
                </div>
                <div class="d-flex mb-3">
                    <div class="me-3 text-primary"><i class="bi bi-envelope-fill fs-4"></i></div>
                    <div>
                        <strong>Email:</strong><br>
                        info@sdnkroyolor.sch.id
                    </div>
                </div>
                <div class="d-flex mb-3">
                    <div class="me-3 text-primary"><i class="bi bi-telephone-fill fs-4"></i></div>
                    <div>
                        <strong>Telepon:</strong><br>
                        (021) 1234567
                    </div>
                </div>
                
                <div class="mt-4">
                    <div class="ratio ratio-16x9 rounded shadow-sm overflow-hidden">
                        <!-- Placeholder Google Maps -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.56347862248!2d107.5731164!3d-6.9034443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x1460771707ef72aa!2sBandung%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1710000000000!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
