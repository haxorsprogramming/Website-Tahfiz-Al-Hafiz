<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class M_Pengeluaran extends Model
{
    protected $table = "tbl_pengeluaran";

    protected $fillable = [
        'token',
        'nama_pengeluaran',
        'detail',
        'kategori',
        'total',
        'active'
    ];

    public function tanggalPengeluaran($tanggal)
    {
        return Carbon::parse($tanggal) -> format('d-m-Y');
    }
}
