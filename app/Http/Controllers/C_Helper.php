<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\M_Cash_Flow;

class C_Helper extends Controller
{
    public function createCashFlow($idEvent, $flow, $type, $total)
    {
        $tokenFlow = Str::uuid();
        $cf = new M_Cash_Flow();
        $cf -> token_flow = $tokenFlow;
        $cf -> flow = $flow;
        $cf -> id_event = $idEvent;
        $cf -> type = $type;
        $cf -> total = $total;
        $cf -> active = "1";
        $cf -> save();
    }

//    public function getSetting()
//    {
//        $ds = file_get_contents("ladun/file/settings.json");
//        $ds = json_decode($ds);
//        return $ds[0];
//    }

    public function deleteCashFlow($idEvent)
    {
        M_Cash_Flow::where('id_event', $idEvent) -> delete();
    }
    public function getFlowBulan($flow, $bulan, $tahun)
    {
        return M_Cash_Flow::where('flow', $flow) -> whereRaw('MONTH(created_at) = '. $bulan) -> whereRaw('YEAR(created_at) = '. $tahun) -> sum('total');
    }
    public function getSelisihBulan($bulan, $tahun)
    {
        $pemasukan = $this -> getFlowBulan("MASUK", $bulan, $tahun);
        $pengeluaran = $this -> getFlowBulan("KELUAR", $bulan, $tahun);
        return $pemasukan - $pengeluaran;
    }
}
