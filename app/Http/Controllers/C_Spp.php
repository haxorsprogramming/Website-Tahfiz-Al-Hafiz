<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

use App\Models\M_Santri;
use App\Models\M_Spp;
use App\Models\M_Cash_Flow;

class C_Spp extends Controller
{
    public function pembayaranSppPage()
    {
        $dataSpp = M_Spp::all();
        $dataSantri = M_Santri::all();
        $dr = ['dataSantri' => $dataSantri, 'dataSpp' => $dataSpp];
        return view('mainApp.spp.pembayaranSpp', $dr);
    }
    public function prosesPembayaranSpp(Request $request)
    {
        // {'idSantri':idSantri, 'tahun':tahun, 'bulan':bulan, 'total':total}
        // save pembayaran 
        $token = Str::uuid();
        $spp = new M_Spp();
        $spp -> token_pembayaran = $token;
        $spp -> id_santri = $request -> idSantri;
        $spp -> bulan = $request -> bulan;
        $spp -> tahun = $request -> tahun;
        $spp -> total = $request -> total; 
        $spp -> active = "1";
        $spp -> save();
        // save cash flow 
        $tokenFlow = Str::uuid();
        $cf = new M_Cash_Flow();
        $cf -> token_flow = $tokenFlow;
        $cf -> flow = "MASUK";
        $cf -> id_event = $token;
        $cf -> type = "PEMBAYARAN_SPP";
        $cf -> total = $request -> total;
        $cf -> active = "1";
        $cf -> save();
        $dr = ['status' => 'sukses'];
        return \Response::json($dr);
    }
}
