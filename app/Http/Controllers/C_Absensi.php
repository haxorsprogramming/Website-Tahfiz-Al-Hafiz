<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Absensi extends Controller
{
    public function absensiPage()
    {
        return view('mainApp.absensi.absensiPage');
    }
}
