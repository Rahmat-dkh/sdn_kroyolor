<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Staff;
use App\Models\PesertaDidik;
use App\Models\Galeri;
use Illuminate\Support\Facades\Cache;

class PublicController extends Controller
{
    public function home() 
    { 
        $berita = Cache::remember('home_berita', 3600, function () {
            return Berita::latest()->take(3)->get();
        });
        return view('welcome', compact('berita')); 
    }
    
    public function profilIdentitas() { return view('profil.identitas'); }
    public function profilSejarah() { return view('profil.sejarah'); }
    public function profilAkreditasi() { return view('profil.akreditasi'); }
    public function profilSarana() { return view('profil.sarana'); }

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
            return Staff::orderBy('nama')->get();
        });
        return view('direktori.staff', compact('staffs')); 
    }

    public function direktoriSiswa() 
    { 
        $siswas = PesertaDidik::orderBy('nama')->paginate(20);
        return view('direktori.siswa', compact('siswas')); 
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
