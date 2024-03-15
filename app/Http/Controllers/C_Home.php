<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\C_Helper;

class C_Home extends Controller
{

    protected $helperCtr;

    public function __construct(C_Helper $helperCtr)
    {
        $this->helperCtr = $helperCtr;
    }

    public function homePage()
    {
        $dataSetting = $this->helperCtr->getSetting();
        $dr = ['setting'=>$dataSetting];
        return view('home.homePage', $dr);
    }
}
