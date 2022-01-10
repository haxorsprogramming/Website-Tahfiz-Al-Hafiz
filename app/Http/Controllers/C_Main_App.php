<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Main_App extends Controller
{
    public function mainAppPage()
    {
        return view('mainApp.mainAppPage');
    }
}
