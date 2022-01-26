<?php

namespace App\Http\Controllers;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\C_Helper;
use App\Models\M_Donasi;

class C_Donasi extends Controller
{

    protected $helperCtr;

    public function __construct(C_Helper $helperCtr)
    {
        $this -> helperCtr = $helperCtr;
    }

    public function donasiPage()
    {
        $dataDonasi = M_Donasi::all();
        $dr = ['dataDonasi' => $dataDonasi];
        return view('mainApp.donasi.donasiPage', $dr);
    }

    public function prosesTambahDonasi(Request $request)
    {
        // {'nama':nama, 'detail':detail, 'tipe':tipe, 'nominal':nominal, 'tgl':tgl}
        // save tabel donasi 
        $token = Str::uuid();
        $donasi = new M_Donasi();
        $donasi -> token = $token;
        $donasi -> nama_donatur = $request -> nama;
        $donasi -> detail = $request -> detail;
        $donasi -> tipe = $request -> tipe;
        $donasi -> tanggal_donasi = $request -> tgl;
        $donasi -> nominal = $request -> nominal;
        $donasi -> active = "1";
        $donasi -> save();
        // create cash flow 
        $this -> helperCtr -> createCashFlow($token, "MASUK", "DONASI", $request -> nominal);
        $dr = ['status' => 'sukses'];
        return \Response::json($dr);
    }

    public function prosesHapusPengeluaran(Request $request)
    {
        $token = $request -> token;
        M_Donasi::where('token', $token) -> delete();
        // hapus cash flow 
        $this -> helperCtr -> deleteCashFlow($token);
        $dr = ['status' => 'sukses'];
        return \Response::json($dr);
    }

    public function cetakPenerimaanDonasi(Request $request, $token)
    {
        $dr = ['judul' => 'Penerimaan Donasi'];
        $pdf = PDF::loadview('mainApp.donasi.cetakBuktiDonasi', $dr);
        $pdf -> setPaper('A4', 'portait');
        return $pdf -> stream();
    }

}
