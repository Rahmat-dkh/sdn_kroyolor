# Website Resmi SD Negeri Kroyolor

Selamat datang di repositori website resmi SD Negeri Kroyolor. Website ini dibangun menggunakan framework Laravel dan dirancang untuk memberikan informasi terkait profil sekolah, berita, pengumuman, dan sistem pendaftaran peserta didik baru (PPDB).

## Fitur Utama

*   **Profil Sekolah**: Menampilkan informasi lengkap mengenai sejarah, visi, misi, dan struktur organisasi sekolah.
*   **Berita & Pengumuman**: Sistem manajemen konten (CMS) untuk mempublikasikan berita dan pengumuman terbaru kepada siswa dan wali murid.
*   **Galeri Kegiatan**: Dokumentasi visual dari berbagai kegiatan akademik maupun non-akademik di SD Negeri Kroyolor.
*   **Informasi PPDB**: Halaman khusus yang menyajikan alur, persyaratan, dan pengumuman terkait Penerimaan Peserta Didik Baru.
*   **Panel Admin**: Area pengelolaan konten untuk admin sekolah (data berita, pendaftar, fasilitas, dll).

## Teknologi yang Digunakan

*   **Framework**: Laravel
*   **Frontend**: Blade, HTML, CSS, JavaScript
*   **Database**: MySQL
*   **Bahasa Pemrograman**: PHP

## Persyaratan Sistem

Pastikan lingkungan pengembangan Anda telah memenuhi persyaratan berikut sebelum menjalankan aplikasi:

*   PHP >= 8.1
*   Composer
*   Node.js & NPM
*   Database Server (MySQL / MariaDB)

## Panduan Instalasi (Development)

Berikut adalah langkah-langkah untuk menjalankan website ini secara lokal:

1.  **Clone Repositori**
    ```bash
    git clone https://github.com/Rahmat-dkh/sdn_kroyolor.git
    cd sdn_kroyolor
    ```

2.  **Instalasi Dependensi PHP**
    ```bash
    composer install
    ```

3.  **Instalasi Dependensi NPM**
    ```bash
    npm install
    npm run build
    ```

4.  **Konfigurasi Environment**
    Salin file `.env.example` menjadi `.env` dan sesuaikan konfigurasi database Anda.
    ```bash
    cp .env.example .env
    ```

5.  **Generate Application Key**
    ```bash
    php artisan key:generate
    ```

6.  **Migrasi Database**
    Jalankan perintah berikut untuk membuat struktur tabel di database Anda:
    ```bash
    php artisan migrate
    ```

7.  **Jalankan Development Server**
    ```bash
    php artisan serve
    ```
    Aplikasi sekarang dapat diakses melalui browser pada `http://localhost:8000`.

## Lisensi

Hak cipta dilindungi untuk SD Negeri Kroyolor.
