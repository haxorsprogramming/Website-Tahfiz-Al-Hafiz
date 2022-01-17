<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_Spp extends Model
{
    protected $table = "tbl_spp";

    protected $fillable = [
        'token_pembayaran',
        'id_santri',
        'bulan',
        'total',
        'active'
    ];

    public function santriData()
    {
        return $this -> belongsTo(M_Santri::class, 'id_santri', 'id_santri');
    }

}
