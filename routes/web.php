<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\C_Home;
use App\Http\Controllers\C_Auth;
use App\Http\Controllers\C_Main_App;
use App\Http\Controllers\C_Santri;
use App\Http\Controllers\C_Pengurus;

Route::get('/', [C_Home::class, 'homePage']);
// auth 
Route::get('/login', [C_Auth::class, 'loginPage']);
Route::post('/auth/login/process', [C_Auth::class, 'loginProcess']);
// main app 
Route::get('/app', [C_Main_App::class, 'mainAppPage']);
Route::get('/app/dashboard', [C_Main_App::class, 'dashboardPage']);
// data santri 
Route::get('/app/santri', [C_Santri::class, 'santriPage']);
Route::post('/app/santri/add/process', [C_Santri::class, 'processAddSantri']);
Route::post('/app/santri/delete/process', [C_Santri::class, 'processDeleteSantri']);
// data pengurus 
Route::get('/app/pengurus', [C_Pengurus::class, 'pengurusPage']);