<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblPengeluaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_pengeluaran', function (Blueprint $table) {
            $table -> id();
            $table -> char('token', 50);
            $table -> char('nama_pengeluaran', 200);
            $table -> text('detail') -> nullable();
            $table -> char('kategori', 50); // LISTRIK, ATK, PAJAK, AIR, KEBUTUHAN_TAHFIZ 
            $table -> char('total', 30);
            $table -> date('tanggal_pengeluaran');
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
        Schema::dropIfExists('tbl_pengeluaran');
    }
}
