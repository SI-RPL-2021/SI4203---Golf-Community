<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id_user');
            $table->string('nama_lengkap', 50);
            $table->string('username', 50);
            $table->string('email', 50);
            $table->string('password', 50);
            $table->date('tgl_lahir');
            $table->string('jk', 50);
            $table->text('alamat');
            $table->string('no_telp', 20);
            $table->string('jabatan', 20);
            $table->string('level', 20);
            $table->timestamps();
        });

        
        Schema::create('pertandingan', function (Blueprint $table) {
            $table->increments('id_pertandingan');
            $table->string('nama', 50);
            $table->string('lapangan', 50);
            $table->text('alamat');
            $table->date('tgl_mulai');
            $table->date('tgl_selesai');
            $table->integer('harga_tiket', 50);
            $table->string('cabang', 50);
            $table->string('level', 50);
            $table->text('detail');
            $table->string('deskripsi_singkat', 200);
            $table->integer('jumlah_pemain', 20);
            $table->string('gambar', 200);
            $table->string('jenis', 50);
            $table->integer('kuota_pemain', 20);
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
        Schema::dropIfExists('user');
    }
}
