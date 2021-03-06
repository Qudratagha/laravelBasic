<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccesslevelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accesslevel', function (Blueprint $table) {
            $table->id('al_id');
            $table->string('al_name');
        });
    }
    public function down()
    {
        Schema::dropIfExists('accesslevel');
    }
}
