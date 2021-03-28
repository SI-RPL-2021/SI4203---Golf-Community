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
            $table->id();
            $table->string('nama');
            $table->string('lokasi');
            $table->string('alamat');
            $table->string('date');
            $table->integer('harga');
            $table->string('tipe_aktivitas');
            $table->string('tipe_game');
            $table->string('level_game');
            $table->string('kontak');
            $table->string('pembayaran');
            $table->integer('jumlah_pemain');
            $table->string('image_path');
            $table->text('deskripsi');
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
