<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablePeserta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesertas', function(Blueprint $table)
        {
            $table->increments('id');
            $table -> string('nama');
            $table -> string('no_hp')->unique();
            $table->string('email')->unique();
            $table->string('kode_tiket',5);
            $table->enum('status',['mahasiswa','pelajar','umum'])->default('umum');
            $table->enum('dvd',['32','64'])->default('64');
            $table->boolean('status_bayar');
            $table->boolean('email_terkirim');
            $table->boolean('sms_terkirim');


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

    }
}
