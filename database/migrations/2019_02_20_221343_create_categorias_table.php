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
            'foto' => 'Pegar URL de la foto en public'
          ],
          [
            'nombre' => 'Juegos',
            'foto' => 'Pegar URL de la foto en public'
          ],
          [
            'nombre' => 'Animación',
            'foto' => 'Pegar URL de la foto en public'
          ],
          [
            'nombre' => 'Mobiliario',
            'foto' => 'Pegar URL de la foto en public'
          ],
          [
            'nombre' => 'Catering',
            'foto' => 'Pegar URL de la foto en public'
          ],
          // [
          //   'nombre' => 'Iluminación',
          //   'foto' => 'Pegar URL de la foto en public'
          // ],
          // [
          //   'nombre' => 'Ornamentación',
          //   'foto' => 'Pegar URL de la foto en public'
          // ],
          [
            'nombre' => 'Música & DJ´s',
            'foto' => 'Pegar URL de la foto en public'
          ],
          // [
          //   'nombre' => 'Shows & Bandas',
          //   'foto' => 'Pegar URL de la foto en public'
          // ],
          // [
          //   'nombre' => 'Fotógrafía y ediciones',
          //   'foto' => 'Pegar URL de la foto en public'
          // ],
          // [
          //   'nombre' => 'Disfraces',
          //   'foto' => 'Pegar URL de la foto en public'
          // ]
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
