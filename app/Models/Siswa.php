<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    public $timestamps = false;

    protected $table = 'siswa';

    protected $fillable = [
        'id_kelas',
        'nis',
        'nama',
        'kota',
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas', 'id');
    }
}
