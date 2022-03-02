<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRollpriviligesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rollpriviliges', function (Blueprint $table) {
            $table->id('rp_id');

            $table->unsignedBigInteger('pri_id');
            $table->foreign('pri_id')->references('pri_id')->on('priviliges');

            $table->unsignedBigInteger('roll_id');
            $table->foreign('roll_id')->references('roll_id')->on('rolls');
        });
    }
    public function down()
    {
        Schema::dropIfExists('rollpriviliges');
    }
}
