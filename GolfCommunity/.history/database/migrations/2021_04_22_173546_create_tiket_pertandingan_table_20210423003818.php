<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiketPertandinganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiket_pertandingan', function (Blueprint $table) {
            $table->increments('id_tiket_pertandingan');
            $table->integer('id_user');
            $table->integer('id_pertandingan');
            $table->date('tgl_beli');
            $table->integer('jumlah');
            $table->integer('total_harga');
            $table->string('kode');
            $table->string('status');
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
        Schema::dropIfExists('tiket_pertandingan');
    }
}
