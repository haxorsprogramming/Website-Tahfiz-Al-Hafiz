<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_Pendaftaran extends Model
{
    protected $table = "tbl_pendaftaran";

    protected $fillable = [
        'id_pendaftaran',
        'nama_santri',
        'email',
        'no_hp',
        'jk',
        'alamat',
        'harapan',
        'kelas',
        'status',
        'active',
        'tanggal_lahir',
        'tempat_lahir',
        'nama_ortu'
    ];

}
