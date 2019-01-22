<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ToComment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('to_comment', function (Blueprint $table) {
            $table->string('content');
            $table->unsignedInteger('id_picture');
            $table->foreign('id_picture')->references('id')->on('pictures');
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
        Schema::dropIfExists('to_comment');
    }
}