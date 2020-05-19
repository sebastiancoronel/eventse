<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestadorPorCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestador_por__categorias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_categoria');
            $table->foreign('id_categoria')->references('id')->on('categorias');

            $table->integer('id_prestador');
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
        Schema::dropIfExists('prestador_por__categorias');
    }
}
