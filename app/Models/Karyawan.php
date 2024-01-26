<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $table = 'karyawans';

    protected $fillable = [
        'nik',
        'nama',
        'alamat',
        'jk',
        'status',
        'jabatan',
        'tglmasuk',
        'tglkeluar',
    ];
}
