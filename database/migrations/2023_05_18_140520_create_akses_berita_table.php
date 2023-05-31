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
        Schema::create('akses_berita', function (Blueprint $table) {
            $table->unsignedBigInteger('wilayah_id');
            $table->foreign('wilayah_id')->references('id')->on('wilayah');
            $table->unsignedBigInteger('berita_id');
            $table->foreign('berita_id')->references('id')->on('berita');
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
        Schema::dropIfExists('akses_berita');
    }
};
