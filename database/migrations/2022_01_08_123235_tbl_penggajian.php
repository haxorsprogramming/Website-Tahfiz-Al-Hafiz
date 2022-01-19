<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblPenggajian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_penggajian', function (Blueprint $table) {
            $table -> id();
            $table -> char('token_penggajian', 50);
            $table -> char('id_pengurus', 20);
            $table -> date('tanggal_pembayaran');
            $table -> double('gaji_pokok', 30);
            $table -> double('tunjangan', 30);
            $table -> text('cap_tunjangan') -> nullable();
            $table -> double('potongan', 30);
            $table -> text('cap_potongan')  -> nullable();
            $table -> double('total_gaji', 30);
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
        Schema::dropIfExists('tbl_penggajian');
    }
}
