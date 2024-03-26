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
        $dataSetting = M_Setting::where("id", $request->id)->first();
        $dr = [
            "status"=>"sukses",
            "dataSetting"=>$dataSetting
        ];
        return \Response::json($dr);
    }
    public function prosesUpdateSetting(Request $request)
    {
        M_Setting::where("nama_setting", $request->nama)->update([
            "value" => $request->nilai
        ]);
        $dr = ["status"=>"sukses"];
        return \Response::json($dr);
    }
}
