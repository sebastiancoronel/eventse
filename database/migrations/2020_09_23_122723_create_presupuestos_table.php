<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresupuestosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presupuestos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_servicio');
            $table->foreign('id_servicio')->references('id')->on('servicios');
            
            $table->integer('id_prestador');
            $table->foreign('id_prestador')->references('id')->on('prestadors');

            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->date('fecha');
            $table->time('hora_desde');
            $table->time('hora_hasta');
            $table->string('direccion');
            $table->string('barrio');
            $table->integer('monto')->nullable();
            $table->enum('estado',['Aceptado','Disponible','No disponible','Sin respuesta','Sin confirmar']);
            $table->string('pregunta',1000)->nullable();
            $table->string('respuesta',1000)->nullable();
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
        Schema::dropIfExists('presupuestos');
    }
}
