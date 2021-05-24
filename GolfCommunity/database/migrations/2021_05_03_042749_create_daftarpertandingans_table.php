<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarpertandingansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftarpertandingans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_daftarpertandingan');
            $table->unsignedBigInteger('user_id');
            $table->string('nama');
            $table->text('alamat');
            $table->date('tgl_mulai');
            $table->date('tgl_selesai');
            $table->integer('harga_tiket');
            $table->string('cabang');
            $table->string('level');
            $table->string('jenis');
            $table->timestamps();

            // $table->foreign('id_daftarpertandingan')->references('id_pertandingan')->on('pertandingans');
            // $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daftarpertandingans');
    }
}
