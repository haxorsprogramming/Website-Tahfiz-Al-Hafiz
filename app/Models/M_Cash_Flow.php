<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\M_Donasi;
use App\Models\M_Spp;

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
                return "Pembelian ";
            case "PEMBAYARAN_SPP":
                $d = M_Spp::where('token_pembayaran', $token) -> first();
                return "Pembayaran spp santri ". $d -> santriData -> nama;
            case "PEMBAYARAN_GAJI";
                return "Pembayaran gaji";
        }
    }

}
