<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function userFK()
    {
        return $this->belongsTo(User::class,'id_user','id');
    }
}
