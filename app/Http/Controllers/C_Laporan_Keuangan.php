<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Http\Controllers\C_Helper;
use App\Models\M_Cash_Flow;

class C_Laporan_Keuangan extends Controller
{
    protected $helperCtr;

    public function __construct(C_Helper $helperCtr)
    {
        $this -> helperCtr = $helperCtr;
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
            $dataFlowMasuk = $this -> helperCtr -> getFlowBulan("MASUK", $x, $tahun);
            $dataFlowKeluar = $this -> helperCtr -> getFlowBulan("KELUAR", $x, $tahun);
            $nested['namaBulan'] = $bulanNama;
            $nested['bulan'] = $x;
            $nested['flowMasuk'] = $dataFlowMasuk;
            $nested['flowKeluar'] = $dataFlowKeluar;
            $nested['selisih'] = $dataFlowMasuk - $dataFlowKeluar;
            $dataLaporan[] = $nested;
        }
        $tahunList = array('2022', '2023', '2024', '2025', '2026', '2027');
        $dr = ['dataLaporan' => $dataLaporan, 'tahun' => $tahun, 'tahunList' => $tahunList];
        return view('mainApp.laporanKeuangan.laporanKeuanganPage', $dr);
    }
    public function cetakLaporanBulanan(Request $request, $bulan, $tahun)
    {
        $dataFlow = M_Cash_Flow::whereRaw('MONTH(created_at) = '.$bulan) -> whereRaw('YEAR(created_at) = '. $tahun) -> get();
        $pembukuan['pemasukan'] = $this -> helperCtr -> getFlowBulan("MASUK", $bulan, $tahun);
        $pembukuan['pengeluaran'] = $this -> helperCtr -> getFlowBulan("KELUAR", $bulan, $tahun);
        $pembukuan['selisih'] = $this -> helperCtr -> getSelisihBulan($bulan, $tahun);
        $dr = ['judul' => 'Laporan Keuangan', 'dataFlow' => $dataFlow, 'pembukuan' => $pembukuan];
        $pdf = PDF::loadview('mainApp.laporanKeuangan.cetakLaporanBulanan', $dr);
        $pdf -> setPaper('A4', 'portait');
        return $pdf -> stream();
    }
}
