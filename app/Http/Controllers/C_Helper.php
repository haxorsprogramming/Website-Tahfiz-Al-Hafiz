<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\M_Cash_Flow;
use App\Models\M_Setting;

class C_Helper extends Controller
{
    public function createCashFlow($idEvent, $flow, $type, $total)
    {
        $tokenFlow = Str::uuid();
        $cf = new M_Cash_Flow();
        $cf->token_flow = $tokenFlow;
        $cf->flow = $flow;
        $cf->id_event = $idEvent;
        $cf->type = $type;
        $cf->total = $total;
        $cf->active = "1";
        $cf->save();
    }

    public function getSetting()
    {
        $ds = new CH_Data_Setting();
        $ds->namaTahfiz = $this->loadDataSetting("nama");
        $ds->namaBank = $this->loadDataSetting("bank");
        $ds->alamat = $this->loadDataSetting("alamat");
        $ds->kontak = $this->loadDataSetting("hp");
        $ds->email = $this->loadDataSetting("email");
        $ds->motto = $this->loadDataSetting("motto");
        return $ds;
    }

    public function deleteCashFlow($idEvent)
    {
        M_Cash_Flow::where('id_event', $idEvent)->delete();
    }
    public function getFlowBulan($flow, $bulan, $tahun)
    {
        return M_Cash_Flow::where('flow', $flow)->whereRaw('MONTH(created_at) = '. $bulan)->whereRaw('YEAR(created_at) = '. $tahun)->sum('total');
    }
    public function getSelisihBulan($bulan, $tahun)
    {
        $pemasukan = $this->getFlowBulan("MASUK", $bulan, $tahun);
        $pengeluaran = $this->getFlowBulan("KELUAR", $bulan, $tahun);
        return $pemasukan - $pengeluaran;
    }
    public function loadDataSetting($namaSetting)
    {
        $qDataSetting = M_Setting::where('nama_setting', $namaSetting)->first();
        return $qDataSetting -> value;
    }
}

