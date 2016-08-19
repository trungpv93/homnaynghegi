<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned();
            $table->text('title')->default('...');;
            $table->text('body')->default('...');;
            $table->string('shortlink')->unique();
            $table->bigInteger('click')->default(0);
            $table->bigInteger('click_short_link')->default(0);
            $table->bigInteger('view')->default(0);
            $table->bigInteger('reshared')->default(0);
            $table->boolean('is_privated')->default(false);
            $table->boolean('is_deleted')->default(false);
            $table->integer('type_id')->unsigned();

            $table->timestamps();

            $table->foreign('type_id')->references('id')->on('post_types')
                  ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
