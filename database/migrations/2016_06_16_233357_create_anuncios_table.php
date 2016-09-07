<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnunciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anuncios', function (Blueprint $table) {


            $table->increments('id');
            $table->string('title', 200);
            $table->enum('status', ['no_publicado', 'publicado']);
            $table->string('url', 255);
            $table->string('imagen');
            $table->longText('descripcion');
            $table->longText('posicion', ['superior', 'inferior', 'costado_video_1', 'costado_video_2', 'anuncio_chica'] );
            // para pais solo pondremos unos cuantos paises de latinoamerica, eeuu, y europa
            $table->string('pais');
            // Español e ingles
            $table->string('idioma');
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
        Schema::drop('anuncios');
    }
}
