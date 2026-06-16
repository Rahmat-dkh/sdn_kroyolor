<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staff';
    protected $fillable = ['nama', 'jabatan', 'kategori', 'foto'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
