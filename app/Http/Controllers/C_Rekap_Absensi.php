<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Rekap_Absensi extends Controller
{
    public function rekapAbsensiPage()
    {
        return view('mainApp.rekapAbsensi.rekapAbsensiPage');
    }
    public function setRekapAbsensi(Request $request, $bulan, $tahun)
    {
        $dr = ['status' => 'success'];
        return \Response::json($dr);
    }
}
