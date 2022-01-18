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
        $dataAbsensi = M_Absensi::all();
        $dr = ['dataSantri' => $dataSantri, 'dataAbsensi' => $dataAbsensi];
        return view('mainApp.absensi.absensiPage', $dr);
    }
    public function prosesAbsensi(Request $request)
    {
        $tokenAbsensi = Str::uuid();
        $idSantri = $request -> idSantri;
        $tanggal = date("d");
        $bulan = date("m");
        $tahun = date("Y");
        // cek apakah sudah absensi 
        $cekAbsensi = M_Absensi::where('id_santri', $idSantri) -> where('tanggal', $tanggal) -> where('bulan', $bulan) -> where('tahun', $tahun) -> count();
        if($cekAbsensi < 1){
            $ab = new M_Absensi();
            $ab -> token_absensi = $tokenAbsensi;
            $ab -> id_santri = $idSantri;
            $ab -> tanggal = $tanggal;
            $ab -> bulan = $bulan;
            $ab -> tahun = $tahun;
            $ab -> active = "1";
            $ab -> save();
            $status = "INSERT";
        }else{
            M_Absensi::where('id_santri', $idSantri) -> where('tanggal', $tanggal) -> where('bulan', $bulan) -> where('tahun', $tahun) -> delete();
            $status = "DELETE";
        }
        
        $dr = ['status' => $status];
        return \Response::json($dr);
    }

    function prosesHapusAbsensi(Request $request)
    {
        M_Absensi::where('token_absensi', $request -> token) -> delete();
        $dr = ['status' => 'sukses'];
        return \Response::json($dr);
    }
}
