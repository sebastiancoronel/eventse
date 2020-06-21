<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobiliariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobiliarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('foto_1');
            $table->string('foto_2');
            $table->string('foto_3');
            $table->string('foto_4');
            $table->string('titulo',200);
            $table->string('capacidad');
            $table->enum('tipo',['Niños','Adultos']);
            $table->boolean('sillones')->nullable();
            $table->boolean('puf')->nullable();
            $table->boolean('mesas')->nullable();
            $table->boolean('puf_luminoso')->nullable();
            $table->boolean('gazebos')->nullable();
            $table->boolean('carpas')->nullable();
            $table->boolean('caminos')->nullable();
            $table->boolean('fanales')->nullable();
            $table->boolean('farolas')->nullable();
            $table->boolean('biombo')->nullable();
            $table->boolean('mini_living')->nullable();
            $table->boolean('lamparas_vintage')->nullable();
            $table->boolean('camastro')->nullable();
            $table->boolean('puf_redondo')->nullable();
            $table->boolean('isla_circular')->nullable();
            $table->string('descripcion',1000);
            $table->string('provincia');
            $table->string('localidad');
            $table->integer('precio')->nullable();
            $table->boolean('precio_a_convenir')->nullable();
            $table->integer('id_categoria')->unsigned();
            $table->foreign('id_categoria')->references('id')->on('categorias');
            $table->integer('id_prestador')->unsigned();
            $table->foreign('id_prestador')->references('id')->on('prestadors');
            $table->date('fecha_publicacion');
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
        Schema::dropIfExists('mobiliarios');
    }
}
