<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chicas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('url')->unique();
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('lastname');
            $table->string('nickname');
            $table->string('phone');
            $table->string('image');

            $table->string('photo1');
            $table->string('photo2');
            $table->string('photo3');
            $table->string('photo4');
            $table->string('photo5');
            $table->string('photo6');
            $table->string('photo7');
            $table->string('photo8');
            $table->string('photo9');
            $table->string('photo10');

            $table->string('resumen');
            $table->string('medidas');
            $table->string('atencion');
            $table->string('horario');
            $table->string('edad');

            // aqui tambien agregar un enlace a la tabla relacional de galeria

            $table->string('pais');
            $table->string('ciudad');
            $table->rememberToken();
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
        Schema::drop('chicas');
    }
}
