<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblDonasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_donasi', function (Blueprint $table) {
            $table -> id();
            $table -> char('token', 50);
            $table -> char('nama_donatur', 200);
            $table -> text('detail') -> nullable();
            $table -> char('tipe', 30); //PERSEORANGAN - INSTANSI
            $table -> date('tanggal_donasi');
            $table -> char('nominal', 30);
            $table -> timestamps(); 
            $table -> char('active', 1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_donasi');
    }
}
