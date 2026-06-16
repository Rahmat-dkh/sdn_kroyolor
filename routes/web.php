<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\ThemeController;
use App\Http\Controllers\Admin\PesertaDidikController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\KontakController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\SaranaPrasaranaController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', [PublicController::class, 'home'])->name('home');

Route::prefix('profil')->group(function () {
    Route::get('/identitas', [PublicController::class, 'profilIdentitas']);
    Route::get('/sejarah', [PublicController::class, 'profilSejarah']);
    Route::get('/akreditasi', [PublicController::class, 'profilAkreditasi']);
    Route::get('/sarana-prasarana', [PublicController::class, 'profilSarana']);
});

Route::get('/berita', [PublicController::class, 'beritaIndex']);
Route::get('/berita/{slug}', [PublicController::class, 'beritaShow']);

Route::prefix('direktori')->group(function () {
    Route::get('/guru-tendik', [PublicController::class, 'direktoriStaff']);
    Route::get('/peserta-didik', [PublicController::class, 'direktoriSiswa']);
});

Route::prefix('galeri')->group(function () {
    Route::get('/foto', [PublicController::class, 'galeriFoto']);
    Route::get('/video', [PublicController::class, 'galeriVideo']);
});

Route::get('/kontak', [PublicController::class, 'kontakIndex']);
Route::post('/kontak', [PublicController::class, 'kontakStore']);

// Admin Auth Routes
Route::get('/admin/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/admin/login', [AuthController::class, 'login']);
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('logout');

// Admin Dashboard Routes (Protected)
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    
    // Resource Management
    Route::resource('berita', BeritaController::class)->parameters(['berita' => 'berita']);
    Route::resource('staff', StaffController::class);
    Route::resource('peserta-didik', PesertaDidikController::class);
    Route::resource('galeri', GaleriController::class);
    Route::resource('sarana', SaranaPrasaranaController::class)->parameters(['sarana' => 'sarana']);
    
    // Kontak Management
    Route::get('kontak', [KontakController::class, 'index'])->name('admin.kontak.index');
    Route::delete('kontak/{kontak}', [KontakController::class, 'destroy'])->name('admin.kontak.destroy');
    // Theme Management
    Route::get('theme', [ThemeController::class, 'index'])->name('admin.theme.index');
    Route::post('theme', [ThemeController::class, 'update'])->name('admin.theme.update');
});
