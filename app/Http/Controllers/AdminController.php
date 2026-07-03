<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Staff;
use App\Models\Dokumentasi;
use App\Models\Kontak;

class AdminController extends Controller
{
    public function dashboard()
    {
        $countBerita = Berita::count();
        $countStaff = Staff::count();
        $countSiswa = Dokumentasi::count();
        $countPesan = Kontak::count();
        
        return view('admin.dashboard', compact('countBerita', 'countStaff', 'countSiswa', 'countPesan'));
    }
}
