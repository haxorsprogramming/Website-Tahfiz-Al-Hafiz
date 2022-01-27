<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Models\M_Santri;
use App\Models\M_Kafilah;

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
    
    public function santriData()
    {
        return $this -> belongsTo(M_Santri::class, 'id_santri', 'id_santri');
    }

    public function getKafilahData($idSantri)
    {
        $dataSantri = M_Santri::where('id_santri', $idSantri) -> first();
        $dataKafilah = M_Kafilah::where('id_kafilah', $dataSantri -> id_kafilah) -> first();
        return $dataKafilah -> nama;
    }

    public function getWaktuAbsensi($waktu)
    {
        return Carbon::parse($waktu) -> format('H-i-S');
    }

}
