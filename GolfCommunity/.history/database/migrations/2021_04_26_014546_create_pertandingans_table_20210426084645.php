<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePertandingansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertandingans', function (Blueprint $table) {
            $table->increments('id_pertandingan');
            $table->string('nama');
            $table->string('lapangan');
            $table->text('alamat');
            $table->date('tgl_mulai');
            $table->date('tgl_selesai');
            $table->integer('harga_tiket');
            $table->string('cabang');
            $table->string('level');
            $table->text('detail');
            $table->string('deskripsi_singkat');
            $table->integer('jumlah_pemain');
            $table->string('gambar');
            $table->string('jenis');
            $table->integer('kuota_pemain');
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
        Schema::dropIfExists('pertandingans');
    }
}
