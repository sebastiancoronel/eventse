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
            $table->string('nombre');
            $table->string('foto');
            $table->string('provincia');
            $table->string('localidad');
            $table->string('direccion')->nullable();
            $table->string('email');
            $table->string('telefono');

            $table->integer('id_categoria')->nullable();
            $table->foreign('id_categoria')->references('id')->on('categorias');

            $table->integer('id_empleados')->nullable();
            $table->foreign('id_empleados')->references('id')->on('empleados');

            $table->integer('id_servicios')->nullable();
            $table->foreign('id_servicios')->references('id')->on('servicios');

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
        Schema::dropIfExists('prestadors');
    }
}
