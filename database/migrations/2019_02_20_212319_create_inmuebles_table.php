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
            $table->string('foto_1');
            $table->string('foto_2');
            $table->string('foto_3');
            $table->string('foto_4');
            $table->enum('tipo',['Salon','Quinta','Salon infantil','Complejo']);
            $table->string('nombre');
            $table->string('calle');
            $table->string('numero');
            $table->string('barrio');
            $table->double('superficie', 8, 2);
            $table->integer('capacidad');
            $table->string('provincia');
            $table->string('localidad');
            $table->boolean('barra_tragos')->nullable();
            $table->boolean('catering')->nullable();
            $table->boolean('dj')->nullable();
            $table->boolean('mesas_sillas')->nullable();
            $table->boolean('mesa_dulce')->nullable();
            $table->boolean('guardarropas')->nullable();
            $table->boolean('mozos_camareras')->nullable();
            $table->boolean('proyector_pantalla')->nullable();
            $table->boolean('recepcion')->nullable();
            $table->boolean('vajillas')->nullable();
            $table->boolean('wifi')->nullable();
            $table->boolean('piscina')->nullable();
            $table->integer('precio')->nullable();
            $table->boolean('precio_a_convenir')->nullable();
            $table->date('fecha_publicacion');
            $table->integer('id_categoria')->unsigned();
            $table->foreign('id_categoria')->references('id')->on('categorias');
            $table->integer('id_prestador')->unsigned();
            $table->foreign('id_prestador')->references('id')->on('prestadors');
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
