@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Alert Pengumuman -->
    <div class="bg-warning text-dark py-2 text-center fw-bold shadow-sm position-relative z-index-3" style="font-size: 0.95rem;">
        <i class="bi bi-megaphone-fill me-2"></i> Pendaftaran Peserta Didik Baru (PPDB) SD Negeri Kroyolor Telah Dibuka! <a href="{{ url('/kontak') }}" class="text-dark text-decoration-underline ms-2">Daftar Sekarang</a>
    </div>

    <!-- Hero Section -->
    <section class="hero-section text-center text-md-start d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="hero-content">
                        <h1 class="hero-title display-1 fw-800 mb-3 text-white">Membangun <br>Masa Depan.</h1>
                        <div class="hero-line mb-4"></div>
                        <p class="hero-subtitle lead mb-5 text-white fs-4 opacity-75">SD Negeri Kroyolor: Unggul, Berkarakter, Berprestasi.</p>
                        <div class="d-flex flex-wrap gap-3">
                            <a href="#sambutan" class="btn btn-primary btn-lg rounded-0 px-5 py-3 fw-bold shadow-lg">Jelajahi Sekarang</a>
                            <a href="/profil/identitas" class="btn btn-outline-light btn-lg rounded-0 px-5 py-3 fw-bold">Profil Sekolah</a>
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

            <div class="row g-4 justify-content-center text-center">
                <!-- Col 1: Mengapa -->
                <div class="col-lg-4 col-md-6">
                    <div class="info-card-alt">
                        <div class="info-icon-large mx-auto mb-4">
                            <i class="bi bi-question-circle"></i>
                        </div>
                        <h4 class="fw-bold mb-3 text-primary">Mengapa SDN Kroyolor</h4>
                        <p class="text-muted small px-3">SDN Kroyolor menjadi Sekolah Dasar terbaik yang telah terakreditasi Unggul dan berkomitmen mencetak generasi berprestasi.</p>
                    </div>
                </div>
                <!-- Col 2: Tentang -->
                <div class="col-lg-4 col-md-6">
                    <div class="info-card-alt">
                        <div class="info-icon-large mx-auto mb-4">
                            <i class="bi bi-building"></i>
                        </div>
                        <h4 class="fw-bold mb-3 text-primary">Tentang Sekolah</h4>
                        <p class="text-muted small px-3">Terdapat program unggulan dan kurikulum merdeka yang didukung oleh tenaga pendidik profesional dan fasilitas lengkap.</p>
                    </div>
                </div>
                <!-- Col 3: Belajar -->
                <div class="col-lg-4 col-md-6">
                    <div class="info-card-alt">
                        <div class="info-icon-large mx-auto mb-4">
                            <i class="bi bi-mortarboard"></i>
                        </div>
                        <h4 class="fw-bold mb-3 text-primary">Belajar di Kroyolor</h4>
                        <p class="text-muted small px-3">SDN Kroyolor memiliki layanan sistem akademik berbasis digital yang telah terintegrasi untuk mendukung pembelajaran modern.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistik Counter Fakta -->
    <section class="py-4 text-white" style="background-color: #a31c1e;">
        <div class="container py-3">
            <div class="text-center mb-4">
                <h3 class="fw-bold m-0 tracking-wider">Fakta SD Negeri Kroyolor</h3>
            </div>
            <div class="row text-center justify-content-center align-items-center">
                <div class="col-6 col-md-3 mb-4 mb-md-0 d-flex justify-content-center align-items-baseline gap-2">
                    <span class="display-3 fw-bold counter-value m-0" data-target="9">0</span>
                    <span class="fs-6">Guru</span>
                </div>
                <div class="col-6 col-md-3 mb-4 mb-md-0 d-flex justify-content-center align-items-baseline gap-2">
                    <span class="display-3 fw-bold counter-value m-0" data-target="142">0</span>
                    <span class="fs-6">Siswa</span>
                </div>
                <div class="col-6 col-md-3 mb-4 mb-md-0 d-flex justify-content-center align-items-baseline gap-2">
                    <span class="display-3 fw-bold counter-value m-0" data-target="50">0</span><span class="display-3 fw-bold m-0">+</span>
                    <span class="fs-6">Prestasi</span>
                </div>
                <div class="col-6 col-md-3 d-flex justify-content-center align-items-baseline gap-2">
                    <span class="display-3 fw-bold counter-value m-0" data-target="15">0</span>
                    <span class="fs-6">Fasilitas</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Sambutan Kepala Sekolah -->
    <section id="sambutan" class="py-5 bg-white overlap-section">
        <div class="container">
            <div class="card border-0 shadow-lg p-4 p-md-5 mt-4 position-relative z-index-2 rounded-3xl">
                <div class="row align-items-center">
                    <div class="col-md-3 text-center mb-4 mb-md-0">
                        <div class="avatar-lg mx-auto bg-primary-soft rounded-circle p-2" style="width: 150px; height: 150px;">
                            <img src="https://img.freepik.com/premium-vector/avatar-icon-vector-illustration-person-concept-profile-user-symbol_1013341-218.jpg" class="img-fluid rounded-circle shadow-sm" alt="Kepala Sekolah">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <h2 class="fw-bold mb-3">Sambutan Kepala Sekolah</h2>
                        <p class="fs-6 text-muted fst-italic mb-4" style="line-height: 1.8; text-align: justify;">
                            "Assalamu'alaikum Warahmatullahi Wabarakatuh. Selamat datang di website resmi SD Negeri Kroyolor. Puji syukur senantiasa kita panjatkan kehadirat Tuhan Yang Maha Esa atas segala limpahan rahmat-Nya. Kami hadir dengan komitmen teguh untuk mewujudkan generasi yang beriman, bertaqwa, dan memiliki budi pekerti yang santun dalam bertutur maupun berperilaku. Sebagai institusi pendidikan dasar, kami menyadari bahwa pondasi karakter anak bangsa dibentuk di sini. 
                            <br><br>
                            Oleh karena itu, kami tidak hanya mengedepankan pencapaian akademik yang berorientasi pada kemajuan ilmu pengetahuan (IPTEK), namun juga sangat mempedulikan pengembangan potensi non-akademik siswa. Melalui pelestarian kesenian lokal, khususnya keunggulan di bidang seni Karawitan serta olahraga, kami membekali siswa untuk tetap berpijak pada akar budaya bangsa seraya menumbuhkan rasa cinta tanah air. Di era keterbukaan informasi ini, hadirnya website profil sekolah menjadi wujud nyata dari dedikasi kami untuk memberikan transparansi dan kemudahan akses informasi bagi seluruh wali murid dan masyarakat luas. Mari bersama-sama bersinergi mendidik putra-putri kita menjadi generasi mandiri, peduli lingkungan, dan siap menyongsong masa depan gemilang. Wassalamu'alaikum Warahmatullahi Wabarakatuh."
                        </p>
                        <div class="d-flex align-items-center mt-4">
                            <div class="me-3">
                                <h5 class="fw-bold mb-1 text-dark">Imbuh Tri Purwani S.Pd.SD</h5>
                                <p class="text-primary small fw-bold mb-0 text-uppercase tracking-wider">Kepala Sekolah SD Negeri Kroyolor</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Berita Terbaru -->
    <section class="py-5 mt-4">
        <div class="container">
            <div class="d-flex justify-content-between align-items-end mb-5">
                <div>
                    <h5 class="text-primary fw-bold text-uppercase tracking-wider small mb-2">Update Terkini</h5>
                    <h2 class="display-6 fw-bold mb-0">Berita & Kegiatan</h2>
                </div>
                <a href="/berita" class="btn btn-link text-decoration-none fw-bold">Lihat Semua Berita <i class="bi bi-arrow-right ms-1"></i></a>
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
                            <a href="{{ url('/berita/'.$item->slug) }}" class="btn btn-outline-primary btn-sm rounded-pill px-4">Baca Selengkapnya</a>
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

    <!-- Fasilitas & Keunggulan -->
    <section class="py-5 bg-light overflow-hidden">
        <div class="container py-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <h5 class="text-primary fw-bold text-uppercase tracking-wider small mb-2">Mengapa Memilih Kami?</h5>
                    <h2 class="display-6 fw-bold mb-4">Keunggulan & Fasilitas SDN Kroyolor</h2>
                    <p class="text-muted fs-5 mb-5">Kami menyediakan berbagai fasilitas modern dan program unggulan untuk menunjang potensi setiap siswa.</p>
                    
                    <div class="d-flex gap-4 mb-4">
                        <div class="flex-shrink-0 bg-white shadow-sm rounded-4 p-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <i class="bi bi-laptop text-primary fs-3"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Laboratorium Komputer</h5>
                            <p class="text-muted small">Menunjang literasi digital siswa sejak dini dengan perangkat modern.</p>
                        </div>
                    </div>
                    
                    <div class="d-flex gap-4 mb-4">
                        <div class="flex-shrink-0 bg-white shadow-sm rounded-4 p-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <i class="bi bi-book text-success fs-3"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Perpustakaan Digital</h5>
                            <p class="text-muted small">Koleksi buku lengkap yang membantu menumbuhkan minat baca siswa.</p>
                        </div>
                    </div>

                    <div class="d-flex gap-4">
                        <div class="flex-shrink-0 bg-white shadow-sm rounded-4 p-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <i class="bi bi-trophy text-warning fs-3"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Ekstrakurikuler Juara</h5>
                            <p class="text-muted small">Berbagai pilihan kegiatan untuk mengasah bakat non-akademik.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 position-relative">
                    <div class="position-absolute bg-primary rounded-circle opacity-10" style="width: 400px; height: 400px; top: -50px; right: -50px; z-index: 1;"></div>
                    <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?q=80&w=1000&auto=format&fit=crop" class="img-fluid rounded-4 shadow-lg position-relative z-index-2" alt="Aktivitas Belajar">
                    <div class="position-absolute bottom-0 start-0 bg-white p-4 shadow-lg rounded-4 m-4 z-index-3 d-none d-md-block border-start border-primary border-4">
                        <div class="d-flex align-items-center gap-3">
                            <h3 class="fw-bold text-primary mb-0">98%</h3>
                            <p class="mb-0 text-muted small fw-bold">Kepuasan Orang Tua<br>Siswa SDN Kroyolor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Galeri & CTA -->
    <section class="py-5 text-center">
        <div class="container py-4">
            <h2 class="display-6 fw-bold mb-5">Lihat Aktivitas Kami</h2>
            <div class="row g-3 mb-5">
                <div class="col-6 col-md-3">
                    <img src="https://images.unsplash.com/photo-1544391682-171892cd29d4?q=80&w=400&auto=format&fit=crop" class="img-fluid rounded-4 shadow-sm h-100 object-fit-cover" alt="Gallery 1">
                </div>
                <div class="col-6 col-md-3">
                    <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?q=80&w=400&auto=format&fit=crop" class="img-fluid rounded-4 shadow-sm h-100 object-fit-cover" alt="Gallery 2">
                </div>
                <div class="col-6 col-md-3">
                    <img src="https://images.unsplash.com/photo-1627556704290-2b1f5853ff78?q=80&w=400&auto=format&fit=crop" class="img-fluid rounded-4 shadow-sm h-100 object-fit-cover" alt="Gallery 3">
                </div>
                <div class="col-6 col-md-3">
                    <img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?q=80&w=400&auto=format&fit=crop" class="img-fluid rounded-4 shadow-sm h-100 object-fit-cover" alt="Gallery 4">
                </div>
            </div>
        </div>
    </section>


    <style>
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.5)), 
                        url('{{ asset('images/hero.png') }}');
            background-size: cover;
            background-position: center;
            min-height: 90vh;
            position: relative;
        }
        .fw-800 { font-weight: 800; }
        .hero-title {
            letter-spacing: -2px;
            line-height: 0.9;
            text-transform: uppercase;
            font-family: 'Outfit', sans-serif;
            text-shadow: 0 10px 30px rgba(0,0,0,0.5);
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
