<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblPendaftaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_pendaftaran', function (Blueprint $table) {
            $table -> id();
            $table -> char('id_pendaftaran', 50);
            $table -> char('nama_santri', 200);
            $table -> char('tempat_lahir', 200);
            $table -> date('tanggal_lahir');
            $table -> char('nama_ortu', 200);
            $table -> char('email', 100);
            $table -> char('no_hp', 50);
            $table -> char('jk', 100);
            $table -> char('alamat', 200);
            $table -> text('harapan') -> nullable();
            $table -> char('kelas', 30); // DASAR - TAHFIZ - TAHSIN
            $table -> char('status', 20) -> nullable(); //DITERIMA 
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
        Schema::dropIfExists('tbl_pendaftaran');
    }
}
