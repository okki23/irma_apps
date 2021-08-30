<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekapAbsensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekap_absen', function (Blueprint $table) {
            $table->id();
            $table->string('kode_rekap');
            $table->string('tanggal_rekap');
            $table->string('id_pengguna');
            $table->string('id_pegawai');
            $table->integer('jumlah_hadir');
            $table->integer('jumlah_lembur'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rekap_absen');
    }
}
