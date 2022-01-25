<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

use App\Models\M_Kafilah;

class M_Spp extends Model
{
    protected $table = "tbl_spp";

    protected $fillable = [
        'token_pembayaran',
        'id_santri',
        'bulan',
        'total',
        'id_pengurus',
        'active'
    ];

    public function santriData()
    {
        return $this -> belongsTo(M_Santri::class, 'id_santri', 'id_santri');
    }

    public function tanggalPembayaran($tanggal)
    {
        return Carbon::parse($tanggal) -> format('d-m-Y');
    }

    public function pengurusData()
    {
        return $this -> belongsTo(M_Pengurus::class, 'id_pengurus', 'id_pengurus');
    }

    public function kafilahData($idKafilah)
    {
        return M_Kafilah::where('id_kafilah', $idKafilah) -> first();
    }

}
