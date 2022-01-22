<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Laporan_Keuangan extends Controller
{
    public function laporanKeuanganPage()
    {
        $bulan = date("m");
        $td = cal_days_in_month(CAL_GREGORIAN, $bulan, 2022); 
        $dataLaporan = array();
        for($x = 1; $x <= 12; $x++){
            $bulanNama = date("F", mktime(0, 0, 0, $x, 10));
            $nested = array();
            $nested['namaBulan'] = $bulanNama;
            $dataLaporan[] = $nested;
        }
        $dr = ['dataLaporan' => $dataLaporan];
        return view('mainApp.laporanKeuangan.laporanKeuanganPage', $dr);
    }
}
