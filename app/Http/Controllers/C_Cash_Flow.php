<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\M_Cash_Flow;

class C_Cash_Flow extends Controller
{
    public function cashFlow()
    {
        $dataCashFlow = M_Cash_Flow::all();
        $dr = ['dataCashFlow'=>$dataCashFlow];
        return view('mainApp.cashFlow.cashFlowPage', $dr);
    }
}
