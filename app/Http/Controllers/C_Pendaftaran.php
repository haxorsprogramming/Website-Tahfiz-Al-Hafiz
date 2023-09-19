<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Pendaftaran extends Controller
{
    protected $helperCtr;
    public function __construct(C_Helper $helperCtr)
    {
        $this -> helperCtr = $helperCtr;
    }

    public function pendaftaranPage()
    {
        return view('mainApp.pendaftaran.pendaftaranPage');
    }
}
