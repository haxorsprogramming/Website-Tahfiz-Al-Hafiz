<?php

namespace App\Http\Controllers;

use App\Models\M_Cash_Flow;
use App\Models\M_Donasi;
use App\Models\M_Pengurus;
use App\Models\M_Santri;
use App\Models\M_Absensi;

use Illuminate\Http\Request;

class C_Main_App extends Controller
{
    public function mainAppPage()
    {
        return view('mainApp.mainAppPage');
    }
    public function dashboardPage()
    {
        $tSantri = M_Santri::count();
        $tDonasi = M_Donasi::sum('nominal');
        $tPengurus = M_Pengurus::count();
        $tPengeluaran = M_Cash_Flow::where('flow', 'KELUAR') -> sum('total');
        $hAbsen = M_Absensi::orderBy('created_at', 'desc') -> limit (6) -> get();
        $dr = [
            'tSantri' => $tSantri,
            'tDonasi' => $tDonasi,
            'tPengurus' => $tPengurus,
            'tPengeluaran' => $tPengeluaran,
            'hAbsen' => $hAbsen
        ];
        return view('mainApp.dashboard.dashboardPage', $dr);
    }
}
