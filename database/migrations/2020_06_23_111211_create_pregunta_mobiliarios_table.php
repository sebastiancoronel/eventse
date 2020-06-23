<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreguntaMobiliariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pregunta_mobiliarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_prestador');
            $table->foreign('id_prestador')->references('id')->on('prestadors');

            $table->integer('id_mobiliario');
            $table->foreign('id_mobiliario')->references('id')->on('mobiliarios');

            $table->integer('id_cliente');
            $table->foreign('id_cliente')->references('id')->on('clientes')
            ;
            $table->string('pregunta',300)->nullable();
            $table->string('respuesta',300)->nullable();
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
        Schema::dropIfExists('pregunta_mobiliarios');
    }
}