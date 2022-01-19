<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\M_Pengurus;
use App\Models\M_Penggajian;


class C_Penggajian extends Controller
{
    public function penggajianPage()
    {
        $dataPengurus = M_Pengurus::all();
        $dr = ['dataPengurus' => $dataPengurus];
        return view('mainApp.penggajian.penggajianPage', $dr);
    }
    public function prosesSplitPenggajian(Request $request)
    {
        // {'idPengurus':idPengurus, 'tgl':tgl, 'gp':gp, 'tun':tun, 'pot':pot, 'capTun':capTun, 'capPot':capPot}
        $token = Str::uuid();
        $split = new M_Penggajian();
        $split -> token_penggajian = $token;
        $split -> id_pengurus = $request -> idPengurus;
        $split -> tanggal_pembayaran = $request -> tgl;
        $split -> gaji_pokok = $request -> gp;
        $split -> tunjangan = $request -> tun;
        $split -> cap_tunjangan = $request -> capTun;
        $split -> potongan = $request -> pot;
        $split -> cap_potongan = $request -> capPot;
        $split -> total_gaji = $request -> gp + $request -> tun - $request -> pot;
        $split -> active = "1";
        $split -> save(); 
        $dr = ['status' => 'sukses'];
        return \Response::json($dr);
    }
}
