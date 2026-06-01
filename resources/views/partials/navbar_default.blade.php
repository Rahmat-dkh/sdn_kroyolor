<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold text-primary fs-3" href="{{ url('/') }}">
            <i class="bi bi-mortarboard-fill me-2"></i>SDN Kroyolor
        </a>
        <button class="navbar-toggler border-0 shadow-none collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger-icon">
                <span></span><span></span><span></span>
            </div>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/profil') }}">Profil</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/berita') }}">Berita</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/galeri') }}">Galeri</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/kontak') }}">Kontak Kami</a></li>
                @auth
                <li class="nav-item"><a class="nav-link" href="{{ route('admin.dashboard') }}">Admin Panel</a></li>
                @endauth
                <li class="nav-item"><a class="btn btn-cta rounded-pill px-4 py-2" href="{{ url('/kontak') }}">Kontak Kami</a></li>
            </ul>
        </div>
    </div>
</nav>
