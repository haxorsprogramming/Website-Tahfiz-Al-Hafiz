<?php

namespace App\Http\Controllers;
use PDF;
use Illuminate\Http\Request;
use App\Models\M_Absensi;

use App\Models\M_Santri;

class C_Rekap_Absensi extends Controller
{
    public function rekapAbsensiPage()
    {
        return view('mainApp.rekapAbsensi.rekapAbsensiPage');
    }
    public function setRekapAbsensi(Request $request, $bulan, $tahun)
    {
        $dataSantri = M_Santri::all();
        $namaBulan = date("F", mktime(0, 0, 0, $bulan, 10));
        $dr = ['dataSantri' => $dataSantri, 'bulan' => $bulan, 'tahun' => $tahun, 'namaBulan' => $namaBulan];
        return view('mainApp.rekapAbsensi.rekapAbsensi', $dr);
    }
    public function cetakRekapAbsensi(Request $request, $id_santri, $bulan, $tahun)
    {
        $tHari = cal_days_in_month(CAL_GREGORIAN, $bulan, $tahun);
        $namaBulan = date("F", mktime(0, 0, 0, $bulan, 10));
        $dataSantri = M_Santri::where('id_santri', $id_santri) -> first();
        $dr = [
            'judul' => 'Rekap Absensi', 
            'tHari' => $tHari, 
            'dataSantri' => $dataSantri, 
            'bulan' => $bulan, 
            'tahun' => $tahun, 
            'namaBulan' => $namaBulan
        ];
        $pdf = PDF::loadview('mainApp.rekapAbsensi.cetakRekapAbsensi', $dr);
        $pdf -> setPaper('A4', 'portait');
        return $pdf -> stream();
    }
}
