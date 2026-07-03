<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Staff;
use App\Models\Dokumentasi;
use App\Models\Galeri;
use Illuminate\Support\Facades\Cache;

class PublicController extends Controller
{
    public function home() 
    { 
        $berita = Cache::remember('home_berita', 3600, function () {
            return Berita::latest()->take(3)->get();
        });
        $galeri = Cache::remember('home_galeri', 3600, function () {
            return Galeri::where('jenis', 'foto')->latest()->take(4)->get();
        });
        return view('welcome', compact('berita', 'galeri')); 
    }
    
    public function profilIdentitas() { return view('profil.identitas'); }
    public function profilSejarah() { return view('profil.sejarah'); }
    public function profilAkreditasi() { return view('profil.akreditasi'); }
    public function profilSarana() { 
        $saranas = \App\Models\SaranaPrasarana::all();
        return view('profil.sarana', compact('saranas')); 
    }

    public function beritaIndex() 
    { 
        $beritas = Cache::remember('berita_index', 3600, function () {
            return Berita::latest()->paginate(6);
        });
        return view('berita.index', compact('beritas')); 
    }

    public function beritaShow($slug) 
    { 
        $berita = Cache::remember("berita_show_{$slug}", 3600, function () use ($slug) {
            return Berita::where('slug', $slug)->firstOrFail();
        });
        return view('berita.show', compact('berita')); 
    }

    public function direktoriStaff() 
    { 
        $staffs = Cache::remember('staff_list', 3600, function () {
            return Staff::orderByRaw("
                CASE 
                    WHEN jabatan LIKE '%Kepala Sekolah%' THEN 1
                    WHEN jabatan LIKE '%Guru Kelas 1%' THEN 2
                    WHEN jabatan LIKE '%Guru Kelas 2%' THEN 3
                    WHEN jabatan LIKE '%Guru Kelas 3%' THEN 4
                    WHEN jabatan LIKE '%Guru Kelas 4%' THEN 5
                    WHEN jabatan LIKE '%Guru Kelas 5%' THEN 6
                    WHEN jabatan LIKE '%Guru Kelas 6%' THEN 7
                    WHEN kategori = 'guru' THEN 8
                    ELSE 9
                END ASC
            ")->orderBy('nama', 'asc')->get();
        });
        return view('direktori.staff', compact('staffs')); 
    }

    public function direktoriSiswa() 
    { 
        $dokumentasis = Dokumentasi::orderBy('judul')->paginate(20);
        return view('direktori.dokumentasi', compact('dokumentasis')); 
    }

    public function galeriFoto() 
    { 
        $fotos = Galeri::where('jenis', 'foto')->latest()->paginate(12);
        return view('galeri.foto', compact('fotos')); 
    }

    public function galeriVideo() 
    { 
        $videos = Galeri::where('jenis', 'video')->latest()->paginate(9);
        return view('galeri.video', compact('videos')); 
    }

    public function kontakIndex() { return view('kontak'); }
    public function kontakStore(Request $request) {
        // Handle contact form submission
        return back()->with('success', 'Pesan Anda telah terkirim!');
    }
}
