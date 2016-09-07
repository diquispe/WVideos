<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_votes', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned(); // que usuario voto
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->integer('video_id')->unsigned(); // que usuario voto
            $table->foreign('video_id')->references('id')->on('videos')->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('video_votes');
    }
}
