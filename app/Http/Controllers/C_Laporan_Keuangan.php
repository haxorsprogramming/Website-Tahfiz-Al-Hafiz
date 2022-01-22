<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\M_Cash_Flow;

class C_Laporan_Keuangan extends Controller
{
    
    public function __construct()
    {
        $this -> bulan = date("m");
        $this -> tahun = date("Y");
        $this -> td = cal_days_in_month(CAL_GREGORIAN, $this -> bulan, $this -> tahun); 
    }

    public function laporanKeuanganPage(Request $request, $tahun)
    {
        $dataLaporan = array();
        for($x = 1; $x <= 12; $x++){
            $nested = array();
            $bulanNama = date("F", mktime(0, 0, 0, $x, 10));
            $dataFlowMasuk = M_Cash_Flow::where('flow', 'MASUK') -> whereRaw('MONTH(created_at) = '. $x) -> whereRaw('YEAR(created_at) = '. $tahun) -> sum('total');
            $dataFlowKeluar = M_Cash_Flow::where('flow', 'KELUAR') -> whereRaw('MONTH(created_at) = '. $x) -> whereRaw('YEAR(created_at) = '. $tahun) -> sum('total');
            $nested['namaBulan'] = $bulanNama;
            $nested['flowMasuk'] = $dataFlowMasuk;
            $nested['flowKeluar'] = $dataFlowKeluar;
            $nested['selisih'] = $dataFlowMasuk - $dataFlowKeluar;
            $dataLaporan[] = $nested;
        }
        $tahunList = array('2022', '2023', '2024', '2025', '2026', '2027');
        $dr = ['dataLaporan' => $dataLaporan, 'tahun' => $tahun, 'tahunList' => $tahunList];
        return view('mainApp.laporanKeuangan.laporanKeuanganPage', $dr);
    }
}
