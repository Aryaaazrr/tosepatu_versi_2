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
        Schema::create('jam_operasional', function (Blueprint $table) {
            $table->unsignedBigInteger('hari_id');
            $table->foreign('hari_id')->references('id')->on('data_hari');
            $table->time('jam_buka');
            $table->time('jam_tutup');
            $table->unsignedBigInteger('wilayah_id');
            $table->foreign('wilayah_id')->references('id')->on('wilayah');
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
        Schema::dropIfExists('jam_operasional');
    }
};
