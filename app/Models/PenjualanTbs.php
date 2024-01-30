<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenjualanTbs extends Model
{
    use HasFactory;

    protected $table = 'penjualan_tbs';

    protected $fillable = [
        'periodebulan',
        'periodetahun',
        'rotasi',
        'tanggal',
        'id_armada',
        'id_supplier',
        'id_pks',
        'weighin',
        'weighout',
        'netgross',
        'penalty',
        'netweigh',
        'grade',
        'harga',
        'total',
        'pphpercentage',
        'pph',
        'fee',
        'netto',
        'status',
        'pelunasan',
        'tgllunas',
        'ketlunas',
        'keterangan',
    ];

    public function truk(){
        return $this->belongsTo(Armada::class, 'id_armada','id');
    }

    public function supplier(){
        return $this->belongsTo(Supplier::class, 'id_supplier','id');
    }

    public function pks(){
        return $this->belongsTo(Pks::class, 'id_pks','id');

    }
}
