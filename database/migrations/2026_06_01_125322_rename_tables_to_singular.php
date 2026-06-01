<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::rename('users', 'user');
        Schema::rename('beritas', 'berita');
        Schema::rename('galeris', 'galeri');
        Schema::rename('settings', 'setting');
        Schema::rename('kontaks', 'kontak');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::rename('user', 'users');
        Schema::rename('berita', 'beritas');
        Schema::rename('galeri', 'galeris');
        Schema::rename('setting', 'settings');
        Schema::rename('kontak', 'kontaks');
    }
};
