<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosens';

    protected $fillable = [
        'nidn',
        'nama',
        'email',
        'no_telp',
    ];

    public function jadwals()
    {
        return $this->hasMany(Jadwal::class, 'dosen_id');
    }
}