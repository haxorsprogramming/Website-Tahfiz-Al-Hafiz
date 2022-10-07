<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblKafilah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_kafilah', function (Blueprint $table) {
            $table -> id();
            $table -> char('id_kafilah', 60);
            $table -> char('nama', 60);
            $table -> text('deksripsi');
            $table -> char('nama_wali', 200);
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_kafilah');
    }
}
