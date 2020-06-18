<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMusicaDjsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musica_djs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('foto_1');
            $table->string('foto_2');
            $table->string('foto_3');
            $table->string('foto_4');
            $table->string('titulo');
            $table->boolean('cumpleaños_infantiles')->nullable();
            $table->boolean('cumpleaños_adultos')->nullable();
            $table->boolean('fiestas_tematicas')->nullable();
            $table->boolean('comuniones')->nullable();
            $table->boolean('bodas_y_aniversarios')->nullable();
            $table->boolean('musica_70')->nullable();
            $table->boolean('musica_80')->nullable();
            $table->boolean('musica_90')->nullable();
            $table->boolean('musica_2000')->nullable();
            $table->boolean('clasicos')->nullable();
            $table->boolean('cumbia')->nullable();
            $table->boolean('cuarteto')->nullable();
            $table->boolean('reggaeton')->nullable();
            $table->boolean('bachata')->nullable();
            $table->string('descripcion');
            $table->string('provincia');
            $table->string('localidad');
            $table->integer('precio')->nullable();
            $table->boolean('precio_a_convenir')->nullable();
            $table->integer('id_categoria')->unsigned();
            $table->foreign('id_categoria')->references('id')->on('categorias');
            $table->integer('id_prestador')->unsigned();
            $table->foreign('id_prestador')->references('id')->on('prestadors');
            $table->date('fecha_publicacion');
            $table->softDeletes();
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
        Schema::dropIfExists('musica_djs');
    }
}