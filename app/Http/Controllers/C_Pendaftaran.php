<?php

namespace App\Http\Controllers;

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
}
