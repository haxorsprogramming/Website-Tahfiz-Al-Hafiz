<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\M_Santri;

class C_Absensi extends Controller
{
    public function absensiPage()
    {
        $dataSantri = M_Santri::all();
        $dr = ['dataSantri' => $dataSantri];
        return view('mainApp.absensi.absensiPage', $dr);
    }
}
