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

        DB::table('caracteristica_por_categorias')->insert([
            [
                'id_categoria' => 1,
                'id_caracteristica' => 1
            ],
            [
                'id_categoria' => 1,
                'id_caracteristica' => 2
            ],
            [
                'id_categoria' => 1,
                'id_caracteristica' => 3
            ],
            [
                'id_categoria' => 1,
                'id_caracteristica' => 4
            ],
            [
                'id_categoria' => 1,
                'id_caracteristica' => 5
            ],
            [
                'id_categoria' => 1,
                'id_caracteristica' => 6
            ],
            [
                'id_categoria' => 1,
                'id_caracteristica' => 7
            ],
            [
                'id_categoria' => 1,
                'id_caracteristica' => 8
            ],
            [
                'id_categoria' => 12,
                'id_caracteristica' => 9
            ],
            [
                'id_categoria' => 12,
                'id_caracteristica' => 10
            ],
            [
                'id_categoria' => 12,
                'id_caracteristica' => 11
            ],
            [
                'id_categoria' => 12,
                'id_caracteristica' => 12
            ],
            [
                'id_categoria' => 5,
                'id_caracteristica' => 13
            ],
            [
                'id_categoria' => 5,
                'id_caracteristica' => 14
            ],
            [
                'id_categoria' => 5,
                'id_caracteristica' => 15
            ],
            [
                'id_categoria' => 7,
                'id_caracteristica' => 16
            ],
            [
                'id_categoria' => 7,
                'id_caracteristica' => 17
            ],
            [
                'id_categoria' => 7,
                'id_caracteristica' => 18
            ],
            [
                'id_categoria' => 7,
                'id_caracteristica' => 19
            ],
            [
                'id_categoria' => 7,
                'id_caracteristica' => 20
            ],
            [
                'id_categoria' => 7,
                'id_caracteristica' => 21
            ],
            [
                'id_categoria' => 7,
                'id_caracteristica' => 22
            ],
            [
                'id_categoria' => 7,
                'id_caracteristica' => 23
            ],
            [
                'id_categoria' => 9,
                'id_caracteristica' => 24
            ],
            [
                'id_categoria' => 9,
                'id_caracteristica' => 25
            ],
            [
                'id_categoria' => 9,
                'id_caracteristica' => 26
            ],
            [
                'id_categoria' => 9,
                'id_caracteristica' => 27
            ],
            [
                'id_categoria' => 9,
                'id_caracteristica' => 28
            ],
            [
                'id_categoria' => 9,
                'id_caracteristica' => 29
            ],
            [
                'id_categoria' => 9,
                'id_caracteristica' => 30
            ],
            [
                'id_categoria' => 9,
                'id_caracteristica' => 31
            ],
            [
                'id_categoria' => 5,
                'id_caracteristica' => 32
            ],
            [
                'id_categoria' => 5,
                'id_caracteristica' => 33
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
        Schema::dropIfExists('caracteristica_por_categorias');
    }
}
