<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Armada extends Model
{
    use HasFactory;

    protected $table = 'armadas';

    protected $fillable = [
        'nopol',
        'alias',
        'norangka',
        'nomesin',
        'merk',
        'type',
        'jenis',
        'model',
        'tahunpembuatan',
        'berlaku',
    ];
}
