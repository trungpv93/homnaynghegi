<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostMetaTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('post_metas', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('post_id')->unsigned();
            $table->string('key');
            $table->text('value')->nullable();
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
        Schema::drop('post_metas');
    }
}
