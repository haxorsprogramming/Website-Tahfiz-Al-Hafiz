<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Pengurus extends Controller
{
    public function pengurusPage()
    {
        return view('mainApp.pengurus.pengurusPage');
    }
}
