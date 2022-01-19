<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\C_Helper;
use App\Models\M_Pengeluaran;

class C_Pengeluaran extends Controller
{
    protected $helperCtr;

    public function __construct(C_Helper $helperCtr)
    {
        $this -> helperCtr = $helperCtr;
    }

    public function pengeluaranPage()
    {
        $dataPengeluaran = M_Pengeluaran::all();
        $dr = ['dataPengeluaran' => $dataPengeluaran];
        return view('mainApp.pengeluaran.pengeluaranPage', $dr);
    }
    public function prosesTambahPengeluaran(Request $request)
    {
        // {'nama':nama, 'deks':deks, 'kategori':kategori, 'nominal':nominal, 'tgl':tgl}
        $token = Str::uuid();
        $expend = new M_Pengeluaran();
        $expend -> token = $token;
        $expend -> nama_pengeluaran = $request -> nama;
        $expend -> detail = $request -> deks;
        $expend -> kategori = $request -> kategori;
        $expend -> total = $request -> nominal;
        $expend -> tanggal_pengeluaran = $request -> tgl;
        $expend -> active = "1";
        $expend -> save();
        // simpan cash flow 
        $this -> helperCtr -> createCashFlow($token, "KELUAR", "PENGELUARAN", $request -> nominal);
        $dr = ['status' => 'sukses'];
        return \Response::json($dr);
    }
    public function prosesHapusPengeluaran(Request $request)
    {
        $token = $request -> token;
        // delete cash flow 
        $this -> helperCtr -> deleteCashFlow($token);
        // delete pengeluaran 
        M_Pengeluaran::where('token', $token) -> delete();
        $dr = ['status' => 'sukses'];
        return \Response::json($dr);
    }
}
