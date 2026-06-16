<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table = 'galeri';
    protected $fillable = ['judul', 'jenis', 'file'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
