<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::table('products', function (Blueprint $table) {
            $table->unsignedInteger('id_product_category');
            $table->foreign('id_product_category')->references('id')->on('product_categories');
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->unsignedInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
        });

        Schema::table('events', function (Blueprint $table) {
            $table->unsignedInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
        });

        Schema::table('ideas', function (Blueprint $table) {
            $table->unsignedInteger('id_user');
            $table->unsignedInteger('id_event');
            $table->foreign('id_event')->references('id')->on('events');
            $table->foreign('id_user')->references('id')->on('users');
        });

        Schema::table('pictures', function (Blueprint $table) {
            $table->unsignedInteger('id_user');
            $table->unsignedInteger('id_event');
            $table->foreign('id_event')->references('id')->on('events');
            $table->foreign('id_user')->references('id')->on('users');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->unsignedInteger('id_grade');
            $table->unsignedInteger('id_centre');
            $table->foreign('id_grade')->references('id')->on('grades');
            $table->foreign('id_centre')->references('id')->on('centres');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
