<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_datos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('dni');
            $table->string('provincia');
            $table->string('ciudad');
            $table->string('telefono');
            $table->string('fecha_de_alta');
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
        Schema::dropIfExists('user_datos');
    }
}
