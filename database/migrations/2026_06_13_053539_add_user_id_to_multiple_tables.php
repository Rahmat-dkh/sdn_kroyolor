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
        Schema::table('berita', function (Blueprint $table) {
            $table->foreignId('user_id')->nullable()->constrained('user')->cascadeOnDelete();
        });
        Schema::table('galeri', function (Blueprint $table) {
            $table->foreignId('user_id')->nullable()->constrained('user')->cascadeOnDelete();
        });
        Schema::table('staff', function (Blueprint $table) {
            $table->foreignId('user_id')->nullable()->constrained('user')->cascadeOnDelete();
        });
        Schema::table('peserta_didik', function (Blueprint $table) {
            $table->foreignId('user_id')->nullable()->constrained('user')->cascadeOnDelete();
        });
        Schema::table('sarana_prasarana', function (Blueprint $table) {
            $table->foreignId('user_id')->nullable()->constrained('user')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('berita', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
        Schema::table('galeri', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
        Schema::table('staff', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
        Schema::table('peserta_didik', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
        Schema::table('sarana_prasarana', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
};
