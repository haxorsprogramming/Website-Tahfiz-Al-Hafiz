<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\M_Santri;
use App\Models\M_Absensi;

class C_Absensi extends Controller
{

    public function __construct()
    {
        $this -> tanggal = date("d");
        $this -> bulan = date("m");
        $this -> tahun = date("Y");
    }

    public function absensiPage()
    {
        $dataSantri = M_Santri::all();
        $dataAbsensi = M_Absensi::whereRaw('MONTH(created_at)='.$this -> bulan) -> whereRaw('DAY(created_at)='.$this -> tanggal) -> whereRaw('YEAR(created_at)='.$this -> tahun) -> get();
        $dr = ['dataSantri' => $dataSantri, 'dataAbsensi' => $dataAbsensi];
        return view('mainApp.absensi.absensiPage', $dr);
    }
    public function prosesAbsensi(Request $request)
    {
        $tokenAbsensi = Str::uuid();
        $idSantri = $request -> idSantri;
        // cek apakah sudah absensi 
        $cekAbsensi = M_Absensi::where('id_santri', $idSantri) -> where('tanggal', $this -> tanggal) -> where('bulan', $this -> bulan) -> where('tahun', $this -> tahun) -> count();
        if($cekAbsensi < 1){
            $ab = new M_Absensi();
            $ab -> token_absensi = $tokenAbsensi;
            $ab -> id_santri = $idSantri;
            $ab -> tanggal = $this -> tanggal;
            $ab -> bulan = $this -> bulan;
            $ab -> tahun = $this -> tahun;
            $ab -> active = "1";
            $ab -> save();
            $status = "INSERT";
        }else{
            M_Absensi::where('id_santri', $idSantri) -> where('tanggal', $this -> tanggal) -> where('bulan', $this -> bulan) -> where('tahun', $this -> tahun) -> delete();
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
