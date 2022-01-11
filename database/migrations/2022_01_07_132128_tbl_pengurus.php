<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblPengurus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_pengurus', function (Blueprint $table) {
            $table -> id();
            $table -> char('id_pengurus', 30);
            $table -> char('nama', 50);
            $table -> char('jk', 1);
            $table -> char('tempat_lahir', 200);
            $table -> date('tanggal_lahir');
            $table -> text('alamat');
            $table -> char('email', 200);
            $table -> char('nomor_hp', 30);
            $table -> char('jabatan', 200); // ADMINISTRASI - PENGAJAR - PEMBINA 
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
        Schema::dropIfExists('tbl_pengurus');
    }
}
