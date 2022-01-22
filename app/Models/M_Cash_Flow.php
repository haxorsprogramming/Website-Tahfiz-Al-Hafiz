<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

use App\Models\M_Donasi;
use App\Models\M_Spp;
use App\Models\M_Pengeluaran;
use App\Models\M_Penggajian;

class M_Cash_Flow extends Model
{

    protected $table = "tbl_cash_flow";

    protected $fillable = [
        'token_flow',
        'flow',
        'id_event',
        'type',
        'total',
        'active'
    ];

    public function setDetail($type, $token)
    {
        switch($type){
            case "DONASI":
                $d = M_Donasi::where('token', $token) -> first();
                return "Donasi dari ". $d -> nama_donatur;
            case "PENGELUARAN":
                $d = M_Pengeluaran::where('token', $token) -> first();
                return "Pembelian " . $d -> nama_pengeluaran;
            case "PEMBAYARAN_SPP":
                $d = M_Spp::where('token_pembayaran', $token) -> first();
                return "Pembayaran spp santri ". $d -> santriData -> nama;
            case "PEMBAYARAN_GAJI":
                $d = M_Penggajian::where('token_penggajian', $token) -> first();
                return "Pembayaran gaji " . $d -> pengurusData -> nama;
        }
    }

    public function setTanggal($tanggal)
    {
        return Carbon::parse($tanggal) -> format('d-m-Y');
    }

}
