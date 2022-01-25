<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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

    public function pengurusData()
    {
        return $this -> belongsTo(M_Pengurus::class, 'id_pengurus', 'id_pengurus');
    }

    public function periodeGaji($tanggal)
    {
        return Carbon::parse($tanggal) -> format('m-Y');
    }

}
