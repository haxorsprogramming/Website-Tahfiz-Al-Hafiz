<?php

namespace App\Http\Controllers;

use App\Models\M_Santri;
use Illuminate\Http\Request;
use App\Models\M_Pendaftaran;
use App\Models\M_Kafilah;

class C_Pendaftaran extends Controller
{
    protected $helperCtr;
    public function __construct(C_Helper $helperCtr)
    {
        $this -> helperCtr = $helperCtr;
    }

    public function pendaftaranPage()
    {
        $dataPendaftaran = M_Pendaftaran::all();
        $dr = ['dataPendaftaran' => $dataPendaftaran, 'dataKafilah' => M_Kafilah::all()];
        return view('mainApp.pendaftaran.pendaftaranPage', $dr);
    }

    public function getDataPendaftaran(Request $request)
    {
        $fData = M_Pendaftaran::where('id_pendaftaran', $request->kd)->first();
        $dr = [
            'success' => true,
            'data' => $fData
        ];
        return \Response::json($dr);
    }

    function createIdSantri():string
    {
        $dSantri = M_Santri::orderBy('id', 'DESC')->first();
        $lastIdSantri = $dSantri->id_santri;

        $exId = explode("-", $lastIdSantri);
        $numLast = intval($exId[1]) + 1;
        $huruf = "SN-";
        return $huruf . sprintf("%07s", $numLast);
    }
}
