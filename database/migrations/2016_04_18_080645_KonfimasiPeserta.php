<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class KonfimasiPeserta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konfirmasis', function(Blueprint $table)
        {
            $table->increments('id');
            $table ->string('nama');
            $table->string('peserta')->nullable();
            $table->string('upload_bukti', 10)->nullable();
            $table->string('atas_nama_pengirim')->nullable();
            $table->boolean('sudah_masuk');


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
        Schema::drop('konfirmasis');
    }
}
