<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaracteristicaPorCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caracteristica_por_categorias', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_categoria');
            $table->foreign('id_categoria')->references('id')->on('categorias');

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
        Schema::dropIfExists('caracteristica_por_categorias');
    }
}
