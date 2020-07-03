<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carritos', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('id_cliente');
            $table->foreign('id_cliente')->references('id')->on('clientes');

            $table->integer('id_inmueble')->nullable();
            $table->foreign('id_inmueble')->references('id')->on('inmuebles');

            $table->integer('id_juego')->nullable();
            $table->foreign('id_juego')->references('id')->on('juegos');

            $table->integer('id_animacion')->nullable();
            $table->foreign('id_animacion')->references('id')->on('animacions');

            $table->integer('id_mobiliario')->nullable();
            $table->foreign('id_mobiliario')->references('id')->on('mobiliarios');

            $table->integer('id_catering')->nullable();
            $table->foreign('id_catering')->references('id')->on('caterings');

            $table->integer('id_musicaDj')->nullable();
            $table->foreign('id_musicaDj')->references('id')->on('musica_djs');

            $table->integer('total')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });

        DB::table('carritos')->insert([
            [
                'id_cliente' => 1,
                'id_inmueble' => null,
                'id_juego' => 1,
                'id_animacion' => null,
                'id_mobiliario' => null,
                'id_catering' => null,
                'id_musicaDj' => null,
                'total' => null,
            ],

            [
                'id_cliente' => 1,
                'id_inmueble' => 1,
                'id_juego' => null,
                'id_animacion' => null,
                'id_mobiliario' => null,
                'id_catering' => null,
                'id_musicaDj' => null,
                'total' => null,
            ],

            [
                'id_cliente' => 1,
                'id_inmueble' => null,
                'id_juego' => null,
                'id_animacion' => 1,
                'id_mobiliario' => null,
                'id_catering' => null,
                'id_musicaDj' => null,
                'total' => null,
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carritos');
    }
}
