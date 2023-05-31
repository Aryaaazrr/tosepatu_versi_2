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
        Schema::create('users_mobile', function (Blueprint $table) {
            $table->id();
            $table->string('id_users')->unique();
            $table->string('username');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('no_telp', 15)->unique();
            $table->string('foto');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users_mobile');
    }
};
