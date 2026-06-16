<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SaranaPrasarana extends Model
{
    protected $table = 'sarana_prasarana';
    protected $fillable = ['nama', 'deskripsi', 'foto'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
