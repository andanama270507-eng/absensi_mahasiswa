<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    protected $table = 'mata_kuliahs';

    protected $fillable = [
        'nama_mata_kuliah',
        'sks',
    ];

    public function dosens()
    {
        return $this->hasMany(Dosen::class, 'mata_kuliah_id');
    }

    public function jadwals()
    {
        return $this->hasMany(Jadwal::class, 'mata_kuliah_id');
    }
}
