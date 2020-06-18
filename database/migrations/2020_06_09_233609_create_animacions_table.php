<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animacions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('foto_1');
            $table->string('foto_2');
            $table->string('foto_3');
            $table->string('foto_4');
            $table->string('titulo',200);
            $table->string('cant_animadores');
            $table->string('años_experiencia');
            $table->enum('edades',['1-6 años','6-12 años','13-17 años','+18 años']);
            $table->string('descripcion',1000);
            $table->string('magos')->nullable();
            $table->string('maquillaje')->nullable();
            $table->string('karaoke')->nullable();
            $table->string('payasos')->nullable();
            $table->string('personajes')->nullable();
            $table->string('titeres')->nullable();
            $table->string('globologia')->nullable();
            $table->string('robot_led')->nullable();
            $table->string('maquillaje_fluor')->nullable();
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
        Schema::dropIfExists('animacions');
    }
}
