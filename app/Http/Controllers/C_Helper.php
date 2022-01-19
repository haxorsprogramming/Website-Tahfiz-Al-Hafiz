<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\M_Cash_Flow;

class C_Helper extends Controller
{
    public function createCashFlow($idEvent, $flow, $type, $total)
    {
        $tokenFlow = Str::uuid();
        $cf = new M_Cash_Flow();
        $cf -> token_flow = $tokenFlow;
        $cf -> flow = $flow;
        $cf -> id_event = $idEvent;
        $cf -> type = $type;
        $cf -> total = $total;
        $cf -> active = "1";
        $cf -> save();
    }
}
