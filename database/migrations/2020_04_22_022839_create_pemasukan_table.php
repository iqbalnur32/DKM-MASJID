<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemasukanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masjid_pemasukan', function (Blueprint $table) {
            $table->increments('id_pemasukan');
            $table->integer('pemasukan');
            $table->integer('masuk_ke');
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
        Schema::dropIfExists('masjid_pemasukan');
    }
}
