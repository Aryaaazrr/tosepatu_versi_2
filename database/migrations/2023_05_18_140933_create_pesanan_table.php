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
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id();
            $table->string('id_pesanan', 15);
            $table->unsignedBigInteger('pengiriman_id');
            $table->foreign('pengiriman_id')->references('id')->on('metode_pengiriman');
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users');
            $table->unsignedBigInteger('users_mobile_id');
            $table->foreign('users_mobile_id')->references('id')->on('users_mobile');
            $table->integer('grand_total', false, false);
            $table->integer('biaya_tambahan', false, false);
            $table->string('alamat');
            $table->text('catatan');
            $table->enum('status_pesanan', ['Menunggu Konfirmasi', 'Proses', 'Selesai', 'Dibatalkan']);
            $table->unsignedBigInteger('wilayah_id');
            $table->foreign('wilayah_id')->references('id')->on('wilayah');
            $table->unsignedBigInteger('berita_id');
            $table->foreign('berita_id')->references('id')->on('berita');
            $table->string('nota');
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
        Schema::dropIfExists('pesanan');
    }
};
