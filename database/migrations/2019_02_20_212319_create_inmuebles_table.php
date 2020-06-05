<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInmueblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inmuebles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('calle')->nullable();
            $table->string('numero')->nullable();
            $table->string('barrio')->nullable();
            $table->string('tipo')->nullable();
            $table->boolean('barra_tragos')->default(0);
            $table->boolean('catering')->default(0);
            $table->boolean('dj')->default(0);
            $table->boolean('mesas_sillas')->default(0);
            $table->boolean('mesa_dulce')->default(0);
            $table->boolean('guardarropas')->default(0);
            $table->boolean('mozos_camareras')->default(0);
            $table->boolean('proyector_pantalla')->default(0);
            $table->boolean('recepcion')->default(0);
            $table->boolean('vajillas')->default(0);
            $table->boolean('wifi')->default(0);
            $table->boolean('piscina')->default(0);

            $table->integer('id_servicio_inmueble')->unsigned();
            $table->foreign('id_servicio_inmueble')->references('id')->on('servicio_inmuebles');

            $table->integer('id_categoria')->unsigned();
            $table->foreign('id_categoria')->references('id')->on('categorias');
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
        Schema::dropIfExists('inmuebles');
    }
}
