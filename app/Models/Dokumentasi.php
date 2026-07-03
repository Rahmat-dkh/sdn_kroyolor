<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dokumentasi extends Model
{
    protected $table = 'dokumentasi';
    protected $fillable = ['judul', 'foto', 'deskripsi'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
