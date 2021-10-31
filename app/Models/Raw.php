<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Raw extends Model
{
    public $timestamps = false;

    protected $table = 'raw';

    protected $fillable = [
        'nis',
        'nilai',
    ];
}
