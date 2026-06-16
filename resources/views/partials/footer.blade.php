<footer class="footer py-5 mt-auto" style="background-color: #00251f !important; color: #fff !important;">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="d-flex align-items-center mb-3">
                    <div class="footer-logo-circle me-3" style="width: 40px; height: 40px; background: var(--bs-primary); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <i class="bi bi-mortarboard-fill text-white"></i>
                    </div>
                    <h4 class="fw-bold mb-0">SD NEGERI KROYOLOR</h4>
                </div>
                <p class="text-white-50 small mb-4">Mewujudkan lingkungan pendidikan yang inovatif, berkarakter, dan berprestasi unggul di era digital. (NPSN: 20306457)</p>
                <div class="social-links d-flex gap-2">
                    <a href="#" class="btn btn-outline-light btn-sm rounded-circle" style="width: 35px; height: 35px;"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="btn btn-outline-light btn-sm rounded-circle" style="width: 35px; height: 35px;"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="btn btn-outline-light btn-sm rounded-circle" style="width: 35px; height: 35px;"><i class="bi bi-youtube"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <h6 class="fw-bold mb-3">Navigasi</h6>
                <ul class="list-unstyled small opacity-75">
                    <li class="mb-2"><a href="{{ url('/') }}" class="text-white text-decoration-none">Beranda</a></li>
                    <li class="mb-2"><a href="{{ url('/profil/identitas') }}" class="text-white text-decoration-none">Profil</a></li>
                    <li class="mb-2"><a href="{{ url('/berita') }}" class="text-white text-decoration-none">Berita</a></li>
                    <li class="mb-2"><a href="{{ url('/kontak') }}" class="text-white text-decoration-none">Kontak</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h6 class="fw-bold mb-3">Kontak Kami</h6>
                <ul class="list-unstyled small opacity-75">
                    <li class="mb-2"><i class="bi bi-geo-alt-fill me-2 text-primary"></i> Kroyolor, Desa Kroyo Lor, Kec. Kemiri, Purworejo</li>
                    <li class="mb-2"><i class="bi bi-telephone-fill me-2 text-primary"></i> (0275) 1234567</li>
                    <li class="mb-2"><i class="bi bi-envelope-fill me-2 text-primary"></i> sdnkroyolor@gmail.com</li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 text-lg-end">
                <h6 class="fw-bold mb-3">Lokasi Kami</h6>
                <div class="rounded overflow-hidden shadow-sm ratio ratio-16x9">
                    <iframe src="https://www.google.com/maps?q=SD+Negeri+Kroyolor+Kemiri+Purworejo&output=embed" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
        <hr class="my-4 opacity-10">
        <div class="text-center small opacity-50">
            <p class="mb-0">&copy; {{ date('Y') }} SDN Kroyolor. Hak Cipta Dilindungi.</p>
        </div>
    </div>
</footer>
