<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_Penggajian extends Model
{
    protected $table = "tbl_penggajian";

    protected $fillable = [
        'token_penggajian',
        'id_pengurus',
        'tanggal_pembayaran',
        'gaji_pokok',
        'tunjangan',
        'cap_tunjangan',
        'potongan',
        'cap_potongan',
        'total_gaji',
        'active'
    ];
}
