<footer class="footer pt-5 pb-4 bg-primary text-white">
    <div class="container">
        <div class="row g-4 justify-content-between">
            <!-- School Brand -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-brand mb-3">
                    <a class="d-flex align-items-center text-decoration-none" href="{{ url('/') }}">
                        <div class="brand-icon-wrapper me-3">
                            <i class="bi bi-mortarboard-fill text-white fs-4"></i>
                        </div>
                        <div>
                            <h4 class="fw-bold text-white mb-0">SDN KROYOLOR</h4>
                            <p class="text-white-50 small mb-0">Mewujudkan Generasi Unggul & Berkarakter</p>
                        </div>
                    </a>
                </div>
                <div class="social-links d-flex gap-3">
                    <a href="#" class="social-icon" title="Instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="social-icon" title="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="social-icon" title="YouTube"><i class="bi bi-youtube"></i></a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6">
                <h6 class="fw-bold text-white mb-3 mt-2">Navigasi Cepat</h6>
                <ul class="list-unstyled footer-links text-white-50">
                    <li><a href="{{ url('/') }}" class="text-white-50">Beranda</a></li>
                    <li><a href="{{ url('/profil/identitas') }}" class="text-white-50">Profil Sekolah</a></li>
                    <li><a href="{{ url('/berita') }}" class="text-white-50">Berita Terbaru</a></li>
                    <li><a href="{{ url('/galeri/foto') }}" class="text-white-50">Galeri Kegiatan</a></li>
                    <li><a href="{{ url('/kontak') }}" class="text-white-50">Hubungi Kami</a></li>
                </ul>
            </div>

            <!-- Information -->
            <div class="col-lg-2 col-md-6">
                <h6 class="fw-bold text-white mb-3 mt-2">Pranala Luar</h6>
                <ul class="list-unstyled footer-links">
                    <li><a href="https://pusdatin.kemdikbud.go.id/" target="_blank" class="text-white-50">Kemdikbud</a></li>
                    <li><a href="https://dapo.kemdikbud.go.id/" target="_blank" class="text-white-50">Dapodik</a></li>
                    <li><a href="https://belajar.kemdikbud.go.id/" target="_blank" class="text-white-50">Rumah Belajar</a></li>
                    <li><a href="#" class="text-white-50">Portal Sekolah</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-5 col-md-6">
                <h6 class="fw-bold text-white mb-3 mt-2">Kontak Kami</h6>
                <div class="row g-3">
                    <div class="col-md-12">
                        <div class="d-flex mb-2">
                            <div class="contact-icon me-2 bg-white-10">
                                <i class="bi bi-geo-alt-fill text-white"></i>
                            </div>
                            <div>
                                <p class="mb-0 text-white fw-medium small">Jl. Kroyolor No. 123, Kec. Kemranjen, Kab. Banyumas, Jawa Tengah</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex mb-2">
                            <div class="contact-icon me-2 bg-white-10">
                                <i class="bi bi-telephone-fill text-white"></i>
                            </div>
                            <div>
                                <p class="mb-0 text-white fw-medium small">(021) 1234 5678</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex mb-2">
                            <div class="contact-icon me-2 bg-white-10">
                                <i class="bi bi-envelope-fill text-white"></i>
                            </div>
                            <div>
                                <p class="mb-0 text-white fw-medium small text-break">info@sdnkroyolor.sch.id</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-3 opacity-10">

        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                <p class="mb-0 text-white-50 small">&copy; {{ date('Y') }} <span class="text-white fw-semibold">SDN Kroyolor</span>. Hak Cipta Dilindungi Undang-Undang.</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <p class="mb-0 text-white-50 small italic">Dikelola oleh Tim IT SDN Kroyolor</p>
            </div>
        </div>
    </div>
</footer>
