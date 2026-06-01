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
        Schema::table('peserta_didiks', function (Blueprint $table) {
            $table->dropColumn(['nama', 'kelas']);
            $table->string('judul')->after('id');
            $table->text('deskripsi')->nullable()->after('foto');
        });

        Schema::rename('peserta_didiks', 'peserta_didik');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::rename('peserta_didik', 'peserta_didiks');

        Schema::table('peserta_didiks', function (Blueprint $table) {
            $table->dropColumn(['judul', 'deskripsi']);
            $table->string('nama')->after('id');
            $table->string('kelas')->after('nama');
        });
    }
};
