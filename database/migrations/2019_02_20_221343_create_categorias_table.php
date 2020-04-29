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
            $table->softDeletes();
            $table->timestamps();
        });
        DB::table('categorias')->insert([
          [
            'nombre' => 'Salones'
          ],
          [
            'nombre' => 'Juegos'
          ],
          [
            'nombre' => 'Animación'
          ],
          [
            'nombre' => 'Mobiliario'
          ],
          [
            'nombre' => 'Catering'
          ],
          [
            'nombre' => 'Iluminación'
          ],
          [
            'nombre' => 'Ornamentación'
          ],
          [
            'nombre' => 'Música & DJ´s'
          ],
          [
            'nombre' => 'Shows & Bandas'
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
