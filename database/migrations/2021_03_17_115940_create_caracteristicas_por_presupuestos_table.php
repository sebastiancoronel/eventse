<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaracteristicasPorPresupuestosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caracteristicas_por_presupuestos', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_presupuesto');
            $table->foreign('id_presupuesto')->references('id')->on('presupuestos');

            $table->integer('id_servicio');
            $table->foreign('id_servicio')->references('id')->on('servicios');
            
            $table->integer('id_caracteristica');
            $table->foreign('id_caracteristica')->references('id')->on('caracteristicas');

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
        Schema::dropIfExists('caracteristicas_por_presupuestos');
    }
}
