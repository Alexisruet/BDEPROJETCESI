<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ToContain extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('to_contain', function (Blueprint $table) {
            $table->unsignedInteger('id_product');
            $table->foreign('id_product')->references('id')->on('products');
            $table->unsignedInteger('id_order');
            $table->foreign('id_order')->references('id')->on('orders');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('to_contain');
    }
}
