<?php

namespace App\Http\Controllers;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\C_Helper;
use App\Models\M_Pengurus;
use App\Models\M_Penggajian;

class C_Penggajian extends Controller
{
    protected $helperCtr;

    public function __construct(C_Helper $helperCtr)
    {
        $this -> helperCtr = $helperCtr;
    }

    public function penggajianPage()
    {
        $dataPengurus = M_Pengurus::all();
        $dataPenggajian = M_Penggajian::all();
        $dr = ['dataPengurus' => $dataPengurus, 'dataPenggajian' => $dataPenggajian];
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
        // simpan cash flow 
        $this -> helperCtr -> createCashFlow($token, "KELUAR", "PEMBAYARAN_GAJI", $request -> gp + $request -> tun - $request -> pot);
        $dr = ['status' => 'sukses', 'token' => $token];
        return \Response::json($dr);
    }
    public function cetakSlipGaji(Request $request, $token)
    {
        $dataGaji = M_Penggajian::where('token_penggajian', $token) -> first();
        $dr = ['judul' => 'Slip Gaji', 'dataGaji' => $dataGaji];
        $pdf = PDF::loadview('mainApp.penggajian.cetakSlipGaji', $dr);
        $pdf -> setPaper('A4', 'portait');
        return $pdf -> stream();
    }
}
