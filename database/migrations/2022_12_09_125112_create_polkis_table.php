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
            $table->integer('shkaf_id');
            $table->string('name');
            $table->primary('shkaf_id');
            $table->foreign('shkaf_id')->references('id')->on('shkaf')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('polkis');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
