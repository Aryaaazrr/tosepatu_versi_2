<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berita', function (Blueprint $table) {
            $table->id();
            $table->string('nama_berita');
            $table->string('foto_berita');
            $table->string('description_berita');
            $table->integer('potongan');
            $table->unsignedBigInteger('kategori_berita_id');
            $table->foreign('kategori_berita_id')->references('id')->on('kategori_berita');
            $table->tinyInteger('status_berita', false, false)->default(1);
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
        Schema::dropIfExists('berita');
    }
};
