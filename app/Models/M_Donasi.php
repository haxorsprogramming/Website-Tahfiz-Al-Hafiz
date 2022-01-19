<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_Donasi extends Model
{
    protected $table = "tbl_donasi";

    protected $fillable = [
        'token',
        'nama_donatur',
        'detail',
        'tipe',
        'tanggal_donasi',
        'nominal',
        'active'
    ];
}
