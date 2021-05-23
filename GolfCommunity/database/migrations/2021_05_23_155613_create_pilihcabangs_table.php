<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePilihcabangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pilihcabangs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_daftarpertandingan');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('id_cabang')
            $table->timestamps();

            $table->foreign('id_daftarpertandingan')->references('id_pertandingan')->on('pertandingans');
            $table->foreign('cabang')->references('cabang')->on('pertandingans');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pilihcabangs');
    }
}
