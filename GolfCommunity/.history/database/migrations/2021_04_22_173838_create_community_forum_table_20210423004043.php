<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommunityForumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('community_forum', function (Blueprint $table) {
            $table->increments('id_community_forum');
            $table->integer('id_user');
            $table->string('gambar');
            $table->string('judul');
            $table->date('tgl_posting');
            $table->text('deskripsi');
            $table->string('kategori');
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
        Schema::dropIfExists('community_forum');
    }
}
