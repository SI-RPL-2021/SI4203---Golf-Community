<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePertandinganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertandingan', function (Blueprint $table) {
            $table->increments('id_pertandingan');
            $table->string('nama', 50);
            $table->string('lapangan', 50);
            $table->text('alamat');
            $table->date('tgl_mulai');
            $table->date('tgl_selesai');
            $table->string('email', 50);
            $table->string('password', 50);
            $table->string('jk', 50);
            $table->string('no_telp', 20);
            $table->string('jabatan', 20);
            $table->string('level', 20);
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
        Schema::dropIfExists('pertandingan');
    }
}
