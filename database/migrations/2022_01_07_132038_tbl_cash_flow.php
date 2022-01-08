<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblCashFlow extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_cash_flow', function (Blueprint $table) {
            $table -> id();
            $table -> char('token_flow', 1);
            $table -> char('flow', 50); // MASUK - KELUAR 
            $table -> char('id_event', 70);
            $table -> char('type', 20); // DONASI - PENGELUARAN - PEMASUKAN SPP
            $table -> double('total', 20);
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
        Schema::dropIfExists('tbl_cash_flow');
    }
}
