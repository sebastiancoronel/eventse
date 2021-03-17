<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('foto');
            $table->softDeletes();
            $table->timestamps();
        });
        DB::table('categorias')->insert([
          [
            'nombre' => 'Salones',
            'foto' => 'images/categorias/Salon-01.jpg'
          ],
          [
            'nombre' => 'Juegos',
            'foto' => 'images/categorias/Juegos-01.jpg'
          ],
          [
            'nombre' => 'Animación',
            'foto' => 'images/categorias/Animacion-01.jpg'
          ],
          [
            'nombre' => 'Mobiliario',
            'foto' => 'images/categorias/mobiliario1.jpg'
          ],
          [
            'nombre' => 'Catering',
            'foto' => 'images/categorias/catering.jpg'
          ],
          [
            'nombre' => 'Iluminación',
            'foto' => 'images/categorias/iluminacion1.jpg'
          ],
          [
            'nombre' => 'Ornamentación',
            'foto' => 'images/categorias/decoracion1.jpg'
          ],
          [
            'nombre' => 'Música-DJ´s',
            'foto' => 'images/categorias/musicaDj2.jpg'
          ],
          [
            'nombre' => 'Shows',
            'foto' => 'images/categorias/bandas1.jpg'
          ],
          [
            'nombre' => 'Fotografía',
            'foto' => 'images/categorias/3qD0wt6esgBVP5CLlvLJ.jpg'
          ],
          [
            'nombre' => 'Magos',
            'foto' => 'images/categorias/upGc3R6IQRBT1EREQfYK.jpg'
          ],
        ]);
    }//function up

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorias');
    }
}
