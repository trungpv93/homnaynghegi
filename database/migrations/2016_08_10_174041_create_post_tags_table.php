<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTagsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('post_tags', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('post_id')->unsigned();
            $table->integer('user_id');
            $table->string('tag');
            $table->timestamps();

            $table->foreign('post_id')->references('id')->on('posts')
                  ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('post_tags');
    }
}
