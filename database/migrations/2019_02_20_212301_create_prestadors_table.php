<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestadors', function (Blueprint $table) {
            $table->increments('id');
            // Datos personales //
            $table->string('dni');
            $table->string('email');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('telefono');
            $table->string('telefono_opcional');
            // Datos del negocio //
            $table->string('nombre_fantasia')->nullable();
            $table->string('foto')->nullable();
            // Relacion con localidad //
            $table->integer('id_localidad')->unsigned()->nullable();
            $table->foreign('id_localidad')->references('id')->on('localidads');
            // Relacion con Empleados //
            $table->integer('id_empleados')->unsigned()->nullable();
            $table->foreign('id_empleados')->references('id')->on('empleados');
            // Relacion con Inmuebles //
            $table->integer('id_inmueble')->unsigned()->nullable();
            $table->foreign('id_inmueble')->references('id')->on('inmuebles');
            // Relacion con Servicio //
            $table->integer('id_servicio')->unsigned()->nullable();
            $table->foreign('id_servicio')->references('id')->on('servicios');
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
        Schema::dropIfExists('prestadors');
    }
}
