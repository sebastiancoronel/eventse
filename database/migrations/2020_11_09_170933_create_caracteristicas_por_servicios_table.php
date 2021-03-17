<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaracteristicasPorServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caracteristicas_por_servicios', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_servicio');
            $table->foreign('id_servicio')->references('id')->on('servicios');
            
            $table->integer('id_caracteristica');
            $table->foreign('id_caracteristica')->references('id')->on('servicios');
            $table->softDeletes();
            $table->timestamps();
        });

        DB::table('caracteristicas_por_servicios')->insert([
            [
                'id_servicio' => 6,
                'id_caracteristica' => 9

            ],
            [
                'id_servicio' => 6,
                'id_caracteristica' => 10

            ],
            [
                'id_servicio' => 8,
                'id_caracteristica' => 16

            ],
            [
                'id_servicio' => 5,
                'id_caracteristica' => 13

            ],
            [
                'id_servicio' => 7,
                'id_caracteristica' => 15

            ],
            [
                'id_servicio' => 5,
                'id_caracteristica' => 15

            ],
            [
                'id_servicio' => 1,
                'id_caracteristica' => 5

            ],
            [
                'id_servicio' => 1,
                'id_caracteristica' => 3

            ],
            [
                'id_servicio' => 1,
                'id_caracteristica' => 7

            ],
            [
                'id_servicio' => 1,
                'id_caracteristica' => 1

            ],
            [
                'id_servicio' => 8,
                'id_caracteristica' => 17

            ],
            [
                'id_servicio' => 8,
                'id_caracteristica' => 20

            ],
            [
                'id_servicio' => 8,
                'id_caracteristica' => 22

            ],
            [
                'id_servicio' => 9,
                'id_caracteristica' => 24

            ],
            [
                'id_servicio' => 9,
                'id_caracteristica' => 25

            ],
            [
                'id_servicio' => 9,
                'id_caracteristica' => 26

            ],
            [
                'id_servicio' => 9,
                'id_caracteristica' => 28

            ],
            [
                'id_servicio' => 7,
                'id_caracteristica' => 13

            ],
            [
                'id_servicio' => 10,
                'id_caracteristica' => 14

            ],
            [
                'id_servicio' => 10,
                'id_caracteristica' => 15

            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('caracteristicas_por_servicios');
    }
}
