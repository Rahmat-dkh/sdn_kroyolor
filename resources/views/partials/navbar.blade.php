<header class="shadow-sm" style="z-index: 1030;">
    <div class="top-bar d-none d-lg-block py-1 text-white" style="background-color: #00251f !important;">
        <div class="container">
            <div class="d-flex justify-content-between small fw-medium">
                <div>

                    <span><i class="bi bi-envelope-fill me-2 text-primary"></i> sdnegerikroyolor@yahoo.com</span>
                </div>
                <div>
                    <span><i class="bi bi-geo-alt-fill me-2 text-primary"></i> Kroyolor, Desa Kroyo Lor, Kec. Kemiri, Purworejo</span>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg bg-white py-2 transition-all m-0" id="mainNavbar">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
            <img src="{{ asset('images/logo-sekolah.png') }}" alt="Logo SDN Kroyolor" width="50" height="50" class="me-3" style="object-fit: contain;">
            <div class="brand-text">
                <span class="d-block fw-bold fs-5 fs-md-4 text-primary line-height-1">SD NEGERI KROYOLOR</span>
            </div>
        </a>

        <div class="d-lg-none">
            <button class="navbar-toggler border-0 shadow-none p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list fs-1 text-dark"></i>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-lg-center align-items-start w-100-mobile mt-lg-0 mt-2">
                <li class="nav-item w-100-mobile">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item dropdown custom-dropdown w-100-mobile">
                    <a class="nav-link dropdown-toggle d-flex justify-content-between align-items-center {{ Request::is('profil*') ? 'active' : '' }}" href="#" id="dropProfil" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Profil <i class="bi bi-chevron-down ms-1 icon-chevron"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow-lg border-0 animate slideIn" aria-labelledby="dropProfil">
                        <li><a class="dropdown-item" href="{{ url('/profil/identitas') }}">Identitas Sekolah</a></li>
                        <li><a class="dropdown-item" href="{{ url('/profil/sejarah') }}">Sejarah</a></li>
                        <li><a class="dropdown-item" href="{{ url('/profil/akreditasi') }}">Akreditasi</a></li>
                        <li><a class="dropdown-item" href="{{ url('/profil/sarana-prasarana') }}">Sarana Prasarana</a></li>
                    </ul>
                </li>
                <li class="nav-item w-100-mobile">
                    <a class="nav-link {{ Request::is('berita*') ? 'active' : '' }}" href="{{ url('/berita') }}">Berita</a>
                </li>
                <li class="nav-item dropdown custom-dropdown w-100-mobile">
                    <a class="nav-link dropdown-toggle d-flex justify-content-between align-items-center {{ Request::is('direktori*') ? 'active' : '' }}" href="#" id="dropDir" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Direktori <i class="bi bi-chevron-down ms-1 icon-chevron"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow-lg border-0 animate slideIn" aria-labelledby="dropDir">
                        <li><a class="dropdown-item" href="{{ url('/direktori/guru-tendik') }}">Guru & Staff</a></li>
                        <li><a class="dropdown-item" href="{{ url('/direktori/dokumentasi') }}">Dokumentasi Siswa</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown custom-dropdown w-100-mobile">
                    <a class="nav-link dropdown-toggle d-flex justify-content-between align-items-center {{ Request::is('galeri*') ? 'active' : '' }}" href="#" id="dropGal" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Galeri <i class="bi bi-chevron-down ms-1 icon-chevron"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow-lg border-0 animate slideIn" aria-labelledby="dropGal">
                        <li><a class="dropdown-item" href="{{ url('/galeri/foto') }}">Galeri Foto</a></li>
                        <li><a class="dropdown-item" href="{{ url('/galeri/video') }}">Galeri Video</a></li>
                    </ul>
                </li>
                <li class="nav-item ms-lg-3 w-100-mobile mt-3 mt-lg-0">
                    <a href="{{ url('/kontak') }}" class="btn btn-cta rounded-3 px-4 py-2 fw-bold shadow-sm w-100 text-center text-lg-start d-block">Kontak Kami</a>
                </li>
                @auth
                <li class="nav-item ms-lg-2 w-100-mobile mt-2 mt-lg-0">
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-dark btn-sm rounded-3 px-3 py-2 w-100 text-center text-lg-start d-block">Admin</a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
</header>

<style>
    .transition-all { transition: all 0.3s ease-in-out; }
    .brand-logo-circle {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.3rem;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    .line-height-1 { line-height: 1.1; }
    
    .nav-link {
        font-weight: 600;
        color: #444 !important;
        padding: 0.5rem 1rem !important;
        transition: all 0.3s;
    }
    .nav-link.active {
        color: var(--bs-primary) !important;
    }
    
    /* Remove default Bootstrap triangle (caret) */
    .dropdown-toggle::after {
        display: none !important;
    }
    
    /* Hover and Arrow Rotation Logic */
    @media (min-width: 992px) {
        .custom-dropdown:hover > .dropdown-menu {
            display: block;
            margin-top: 0;
        }
        .custom-dropdown:hover .icon-chevron {
            transform: rotate(180deg);
        }
    }
    
    /* Always show chevron on mobile when open */
    .custom-dropdown.show .icon-chevron {
        transform: rotate(180deg);
    }

    .icon-chevron {
        display: inline-block;
        transition: transform 0.3s ease;
    }

    /* Dropdown Styles */
    .dropdown-menu {
        border-radius: 12px;
        padding: 10px;
        margin-top: 0;
    }
    .dropdown-item {
        padding: 0.7rem 1rem;
        border-radius: 8px;
        font-weight: 500;
        transition: all 0.2s;
    }
    .dropdown-item:hover {
        background-color: var(--bs-primary);
        color: #fff;
    }

    .animate { animation-duration: 0.3s; animation-fill-mode: both; }
    @keyframes slideIn {
        from { transform: translateY(10px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }
    .slideIn { animation-name: slideIn; }

    @media (max-width: 991.98px) {
        .navbar-collapse {
            background: #fff;
            padding: 1rem 0;
            margin-top: 0.5rem;
            border-top: 1px solid #eee;
        }
        .nav-link {
            padding: 1rem 1.5rem !important;
            border-bottom: 1px solid #f8f8f8;
            font-size: 1.1rem;
            width: 100%;
            text-align: left;
        }
        .dropdown-menu {
            background-color: #fcfcfc !important;
            padding-left: 1.5rem;
            border-radius: 0;
            box-shadow: none !important;
            border: none;
            width: 100%;
        }
        .w-100-mobile { width: 100% !important; }
        .brand-text span.fs-5 {
            font-size: 1.1rem !important;
        }
    }
</style>
