<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_Santri extends Model
{
    protected $table = "tbl_santri";

    protected $fillable = [
        'id_santri',
        'nama',
        'jk',
        'tanggal_lahir',
        'tempat_lahir',
        'alamat',
        'no_hp',
        'email',
        'active',
        'id_kafilah',
        'status_ortu'
    ];

    public function kafilahData()
    {
        return $this -> belongsTo(M_Kafilah::class, 'id_kafilah', 'id_kafilah');
    }

}
