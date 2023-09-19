<?php

namespace App\Http\Controllers;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\M_User;
use App\Models\M_Pendaftaran;
use App\Http\Controllers\C_Helper;

class C_Auth extends Controller
{
    protected $helperCtr;

    public function __construct(C_Helper $helperCtr)
    {
        $this -> helperCtr = $helperCtr;
    }

    public function loginPage()
    {
        return view('auth.loginPage');
    }

    public function loginProcess(Request $request)
    {
        $username = $request -> username;
        $password = $request -> password;
        // cari total user
        $tUser = M_User::where('username', $username) -> count();
        if($tUser < 1){
            $status = "NO_USER";
        }else{
            // cari data user
            $dataUser = M_User::where('username', $username) -> first();
            $passwordDb = $dataUser -> password;
            $cek_password = password_verify($password, $passwordDb);
            if($cek_password == true){
                $status = "ACCESS_GRANTED";
            }else{
                $status = "WRONG_PASSWORD";
            }
        }
        $dr = ['status' => $status];
        return \Response::json($dr);
    }

    public function logoutProcess()
    {
        return redirect('/auth/login');
    }

    public function daftarProses(Request $request)
    {
        // {'nama':nama, 'email':email, 'hp':hp, 'jk':jk, 'kelas':kelas, 'alamat':alamat, 'harapan':harapan}
        // tgl':tgl, 'tmpt':tmpt, 'ortu':ortu}
        $token = Str::uuid();
        $daftar = new M_Pendaftaran();
        $daftar -> id_pendaftaran = $token;
        $daftar -> nama_santri = $request -> nama;
        $daftar -> email = $request -> email;
        $daftar -> no_hp = $request -> hp;
        $daftar -> jk = $request -> jk;
        $daftar -> alamat = $request -> alamat;
        $daftar -> harapan = $request -> harapan;
        $daftar -> kelas = $request -> kelas;
        $daftar -> active = "1";
        $daftar -> tempat_lahir = $request -> tmpt;
        $daftar -> tanggal_lahir = $request -> tgl;
        $daftar -> nama_ortu = $request -> ortu;
        $daftar -> save();
        $dr = ['status' => 'success', 'token' => $token];
        return \Response::json($dr);
    }

    public function cetakBuktiPendaftaran(Request $request, $token)
    {
        $dataSetting = $this -> helperCtr -> getSetting();
        $dPendaftaran = M_Pendaftaran::where('id_pendaftaran', $token) -> first();
        $dr = ['judul' => 'Bukti Pendaftaran', 'dp' => $dPendaftaran, 'dataSetting'=>$dataSetting];
        $pdf = PDF::loadview('auth.cetakBuktiPendaftaran', $dr);
        $pdf -> setPaper('A4', 'portait');
        return $pdf -> stream();
    }

}
