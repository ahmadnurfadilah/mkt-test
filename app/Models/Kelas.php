<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    public $timestamps = false;

    protected $table = 'kelas';

    protected $fillable = [
        'nama',
    ];
}
