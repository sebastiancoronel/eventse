<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo');
            $table->string('texto');
            $table->string('url_redirect');
            $table->timestamps();
        });

        DB::table('eventos')->insert([
            [
                'tipo' => 'Pregunta',
                'texto' => 'Tienes una nueva pregunta',
                'url_redirect' => '/home/preguntas-recibidas'
            ],

            [
                'tipo' => 'Solicitud',
                'texto' => 'Tienes una nueva solicitud de un presupuesto',
                'url_redirect' => '/home/presupuestos-recibidos'
            ],

            [
                'tipo' => 'Confirmacion',
                'texto' => 'Tienes una confirmación de un presupuesto',
                'url_redirect' => 'Falta'
            ],

            [
                'tipo' => 'Respuesta',
                'texto' => 'Te respondieron tu pregunta',
                'url_redirect' => '/home/respuestas-recibidas'
            ],

            [
                'tipo' => 'Respuesta presupuesto',
                'texto' => 'Te respondieron a tu solicitud de presupuesto',
                'url_redirect' => 'Falta'
            ],


        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
}
