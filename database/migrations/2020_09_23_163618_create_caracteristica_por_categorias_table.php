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
