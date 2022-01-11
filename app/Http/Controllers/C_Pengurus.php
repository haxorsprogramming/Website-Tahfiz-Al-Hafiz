<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\M_Pengurus;

class C_Pengurus extends Controller
{

    public function pengurusPage()
    {
        $pengurus = M_Pengurus::all();
        $dr = ['dataPengurus' => $pengurus];
        return view('mainApp.pengurus.pengurusPage', $dr);
    }

    public function processAddPengurus(Request $request)
    {
        // {'nama':nama, 'jk':jk, 'tgl':tgl, 'lhr':lhr, 'alamat':alamat, 'hp':hp, 'email':email, 'jabatan':jabatan}
        $idPengurus = $this -> getIdPengurus();
        $pengurus = new M_Pengurus();
        $pengurus -> id_pengurus = $idPengurus;
        $pengurus -> nama = $request -> nama;
        $pengurus -> jk = $request -> jk;
        $pengurus -> tempat_lahir = $request -> lhr;
        $pengurus -> tanggal_lahir = $request -> tgl;
        $pengurus -> alamat = $request -> alamat;
        $pengurus -> email = $request -> email;
        $pengurus -> nomor_hp = $request -> hp;
        $pengurus -> jabatan = $request -> jabatan;
        $pengurus -> active = "1";
        $pengurus -> save();
        $dr = ['status' => 'sukses'];
        return \Response::json($dr);
    }

    public function processDeletePengurus(Request $request)
    {
        M_Pengurus::where('id_pengurus', $request -> idPengurus) -> delete();
        $dr = ['status' => 'sukses'];
        return \Response::json($dr);
    }

    function getIdPengurus()
    {
        $totalBk = M_Pengurus::count();
        if($totalBk == 0){
            $urutan = (int) substr(0, 3, 3);
            $urutan++;
            $huruf = "PN-";
            $noGr = $huruf . sprintf("%07s", $urutan);
            return($noGr);
        }else{
            $noGrLast = M_Pengurus::orderby('id', 'desc') -> limit(1) -> get();
            $noGr = $noGrLast[0] -> id;
            $lastId = substr($noGr, -1);
            $urutan = $lastId;
            $urutan++;
            $huruf = "PN-";
            $noGr = $huruf . sprintf("%07s", $urutan);
            return($noGr);
        }
    }

}
