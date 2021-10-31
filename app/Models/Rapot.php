<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rapot extends Model
{
    public $timestamps = false;

    protected $table = 'rapot';

    protected $fillable = [
        'id_siswa',
        'nilai',
        'huruf',
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'id_siswa', 'id');
    }
}
