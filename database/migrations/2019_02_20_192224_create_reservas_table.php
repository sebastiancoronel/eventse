<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->time('hora_desde');
            $table->time('hora_hasta');
            $table->string('direccion');
            $table->string('barrio');
            $table->integer('monto');
            // $table->enum('tipo_pago',['Efectivo','Home Banking'])->nullable();
            // $table->enum('estado_pago',['Pagado','Pendiente'])->nullable();
            $table->boolean('concretado')->nullable();
            $table->boolean('opinion_agregada')->nullable();

            $table->integer('id_servicio')->unsigned();
            $table->foreign('id_servicio')->references('id')->on('servicios');
            
            $table->integer('id_prestador')->unsigned();
            $table->foreign('id_prestador')->references('id')->on('prestadors');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('reservas');
    }
}
