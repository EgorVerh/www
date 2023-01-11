<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksAuthorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books_author', function (Blueprint $table) {
            $table->integer('authors_id')->unsigned()->nullable(false);
            $table->integer('books_id')->unsigned()->nullable(false);
            $table->foreign('authors_id')->references('id')->on('authors');
            $table->foreign('books_id')->references('id')->on('books');
            $table->primary(['authors_id', 'books_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books_author');
    }
}
