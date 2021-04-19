<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesanantiketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanan_tiket', function (Blueprint $table) {
            $table->increments('id_pemesanantiket');
            $table->integer('id_pertandingan');
            $table->string('nama_lengkap', 50);
            $table->string('email', 50);
            $table->integer('jumlah_tiket');
            $table->integer('total_harga');
            $table->integer('status');
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
        Schema::dropIfExists('pemesanantiket');
    }
}
