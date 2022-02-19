<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id('productID');
            $table->unsignedBigInteger('categoryID');
            $table->string('product');
            $table->dateTime('dateCreated');
            $table->unsignedBigInteger('createdByUserID');

            $table->foreign('categoryID')->references('categoryID')->on('category');

            $table->foreign('createdByUserID')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
