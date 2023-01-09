<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsers2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booksonpolka', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('idpolka')->unsigned();
            $table->foreign('idpolka')->references('id')->on('shkaf');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booksonpolka');
    }
}
