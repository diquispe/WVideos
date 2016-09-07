<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {


            $table->increments('id');
            $table->string('title', 200);
            $table->enum('status', ['almacenado', 'publicado', 'revisado']);
            $table->string('url', 255);

            $table->integer('user_id')->unsigned(); // Vinculado a una categoria
            $table->foreign('user_id')->references('id')->on('users'); // Vinculado a una

            $table->integer('category_id')->unsigned(); // creamos la categoria a vincular
            $table->foreign('category_id')->references('id')->on('categories')->nullable(); // Vinculado a una categoria

            $table->string('id_video');
            $table->longText('descripcion');
            $table->longText('duracion');
            $table->boolean('publicado')->default(false);
            $table->boolean('revisado')->default(false);
            $table->string('imagen1');
            $table->string('imagen2');
            $table->string('imagen3');
            $table->string('imagen_principal');




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
        Schema::drop('videos');
    }
}
