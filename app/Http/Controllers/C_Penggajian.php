<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Penggajian extends Controller
{
    public function penggajianPage()
    {
        return view("mainApp.penggajian.penggajianPage");
    }
}
