<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\M_Santri;
use App\Models\M_Absensi;

class C_Absensi extends Controller
{
    public function absensiPage()
    {
        $dataSantri = M_Santri::all();
        $dr = ['dataSantri' => $dataSantri];
        return view('mainApp.absensi.absensiPage', $dr);
    }
    public function prosesAbsensi(Request $request)
    {
        $tokenAbsensi = Str::uuid();
        $idSantri = $request -> idSantri;
        $day = date("d");
        $bulan = date("m");
        $tahun = date("Y");
        
        $dr = ['status' => 'sukses'];
        return \Response::json($dr);
    }
}
