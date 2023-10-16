<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblSetorPembayaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_setor_pembayaran', function (Blueprint $table) {
            $table->id();
            $table->char('token_pembayaran', 100);
            $table->char('nama_santri', 200);
            $table->char('nomor_handphone')->nullable();
            $table->char('total_pembayaran', 200);
            $table->char('status_pembayaran', 200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_setor_pembayaran');
    }
}
