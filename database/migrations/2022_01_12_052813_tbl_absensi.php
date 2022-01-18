<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblAbsensi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_absensi', function (Blueprint $table) {
            $table -> id();
            $table -> char('token_absensi', 50);
            $table -> char('id_santri', 20);
            $table -> char('tanggal', 2);
            $table -> char('bulan', 2);
            $table -> char('tahun', 4);
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
        Schema::dropIfExists('tbl_absensi');
    }
}
