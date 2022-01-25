<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblSpp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_spp', function (Blueprint $table) {
            $table -> id();
            $table -> char('token_pembayaran', 50);
            $table -> char('id_santri', 20);
            $table -> char('bulan', 30);
            $table -> char('tahun', 10);
            $table -> double('total', 30);
            $table -> char('id_pengurus', 30);
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
        Schema::dropIfExists('tbl_spp');
    }
}
