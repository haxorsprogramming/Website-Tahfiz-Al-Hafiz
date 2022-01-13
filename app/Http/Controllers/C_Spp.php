<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Spp extends Controller
{
    public function pembayaranSppPage()
    {
        return view('mainApp.spp.pembayaranSpp');
    }
}
