<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\M_Pengurus;

class C_Penggajian extends Controller
{
    public function penggajianPage()
    {
        $dataPengurus = M_Pengurus::all();
        $dr = ['dataPengurus' => $dataPengurus];
        return view('mainApp.penggajian.penggajianPage', $dr);
    }
}
