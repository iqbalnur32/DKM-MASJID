<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataMasjid extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_masjid', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('foto');
            $table->string('no_telp');
            $table->string('website');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('kelurahan');
            $table->string('kategori_masjid');
            $table->string('alamat_lengkap');
            $table->string('jumlah_remaja');
            $table->string('organisasi');
            $table->string('status_tanah');
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
        Schema::dropIfExists('data_masjid');
    }
}
