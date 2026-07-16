<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswas';

    protected $fillable = [
        'kelas_id',
        'nim',
        'nama',
        'email',
        'no_telp',
        'jurusan',
        'semester',
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    public function absensi()
    {
        return $this->hasMany(Absensi::class, 'mahasiswa_id');
    }
}