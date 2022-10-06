<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblSantri extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_santri', function (Blueprint $table) {
            $table -> id();
            $table -> char('id_santri', 20);
            $table -> char('nama', 200);
            $table -> char('jk', 1); // L - P
            $table -> date('tanggal_lahir') -> nullable();
            $table -> char('tempat_lahir', 200) -> nullable();
            $table -> text('alamat');
            $table -> char('no_hp', 30) -> nullable();
            $table -> char('email', 200) -> nullable();
            $table -> char('id_kafilah', 80);
            $table -> char('kelas', 30); // DASAR - TAHFIZ - TAHSIN
            $table -> char('status_ortu', 20) -> nullable(); //  LENGKAP - YATIM - PIATU - YATIM_PIATU
            $table -> char('nama_ortu', 200) -> nullable();
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
        Schema::dropIfExists('tbl_santri');
    }
}
