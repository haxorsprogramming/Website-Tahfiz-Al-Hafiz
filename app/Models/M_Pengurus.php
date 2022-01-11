<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_Pengurus extends Model
{
    protected $table = "tbl_pengurus";

    protected $fillable = [
        'id_pengurus',
        'nama',
        'jk',
        'tanggal_lahir',
        'tempat_lahir',
        'alamat',
        'nomor_hp',
        'email',
        'jabatan',
        'status_ortu'
    ];

}
