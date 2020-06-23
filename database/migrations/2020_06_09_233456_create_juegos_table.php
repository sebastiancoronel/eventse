<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJuegosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juegos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('foto_1');
            $table->string('foto_2');
            $table->string('foto_3');
            $table->string('foto_4');
            $table->string('titulo',200);
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

        DB::table('juegos')->insert([
            [
                'foto_1' => '/images/publicaciones/JumpZone/Juegos/2020-06-21/Alquiler de castillos Inflables/foto 1.jpg',
                'foto_2' => '/images/publicaciones/JumpZone/Juegos/2020-06-21/Alquiler de castillos Inflables/foto 2.jpg',
                'foto_3' => '/images/publicaciones/JumpZone/Juegos/2020-06-21/Alquiler de castillos Inflables/foto 3.jpg',
                'foto_4' => '/images/publicaciones/JumpZone/Juegos/2020-06-21/Alquiler de castillos Inflables/foto 4.jpg',
                'titulo' => 'Alquiler Inflables Castillo Tobogan Juegos Cama Zona Norte',
                'descripcion' => 'PROMO DIVERSION 20% Off + 2 Días GRATIS !!! Alquiler de Inflables, Arcade, PlayStation, Karaoke, Metegol y mas!',
                'provincia' => 'Santa Fe',
                'localidad' => 'Angeloni',
                'precio' => 1600,
                'precio_a_convenir' => null,
                'id_categoria' => 2,
                'id_prestador' => 1,
                'fecha_publicacion' => '2020-06-21',
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
        Schema::dropIfExists('juegos');
    }
}
