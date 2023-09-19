<?php

namespace App\Http\Controllers;

use App\Models\M_Cash_Flow;
use App\Models\M_Donasi;
use App\Models\M_Pengurus;
use App\Models\M_Santri;
use App\Models\M_Absensi;
use App\Models\M_Setting;

use Illuminate\Http\Request;

class C_Main_App extends Controller
{
    public function mainAppPage()
    {
        $dataTahfiz = M_Setting::where('nama_setting', 'nama') -> first();
        $dr = ['namaTahfiz' => $dataTahfiz -> value];
        return view('mainApp.mainAppPage', $dr);
    }
    public function dashboardPage()
    {
        $tSantri = M_Santri::count();
        $tDonasi = M_Donasi::sum('nominal');
        $tPengurus = M_Pengurus::count();
        $tPengeluaran = M_Cash_Flow::where('flow', 'KELUAR') -> sum('total');
        $hAbsen = M_Absensi::orderBy('created_at', 'desc') -> limit (6) -> get();
        $dataTahfiz =  M_Setting::where('nama_setting', 'nama') -> first();

        $dr = [
            'tSantri' => $tSantri,
            'tDonasi' => $tDonasi,
            'tPengurus' => $tPengurus,
            'tPengeluaran' => $tPengeluaran,
            'hAbsen' => $hAbsen,
            'namaTahfiz' => $dataTahfiz->value
        ];
        return view('mainApp.dashboard.dashboardPage', $dr);
    }
}
