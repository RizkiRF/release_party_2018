<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TambahKolomNamaGambarAtasNamaStatusMasuk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('pesertas', function ($table) {
        $table->string('upload_bukti', 10)->nullable();
        $table->string('atas_nama_pengirim')->nullable();
        $table->boolean('sudah_masuk');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
