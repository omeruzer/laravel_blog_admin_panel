<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('picture')->nullable();
            $table->string('title');
            $table->string('slug');
            $table->bigInteger('category')->unsigned();
            $table->bigInteger('author')->unsigned();
            $table->integer('hit')->default(0);
            $table->longText('keywords');
            $table->longText('desc');
            $table->longText('content');
            $table->timestamps();

            $table->foreign('category')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('author')->references('id')->on('authors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
