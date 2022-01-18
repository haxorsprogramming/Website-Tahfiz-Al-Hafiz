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

Route::get('/', [C_Home::class, 'homePage']);
// auth 
Route::get('/login', [C_Auth::class, 'loginPage']);
Route::post('/auth/login/process', [C_Auth::class, 'loginProcess']);
Route::get('/logout', [C_Auth::class, 'logoutProcess']);
// main app 
Route::get('/app', [C_Main_App::class, 'mainAppPage']);
Route::get('/app/dashboard', [C_Main_App::class, 'dashboardPage']);
// data santri 
Route::get('/app/santri', [C_Santri::class, 'santriPage']);
Route::post('/app/santri/add/process', [C_Santri::class, 'processAddSantri']);
Route::post('/app/santri/delete/process', [C_Santri::class, 'processDeleteSantri']);
// data pengurus 
Route::get('/app/pengurus', [C_Pengurus::class, 'pengurusPage']);
Route::post('/app/pengurus/add/process', [C_Pengurus::class, 'processAddPengurus']);
Route::post('/app/pengurus/delete/process', [C_Pengurus::class, 'processDeletePengurus']);
// pembayaran spp 
Route::get('/app/pembayaran-spp', [C_Spp::class, 'pembayaranSppPage']);
Route::post('/app/pembayaran-spp/add/proses', [C_Spp::class, 'prosesPembayaranSpp']);
// absensi 
Route::get('/app/absensi', [C_Absensi::class, 'absensiPage']);
Route::post('/app/absensi/proses', [C_Absensi::class, 'prosesAbsensi']);
Route::post('/app/absensi/hapus/proses', [C_Absensi::class, 'prosesHapusAbsensi']);
// penggajian 
Route::get('/app/penggajian', [C_Penggajian::class, 'penggajianPage']);
// testing 
Route::get('/tes-tailwind', [C_Home::class, 'tesTailwind']);