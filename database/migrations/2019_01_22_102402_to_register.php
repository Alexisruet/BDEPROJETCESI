<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ToRegister extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('to_register', function (Blueprint $table) {
            $table->unsignedInteger('id_event');
            $table->foreign('id_event')->references('id')->on('events');
            $table->unsignedInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('to_register');
    }
}
