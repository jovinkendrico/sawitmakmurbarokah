<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pks extends Model
{
    use HasFactory;

    protected $table = 'pks';

    protected $fillable = [
        'nama',
        'alias',
        'alamatpks',
        'alamatkantor',
        'notelp',
        'email'
    ];
}
