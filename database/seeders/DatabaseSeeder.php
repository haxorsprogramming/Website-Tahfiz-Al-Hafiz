<?php
//namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

use App\Models\M_Santri;
use App\Models\M_Pengurus;

class DatabaseSeeder extends Seeder
{
    protected $faker;

    public function __construct()
    {
        require_once 'vendor/autoload.php';
        $faker = Faker\Factory::create('id_ID');
        $this -> faker = $faker;
        $this -> kafilah = array();
        $this -> statusOrtu = array("LENGKAP","YATIM","PIATU","YATIM_PIATU");
        $this -> kelas = array("DASAR", "TAHFIZ", "TAHSIN");
        $this -> jk = array("L", "P");
    }

    public function run()
    {

        $this -> call([
            \Database\Seeders\S_Role::class,
            \Database\Seeders\S_Setting::class,
            \Database\Seeders\S_User::class
        ]);

        $this -> createKafilah("AL HALIM", "-", "HANIFAH");
        $this -> createKafilah("AL FATTAH", "-", "MAULANA");
        $this -> createKafilah("AR RAHMAN", "-", "DITA");

        // berikan komentar / hapus perintah dibawah bila tidak ingin melakukan seeder dummy data santri
        $this -> loopCreateSantri(20);

        $this -> createPengurus("M. Agung Aditya", "L", "Batang Kuis", "1988-12-07", "Batang Kuis", "tyo@gmail,com", "0878212312", "PEMBINA");
        $this -> createPengurus("Silvi", "P", "Batang Kuis", "1998-11-27", "Batang Kuis", "silvi@gmail,com", "087889221299", "ADMINISTRASI");
        $this -> createPengurus("Sindy", "P", "Batang Kuis", "1990-02-17", "Batang Kuis", "silvi@gmail,com", "0878221279", "PENGAJAR");
    }

    function loopCreateSantri($count)
    {
        for ($x = 0; $x < $count; $x++) {
            $this -> createSantri();
          }
    }

    function createPengurus($nama, $jk, $tmpt, $tgl, $alamat, $email, $hp, $jabatan)
    {
        $idPengurus = $this -> getIdPengurus();
        $pn = new M_Pengurus();
        $pn -> id_pengurus = $idPengurus;
        $pn -> nama = $nama;
        $pn -> jk = $jk;
        $pn -> tempat_lahir = $tmpt;
        $pn -> tanggal_lahir = $tgl;
        $pn -> alamat = $alamat;
        $pn -> email = $email;
        $pn -> nomor_hp = $hp;
        $pn -> jabatan = $jabatan;
        $pn -> active = "1";
        $pn -> save();
    }

    function createSantri()
    {
        $idKafilah = $this -> getKafilah();
        $statusOrtu = $this -> getStatusOrtu();
        $kelas = $this -> getKelas();
        $santri = new M_Santri();
        $santri -> id_santri = $this -> getIdSantri();
        $santri -> nama = $this -> faker -> name;
        $santri -> jk = $this -> getJk();
        $santri -> tanggal_lahir = $this -> faker -> date($format = 'Y-m-d', $max = 'now');
        $santri -> tempat_lahir = $this -> faker -> address();
        $santri -> alamat = $this -> faker -> address();;
        $santri -> no_hp = $this -> faker -> phoneNumber();
        $santri -> email = $this -> faker -> email();
        $santri -> id_kafilah = $idKafilah;
        $santri -> kelas = $kelas;
        $santri -> status_ortu = $statusOrtu;
        $santri -> nama_ortu = $this -> faker -> name;
        $santri -> active = "1";
        $santri -> save();
    }

    function getKelas()
    {
        shuffle($this -> kelas);
        return $this -> kelas[0];
    }

    function getJk()
    {
        shuffle($this -> jk);
        return $this -> jk[0];
    }

    function getKafilah()
    {
        shuffle($this -> kafilah);
        return $this -> kafilah[0];
    }

    function getStatusOrtu()
    {
        shuffle($this -> statusOrtu);
        return $this -> statusOrtu[0];
    }

    function createKafilah($nama, $deks, $userWali)
    {
        $idKafilah = Str::uuid();
        DB::table('tbl_kafilah') -> insert([
            'id_kafilah' => $idKafilah,
            'nama' => $nama,
            'deksripsi' => $deks,
            'nama_wali' => $userWali,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        array_push($this -> kafilah, $idKafilah);
    }

    function getIdPengurus()
    {
        $totalPengurus = M_Pengurus::count();
        if($totalPengurus == 0){
            $urutan = (int) substr(0, 3, 3);
            $urutan++;
            $huruf = "PN-";
            $noPn = $huruf . sprintf("%07s", $urutan);
            return($noPn);
        }else{
            $noPnLast = M_Pengurus::orderby('id', 'desc') -> limit(1) -> get();
            $noId = $noPnLast[0] -> id;
            $nowOrd = $noId + 1;
            $huruf = "PN-";
            $noPn = $huruf . sprintf("%07s", $nowOrd);
            return($noPn);
        }
    }

    function getIdSantri()
    {
        $totalBk = M_Santri::count();
        if($totalBk == 0){
            $urutan = (int) substr(0, 3, 3);
            $urutan++;
            $huruf = "SN-";
            $noGr = $huruf . sprintf("%07s", $urutan);
            return($noGr);
        }else{
            $noIdLast = M_Santri::orderby('id', 'desc') -> limit(1) -> get();
            $noId = $noIdLast[0] -> id;
            $nowOrd = $noId + 1;
            $huruf = "SN-";
            $noId = $huruf . sprintf("%07s", $nowOrd);
            return($noId);
        }
    }

}
