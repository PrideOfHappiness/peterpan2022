<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailPeminjaman extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function peminjamanFK()
    {
        return $this->belongsTo(peminjaman::class,'id_peminjam','id');
    }

    public function barangFK()
    {
        return $this->belongsTo(dataBarang::class,'id_barang','id');
    }
}
