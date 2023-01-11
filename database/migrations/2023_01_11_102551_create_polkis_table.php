<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePolkisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('polkis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('shkaf_id')->unsigned()->nullable(false);
            $table->foreign('shkaf_id')->references('id')->on('shkaf');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('polkis');
    }
}
