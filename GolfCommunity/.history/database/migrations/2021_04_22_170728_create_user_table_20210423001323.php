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
