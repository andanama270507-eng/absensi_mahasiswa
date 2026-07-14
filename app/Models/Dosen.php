<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosens';

    protected $fillable = [
        'nama',
        'email',
        'no_telp',
        'mata_kuliah_id',
    ];

    public function mataKuliah()
    {
        return $this->belongsTo(MataKuliah::class, 'mata_kuliah_id');
    }

    public function jadwals()
    {
        return $this->hasMany(Jadwal::class, 'dosen_id');
    }
}
