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
            $table->integer(''); COMPLETAR ESTO PARA VER QUIEN MANDA LA NOTIFICACION
            $table->foreign('');
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
