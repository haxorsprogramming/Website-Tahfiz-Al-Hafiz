<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\C_Home;
use App\Http\Controllers\C_Auth;
use App\Http\Controllers\C_Main_App;
use App\Http\Controllers\C_Santri;
use App\Http\Controllers\C_Pengurus;
use App\Http\Controllers\C_Spp;
use App\Http\Controllers\C_Absensi;
use App\Http\Controllers\C_Penggajian;
use App\Http\Controllers\C_Pengeluaran;
use App\Http\Controllers\C_Donasi;
use App\Http\Controllers\C_Cash_Flow;
use App\Http\Controllers\C_Laporan_Keuangan;
use App\Http\Controllers\C_Rekap_Absensi;
use App\Http\Controllers\C_Setting;

Route::get('/', [C_Home::class, 'homePage']);

// auth group
Route::group(['prefix' => 'auth'], function (){
    // login
    Route::group(['prefix' => 'login'], function (){
        Route::get('', [C_Auth::class, 'loginPage']);
        Route::post('process', [C_Auth::class, 'loginProcess']);
    });
    // log out
    Route::get('logout', [C_Auth::class, 'logoutProcess']);
    // registrasi
    Route::group(['prefix' => 'daftar'], function (){
        Route::post('proses', [C_Auth::class, 'daftarProses']);
        Route::get('{token}/cetak', [C_Auth::class, 'cetakBuktiPendaftaran']);
    });
});

Route::group(['prefix' => 'app'], function (){
    Route::get('', [C_Main_App::class, 'mainAppPage']);
    Route::get('dashboard', [C_Main_App::class, 'dashboardPage']);
    // data santri
    Route::group(['prefix' => 'santri'], function (){
        Route::get('', [C_Santri::class, 'santriPage']);
        Route::post('add', [C_Santri::class, 'processAddSantri']);
        Route::post('delete', [C_Santri::class, 'processDeleteSantri']);
        Route::post('update', [C_Santri::class, 'processUpdateSantri']);
        Route::post('get-data', [C_Santri::class, 'restDataEdit']);
    });
    // data pengurus
    Route::group(['prefix' => 'pengurus'], function (){
        Route::get('', [C_Pengurus::class, 'pengurusPage']);
        Route::post('add', [C_Pengurus::class, 'processAddPengurus']);
        Route::post('process', [C_Pengurus::class, 'processDeletePengurus']);
    });
    // pembayaran spp
    Route::group(['prefix' => 'pembayaran-spp'], function(){
        Route::get('', [C_Spp::class, 'pembayaranSppPage']);
        Route::post('proses', [C_Spp::class, 'prosesPembayaranSpp']);
        Route::get('{token}/cetak', [C_Spp::class, 'cetakPembayaranSpp']);
    });
    // absensi
    Route::group(['prefix' => 'absensi'], function (){
        Route::get('', [C_Absensi::class, 'absensiPage']);
        Route::post('proses', [C_Absensi::class, 'prosesAbsensi']);
    });
    // setting
    Route::group(['prefix' => 'setting'], function (){
        Route::get('', [C_Setting::class, 'settingPage']);
        Route::post('get-data', [C_Setting::class, 'getDataSetting']);
        Route::post('update', [C_Setting::class, 'prosesUpdateSetting']);
    });

});





Route::post('/app/absensi/hapus/proses', [C_Absensi::class, 'prosesHapusAbsensi']);
// penggajian
Route::get('/app/penggajian', [C_Penggajian::class, 'penggajianPage']);
Route::post('/app/penggajian/split/proses', [C_Penggajian::class, 'prosesSplitPenggajian']);
Route::get('/app/penggajian/{token}/cetak', [C_Penggajian::class, 'cetakSlipGaji']);
// pengeluaran
Route::get('/app/pengeluaran', [C_Pengeluaran::class, 'pengeluaranPage']);
Route::post('/app/pengeluaran/tambah/proses', [C_Pengeluaran::class, 'prosesTambahPengeluaran']);
Route::post('/app/pengeluaran/hapus/proses', [C_Pengeluaran::class, 'prosesHapusPengeluaran']);
// donasi
Route::get('/app/donasi', [C_Donasi::class, 'donasiPage']);
Route::post('/app/donasi/tambah/proses', [C_Donasi::class, 'prosesTambahDonasi']);
Route::post('/app/donasi/hapus/proses', [C_Donasi::class, 'prosesHapusPengeluaran']);
Route::get('/app/donasi/{token}/cetak', [C_Donasi::class, 'cetakPenerimaanDonasi']);
// cash flow
Route::get('/app/cash-flow', [C_Cash_Flow::class, 'cashFlow']);
// laporan keuangan
Route::get('/app/laporan-keuangan/{tahun}', [C_Laporan_Keuangan::class, 'laporanKeuanganPage']);
Route::get('/app/laporan-keuangan/{bulan}/{tahun}/cetak', [C_Laporan_Keuangan::class, 'cetakLaporanBulanan']);
// rekap absensi
Route::get('/app/rekap-absensi', [C_Rekap_Absensi::class, 'rekapAbsensiPage']);
Route::get('/app/rekap-absensi/set-rekap/{bulan}/{tahun}', [C_Rekap_Absensi::class, 'setRekapAbsensi']);
Route::get('/app/rekap-absensi/{id_santri}/{bulan}/{tahun}/cetak', [C_Rekap_Absensi::class, 'cetakRekapAbsensi']);
// testing
Route::get('/tes-tailwind', [C_Home::class, 'tesTailwind']);
