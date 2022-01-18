<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_Absensi extends Model
{

    protected $table = "tbl_absensi";

    protected $fillable = [
        'token_absensi',
        'id_santri',
        'tanggal',
        'bulan',
        'tahun',
        'active'
    ];
    
}
