<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengeluaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masjid_pengeluaran', function (Blueprint $table) {
            $table->increments('id_pengeluaran');
            $table->integer('saldo');
            $table->integer('sumber_dana');
            $table->integer('keluar_ke');
            $table->integer('no_trasaksi');
            $table->string('tanggal_masuk');
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('masjid_pengeluaran');
    }
}
