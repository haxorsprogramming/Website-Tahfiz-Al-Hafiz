<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\M_Setting;

class C_Setting extends Controller
{
    public  function settingPage()
    {
        $dataSetting = M_Setting::all();
        $dr = ['dataSetting' => $dataSetting];
        return view('mainApp.setting.settingPage', $dr);
    }
    public function getDataSetting(Request $request)
    {
        $dr = ['status' => 'sukses'];
        return \Response::json($dr);
    }
}
