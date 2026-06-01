<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ url('/') }}">
            <i class="bi bi-mortarboard-fill me-2"></i>SDN KROYOLOR
        </a>
        <button class="navbar-toggler border-0 shadow-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDark" aria-controls="navbarNavDark" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger-icon">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDark">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a></li>
                <!-- copy other menu items from the original navbar -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ Request::is('profil*') ? 'active' : '' }}" href="#" id="navbarDropdownProfilDark" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profil <i class="bi bi-chevron-down ms-1 small"></i></a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownProfilDark">
                        <li><a class="dropdown-item" href="{{ url('/profil/identitas') }}"><i class="bi bi-building me-2"></i>Identitas Sekolah</a></li>
                        <li><a class="dropdown-item" href="{{ url('/profil/sejarah') }}"><i class="bi bi-hourglass-split me-2"></i>Sejarah</a></li>
                        <li><a class="dropdown-item" href="{{ url('/profil/akreditasi') }}"><i class="bi bi-patch-check me-2"></i>Akreditasi</a></li>
                        <li><a class="dropdown-item" href="{{ url('/profil/sarana-prasarana') }}"><i class="bi bi-display me-2"></i>Sarana Prasarana</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link {{ Request::is('berita*') ? 'active' : '' }}" href="{{ url('/berita') }}">Berita</a></li>
                <!-- add remaining items similarly -->
                @auth
                <li class="nav-item"><a class="nav-link" href="{{ route('admin.dashboard') }}">Admin Panel</a></li>
                @endauth
                <li class="nav-item"><a class="btn btn-cta rounded-pill ms-3" href="{{ url('/kontak') }}">Kontak Kami</a></li>
            </ul>
        </div>
    </div>
</nav>
