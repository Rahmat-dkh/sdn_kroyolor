@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <!-- Hero Section -->
    <section class="hero-section text-start d-flex align-items-center">
        <div class="container px-4 px-md-3">
            <div class="row">
                <div class="col-lg-10 px-3 px-md-0">
                    <div class="hero-content">
                        <h1 class="hero-title fw-800 mb-3 text-white">Membangun <br>Masa Depan.</h1>
                        <div class="hero-line mb-4"></div>
                        <p class="hero-subtitle mb-4 mb-md-5 text-white opacity-75 fs-6 fs-md-5">SD Negeri Kroyolor: Unggul, Berkarakter, Berprestasi.</p>
                        <div class="d-grid d-md-flex gap-3">
                            <a href="#sambutan" class="btn btn-primary rounded-0 px-4 px-md-5 py-2 py-md-3 fw-bold shadow-lg">Jelajahi Sekarang</a>
                            <a href="/profil/identitas" class="btn btn-outline-light rounded-0 px-4 px-md-5 py-2 py-md-3 fw-bold">Profil Sekolah</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Info Section (Tel-U Style) -->
    <section class="py-4 bg-white position-relative z-index-1">
        <div class="container">
            <!-- Header Section -->
            <div class="text-center mb-4">
                <h2 class="display-5 fw-bold text-primary mb-2">Akademik</h2>
                <p class="lead text-muted mx-auto small" style="max-width: 700px;">Mempersiapkan siswa untuk memberikan kontribusi yang berarti pada masyarakat, bangsa dan dunia melalui pendidikan berkualitas.</p>
            </div>

            <div class="row g-3 g-md-4 justify-content-center text-center">
                <!-- Col 1: Mengapa -->
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="info-card-alt h-100 p-3 p-md-4">
                        <div class="info-icon-large mx-auto mb-3 mb-md-4">
                            <i class="bi bi-question-circle"></i>
                        </div>
                        <h5 class="fw-bold mb-2 mb-md-3 text-primary">Mengapa Kami</h5>
                        <p class="text-muted small px-1 px-md-3 d-none d-sm-block">Sekolah terakreditasi Unggul yang berkomitmen mencetak generasi berprestasi.</p>
                    </div>
                </div>
                <!-- Col 2: Tentang -->
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="info-card-alt h-100 p-3 p-md-4">
                        <div class="info-icon-large mx-auto mb-3 mb-md-4">
                            <i class="bi bi-building"></i>
                        </div>
                        <h5 class="fw-bold mb-2 mb-md-3 text-primary">Tentang Sekolah</h5>
                        <p class="text-muted small px-1 px-md-3 d-none d-sm-block">Program unggulan dengan tenaga pendidik profesional dan fasilitas lengkap.</p>
                    </div>
                </div>
                <!-- Col 3: Belajar -->
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="info-card-alt h-100 p-3 p-md-4">
                        <div class="info-icon-large mx-auto mb-3 mb-md-4">
                            <i class="bi bi-mortarboard"></i>
                        </div>
                        <h5 class="fw-bold mb-2 mb-md-3 text-primary">Belajar Modern</h5>
                        <p class="text-muted small px-1 px-md-3 d-none d-sm-block">Layanan akademik berbasis digital terintegrasi untuk mendukung pembelajaran.</p>
                    </div>
                </div>
                <!-- Col 4: Ekstrakurikuler -->
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="info-card-alt h-100 p-3 p-md-4">
                        <div class="info-icon-large mx-auto mb-3 mb-md-4">
                            <i class="bi bi-palette"></i>
                        </div>
                        <h5 class="fw-bold mb-2 mb-md-3 text-primary">Ekstrakurikuler</h5>
                        <p class="text-muted small px-1 px-md-3 d-none d-sm-block">Beragam kegiatan untuk mengembangkan minat dan bakat siswa di luar akademik.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sambutan Kepala Sekolah -->
    <section id="sambutan" class="py-5 bg-white overlap-section">
        <div class="container">
            <div class="card border-0 shadow-lg p-4 p-md-5 mt-4 position-relative z-index-2 rounded-3xl">
                <div class="row align-items-center text-center text-md-start">
                    <div class="col-md-3 mb-4 mb-md-0">
                        <div class="mx-auto bg-primary-soft rounded-4 p-2" style="max-width: 220px;">
                            <img src="{{ asset('images/kepala-sekolah.jpg') }}" class="img-fluid rounded-3 shadow-sm" alt="Kepala Sekolah" style="object-fit: cover; width: 100%; height: auto; aspect-ratio: 3/4;">
                        </div>
                    </div>
                    <div class="col-md-9 mt-2 mt-md-0">
                        <h2 class="fw-bold mb-3 fs-3 fs-md-2">Sambutan Kepala Sekolah</h2>
                        <p class="fs-6 text-muted fst-italic mb-4 mx-auto mx-md-0" style="line-height: 1.6; max-width: 800px;">
                            "Assalamu'alaikum Warahmatullahi Wabarakatuh. Selamat datang di website resmi SD Negeri Kroyolor. Kami hadir dengan komitmen teguh untuk mewujudkan generasi yang beriman, bertaqwa, dan memiliki budi pekerti yang santun. Sebagai institusi pendidikan dasar, kami menyadari bahwa pondasi karakter anak bangsa dibentuk di sini. Mari bersama-sama bersinergi mendidik putra-putri kita menjadi generasi mandiri, peduli lingkungan, dan siap menyongsong masa depan gemilang."
                        </p>
                        <div class="mt-4">
                            <h5 class="fw-bold mb-1 text-dark">Imbuh Tri Purwani S.Pd.SD</h5>
                            <p class="text-primary small fw-bold mb-0 text-uppercase tracking-wider">Kepala Sekolah SD Negeri Kroyolor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistik Counter Fakta -->
    <section class="py-4 text-white bg-primary">
        <div class="container py-3">
            <div class="text-center mb-4">
                <h3 class="fw-bold m-0 tracking-wider">Fakta SD Negeri Kroyolor</h3>
            </div>
            <div class="row text-center justify-content-center align-items-center g-4">
                <div class="col-6 col-md-3 d-flex flex-column flex-md-row justify-content-center align-items-center align-items-md-baseline gap-1 gap-md-2">
                    <span class="stat-value fw-bold counter-value m-0" data-target="9">0</span>
                    <span class="fs-6 text-white-50">Guru</span>
                </div>
                <div class="col-6 col-md-3 d-flex flex-column flex-md-row justify-content-center align-items-center align-items-md-baseline gap-1 gap-md-2">
                    <span class="stat-value fw-bold counter-value m-0" data-target="142">0</span>
                    <span class="fs-6 text-white-50">Siswa</span>
                </div>
                <div class="col-6 col-md-3 d-flex flex-column flex-md-row justify-content-center align-items-center align-items-md-baseline gap-1 gap-md-2">
                    <div class="d-flex align-items-baseline"><span class="stat-value fw-bold counter-value m-0" data-target="50">0</span><span class="stat-value fw-bold m-0">+</span></div>
                    <span class="fs-6 text-white-50">Prestasi</span>
                </div>
                <div class="col-6 col-md-3 d-flex flex-column flex-md-row justify-content-center align-items-center align-items-md-baseline gap-1 gap-md-2">
                    <span class="stat-value fw-bold counter-value m-0" data-target="15">0</span>
                    <span class="fs-6 text-white-50">Fasilitas</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Berita Terbaru -->
    <section class="py-5 mt-4">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-end mb-4 mb-md-5 gap-3">
                <div>
                    <h5 class="text-primary fw-bold text-uppercase tracking-wider small mb-2">Update Terkini</h5>
                    <h2 class="section-title fw-bold mb-0">Berita & Kegiatan</h2>
                </div>
                <a href="/berita" class="btn btn-outline-primary rounded-pill px-4 py-2 btn-sm fw-bold">Lihat Semua <i class="bi bi-arrow-right ms-1"></i></a>
            </div>
            
            <div class="row g-4">
                @forelse($berita as $item)
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm overflow-hidden">
                        <div class="position-relative">
                            @if($item->gambar)
                                <img src="{{ asset('storage/'.$item->gambar) }}" class="card-img-top" alt="{{ $item->judul }}" style="height: 240px; object-fit: cover;">
                            @else
                                <div class="bg-light d-flex align-items-center justify-content-center" style="height: 240px;">
                                    <i class="bi bi-image text-muted display-4"></i>
                                </div>
                            @endif
                            <div class="position-absolute bottom-0 start-0 m-3 px-3 py-1 bg-primary text-white rounded-pill small fw-bold shadow-sm">
                                {{ date('d M Y', strtotime($item->tanggal)) }}
                            </div>
                        </div>
                        <div class="card-body p-4">
                            <h5 class="card-title fw-bold mb-3">{{ Str::limit($item->judul, 60) }}</h5>
                            <p class="card-text text-muted mb-4">{{ Str::limit(strip_tags($item->isi), 100) }}</p>
                            <a href="{{ url('/berita/'.$item->slug) }}" class="btn btn-primary btn-sm rounded-pill px-4">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12 text-center py-5">
                    <div class="p-5 bg-light rounded-4">
                        <i class="bi bi-newspaper display-1 text-muted opacity-25 mb-3"></i>
                        <p class="text-muted fs-5">Belum ada berita terbaru untuk saat ini.</p>
                    </div>
                </div>
                @endforelse
            </div>
        </div>
    </section>


    <!-- Galeri & CTA -->
    <section class="py-5 text-start">
        <div class="container py-4">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-end mb-4 mb-md-5 gap-3">
                <div>
                    <h5 class="text-primary fw-bold text-uppercase tracking-wider small mb-2">Galeri Foto</h5>
                    <h2 class="section-title fw-bold mb-0">Lihat Aktivitas Kami</h2>
                </div>
                <a href="/galeri/foto" class="btn btn-outline-primary rounded-pill px-4 py-2 btn-sm fw-bold">Lihat Semua <i class="bi bi-arrow-right ms-1"></i></a>
            </div>
            <div class="row g-3 g-md-4 mb-5 text-center">
                @forelse($galeri as $item)
                <div class="col-12 col-sm-6 col-md-3">
                    <a href="{{ asset('storage/'.$item->file) }}" target="_blank" class="gallery-card text-decoration-none d-block position-relative rounded-4 overflow-hidden shadow-sm h-100">
                        <img src="{{ asset('storage/'.$item->file) }}" class="gallery-item img-fluid object-fit-cover w-100" style="height: 250px;" alt="{{ $item->judul }}">
                        <div class="position-absolute bottom-0 start-0 w-100 p-3" style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                            <h6 class="text-white fw-bold mb-0 text-truncate" title="{{ $item->judul }}">{{ $item->judul }}</h6>
                        </div>
                    </a>
                </div>
                @empty
                <div class="col-12 text-center py-4">
                    <p class="text-muted"><i class="bi bi-images me-2"></i>Belum ada aktivitas yang diunggah.</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>


    <style>
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.5)), 
                        url('{{ asset('images/hero.jpg') }}');
            background-size: cover;
            background-position: center;
            min-height: 55vh;
            padding: 120px 0 80px 0;
            position: relative;
        }
        .fw-800 { font-weight: 800; }
        .hero-title {
            font-size: 2.6rem;
            letter-spacing: -1.5px;
            line-height: 1.1;
            text-transform: uppercase;
            font-family: 'Outfit', sans-serif;
            text-shadow: 0 10px 30px rgba(0,0,0,0.5);
        }
        .section-title {
            font-size: 1.8rem;
        }
        .stat-value {
            font-size: 2.2rem;
            line-height: 1;
        }
        @media (min-width: 768px) {
            .hero-section {
                min-height: 90vh;
                padding: 0;
            }
            .hero-title {
                font-size: clamp(3rem, 5vw, 4.5rem);
                line-height: 0.9;
            }
            .section-title {
                font-size: clamp(2rem, 3vw, 2.5rem);
            }
            .stat-value {
                font-size: clamp(2.5rem, 4vw, 3.5rem);
            }
        }
        .hero-line {
            width: 80px;
            height: 6px;
            background-color: var(--bs-primary);
        }
        .tracking-widest { letter-spacing: 0.3em; }
        .hero-subtitle {
            font-family: 'Inter', sans-serif;
            max-width: 600px;
            text-shadow: 0 4px 10px rgba(0,0,0,0.5);
        }
        .overlap-section {
            z-index: 10;
        }
        .rounded-3xl {
            border-radius: 2rem;
        }
        .bg-primary-soft {
            background-color: rgba(13, 110, 253, 0.1);
        }
        .tracking-wider {
            letter-spacing: 0.1rem;
        }
        .z-index-2 {
            z-index: 2;
        }
        .z-index-3 {
            z-index: 3;
        }
        .underline {
            position: relative;
            display: inline-block;
        }
        .underline::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 5px;
            width: 100%;
            height: 12px;
            background-color: var(--accent-color);
            opacity: 0.4;
            z-index: -1;
        }
        .text-accent {
            color: var(--accent-color);
        }
        .gallery-item {
            transition: transform 0.3s ease;
        }
        .gallery-card:hover .gallery-item {
            transform: scale(1.05);
        }
        .info-card-alt {
            transition: all 0.3s ease;
            padding: 30px 20px;
            border-radius: 1rem;
            background: #fff;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        }
        .info-card-alt:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        .info-card-alt .info-icon-large {
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: rgba(13, 110, 253, 0.1);
            color: var(--bs-primary);
            font-size: 2rem;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        .info-card-alt:hover .info-icon-large {
            transform: scale(1.15) rotate(10deg);
            background: var(--bs-primary);
            color: #fff;
        }
        @media (min-width: 768px) {
            .info-card-alt .info-icon-large {
                width: 80px;
                height: 80px;
                font-size: 2.5rem;
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const counters = document.querySelectorAll('.counter-value');
            const speed = 200; 

            const animateCounters = () => {
                counters.forEach(counter => {
                    const updateCount = () => {
                        const target = +counter.getAttribute('data-target');
                        const count = +counter.innerText;
                        const inc = target / speed;

                        if (count < target) {
                            counter.innerText = Math.ceil(count + inc);
                            setTimeout(updateCount, 15);
                        } else {
                            counter.innerText = target;
                        }
                    };
                    updateCount();
                });
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if(entry.isIntersecting) {
                        animateCounters();
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.5 });

            const statsSection = document.querySelector('.counter-value')?.closest('section');
            if(statsSection) observer.observe(statsSection);
        });
    </script>
@endsection
