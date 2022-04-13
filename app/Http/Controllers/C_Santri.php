<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\M_Kafilah;
use App\Models\M_Santri;

class C_Santri extends Controller
{
    
    public function santriPage()
    {
        $kafilah = M_Kafilah::all();
        $santri = M_Santri::all();
        $dr = ['dataKafilah' => $kafilah, 'dataSantri' => $santri];
        return view('mainApp.santri.santriPage', $dr);
    }

    public function processAddSantri(Request $request)
    {
        // {'nama':nama, 'jk':jk, 'tgl':tglLhr, 'tmpt':tmptLhr, 'hp':hp, 'email':email, 'kafilah':kafilah}
        $santri = new M_Santri();
        $santri -> id_santri = $this -> getIdSantri();
        $santri -> nama = $request -> nama;
        $santri -> jk = $request -> jk;
        $santri -> tanggal_lahir = $request -> tgl;
        $santri -> tempat_lahir = $request -> tmpt;
        $santri -> alamat = $request -> alamat;
        $santri -> no_hp = $request -> hp;
        $santri -> email = $request -> email;
        $santri -> id_kafilah = $request -> kafilah;
        $santri -> status_ortu = $request -> ortu;
        $santri -> active = "1";
        $santri -> save();
        $dr = ['status' => 'sukses'];
        return \Response::json($dr);
    }

    public function restDataEdit(Request $request)
    {
        // {'idSantri':idSantri}
        $dataSantri = M_Santri::where('id_santri', $request -> idSantri) -> first();

        $dr = ['status' => 'sukses', 'dataSantri' => $dataSantri];
        return \Response::json($dr);
    }

    function getIdSantri()
    {
        $totalBk = M_Santri::count();
        if($totalBk == 0){
            $urutan = (int) substr(0, 3, 3);
            $urutan++;
            $huruf = "SN-";
            $noGr = $huruf . sprintf("%07s", $urutan);
            return($noGr);
        }else{
            $noGrLast = M_Santri::orderby('id', 'desc') -> limit(1) -> get();
            $noGr = $noGrLast[0] -> id;
            $lastId = substr($noGr, -1);
            $urutan = $lastId;
            $urutan++;
            $huruf = "SN-";
            $noGr = $huruf . sprintf("%07s", $urutan);
            return($noGr);
        }
    }

    function processDeleteSantri(Request $request)
    {
        M_Santri::where('id_santri', $request -> idSantri) -> delete();
        $dr = ['status' => 'sukses'];
        return \Response::json($dr);
    }
}
