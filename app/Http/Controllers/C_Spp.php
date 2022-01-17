<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\M_Santri;
use App\Models\M_Spp;

class C_Spp extends Controller
{
    public function pembayaranSppPage()
    {
        $dataSantri = M_Santri::all();
        $dr = ['dataSantri' => $dataSantri];
        return view('mainApp.spp.pembayaranSpp', $dr);
    }
    public function prosesPembayaranSpp(Request $request)
    {
        // {'idSantri':idSantri, 'tahun':tahun, 'bulan':bulan, 'total':total}
        $token = Str::uuid();
        $spp = new M_Spp();
        $spp -> token_pembayaran = $token;
        $spp -> id_santri = $request -> idSantri;
        $spp -> bulan = $request -> bulan;
        $spp -> tahun = $request -> tahun;
        $spp -> total = $request -> total; 
        $spp -> active = "1";
        $spp -> save();
        $dr = ['status' => 'sukses'];
        return \Response::json($dr);
    }
}
