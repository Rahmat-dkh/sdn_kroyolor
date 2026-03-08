<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold text-primary fs-3" href="{{ url('/') }}">
            <i class="bi bi-mortarboard-fill me-2"></i>SDN KROYOLOR
        </a>
        <button class="navbar-toggler border-0 shadow-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger-icon">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ Request::is('profil*') ? 'active' : '' }}" href="#" id="navbarDropdownProfil" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Profil <i class="bi bi-chevron-down ms-1 small"></i>
                    </a>
                    <ul class="dropdown-menu border-0 shadow-lg mt-0" aria-labelledby="navbarDropdownProfil">
                        <li><a class="dropdown-item" href="{{ url('/profil/identitas') }}"><i class="bi bi-building me-2"></i>Identitas Sekolah</a></li>
                        <li><a class="dropdown-item" href="{{ url('/profil/sejarah') }}"><i class="bi bi-hourglass-split me-2"></i>Sejarah</a></li>
                        <li><a class="dropdown-item" href="{{ url('/profil/akreditasi') }}"><i class="bi bi-patch-check me-2"></i>Akreditasi</a></li>
                        <li><a class="dropdown-item" href="{{ url('/profil/sarana-prasarana') }}"><i class="bi bi-display me-2"></i>Sarana Prasarana</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('berita*') ? 'active' : '' }}" href="{{ url('/berita') }}">Berita</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ Request::is('direktori*') ? 'active' : '' }}" href="#" id="navbarDropdownDirektori" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Direktori <i class="bi bi-chevron-down ms-1 small"></i>
                    </a>
                    <ul class="dropdown-menu border-0 shadow-lg mt-0" aria-labelledby="navbarDropdownDirektori">
                        <li><a class="dropdown-item" href="{{ url('/direktori/guru-tendik') }}"><i class="bi bi-person-badge me-2"></i>Guru & Tendik</a></li>
                        <li><a class="dropdown-item" href="{{ url('/direktori/peserta-didik') }}"><i class="bi bi-people me-2"></i>Peserta Didik</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ Request::is('galeri*') ? 'active' : '' }}" href="#" id="navbarDropdownGaleri" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Galeri <i class="bi bi-chevron-down ms-1 small"></i>
                    </a>
                    <ul class="dropdown-menu border-0 shadow-lg mt-0" aria-labelledby="navbarDropdownGaleri">
                        <li><a class="dropdown-item" href="{{ url('/galeri/foto') }}"><i class="bi bi-images me-2"></i>Galeri Foto</a></li>
                        <li><a class="dropdown-item" href="{{ url('/galeri/video') }}"><i class="bi bi-play-btn me-2"></i>Galeri Video</a></li>
                    </ul>
                </li>
                <li class="nav-item ms-lg-2 btn-cta-wrapper">
                    <a href="{{ url('/kontak') }}" class="btn btn-cta rounded-pill px-4 py-2 mt-1 fw-bold">Kontak Kami</a>
                </li>
                @auth
                <li class="nav-item ms-lg-2">
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-dark rounded-3 px-4 py-2 mt-1 fw-bold">Admin Panel</a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
