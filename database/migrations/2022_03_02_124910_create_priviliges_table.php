<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePriviligesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('priviliges', function (Blueprint $table) {
            $table->id('pri_id');
            $table->unsignedBigInteger('m_id');
            $table->foreign('m_id')->references('m_id')->on('modules');

            $table->unsignedBigInteger('al_id');
            $table->foreign('al_id')->references('al_id')->on('accesslevel');
        });
    }
    public function down()
    {
        Schema::dropIfExists('priviliges');
    }
}
