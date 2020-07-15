<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notificacions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_cliente');
            $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->integer('id_prestador');
            $table->foreign('id_prestador')->references('id')->on('prestadors');

            $table->integer('id_inmueble');
            $table->foreign('id_inmueble')->references('id')->on('inmuebles');
            $table->integer('id_juego');
            $table->foreign('id_juego')->references('id')->on('juegos');
            $table->integer('id_animacion');
            $table->foreign('id_animacion')->references('id')->on('animacions');
            $table->integer('id_mobiliario');
            $table->foreign('id_mobiliario')->references('id')->on('mobiliarios');
            $table->integer('id_catering');
            $table->foreign('id_catering')->references('id')->on('caterings');
            $table->integer('id_musicaDj');
            $table->foreign('id_musicaDj')->references('id')->on('musica_djs');
            $table->enum('tipo_actividad',['Nueva pregunta','Nueva respuesta','Alquiler confirmado']);
            $table->string('URL');
            $table->dateTime('hora_envio');
            $table->boolean('leido');
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
        Schema::dropIfExists('notificacions');
    }
}
