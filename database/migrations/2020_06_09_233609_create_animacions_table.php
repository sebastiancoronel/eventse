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
            $table->string('provincia');
            $table->string('localidad');
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

        DB::table('animacions')->insert([
            [
                'foto_1' => '/images/publicaciones/JumpZone/Animación/2020-06-21/Animacion los peques/foto 1.jpg',
                'foto_2' => '/images/publicaciones/JumpZone/Animación/2020-06-21/Animacion los peques/foto 2.jpg',
                'foto_3' => '/images/publicaciones/JumpZone/Animación/2020-06-21/Animacion los peques/foto 3.jpg',
                'foto_4' => '/images/publicaciones/JumpZone/Animación/2020-06-21/Animacion los peques/foto 4.jpg',
                'titulo' => 'Alquiler Inflables Castillo Tobogan Juegos Cama Zona Norte',
                'cant_animadores' => '13',
                'años_experiencia' => '10',
                'edades' => '1-6 años',
                'descripcion' => 'ANIMACIÓN: Las animaciones consisten en bailes, karaoke, juegos para chicos y adultos, dinámicas, concursos, integraciones grupales, cantamos cumpleaños y los organizamos para el momento de la piñata!!',
                'provincia' => 'Santa Fe',
                'localidad' => 'Rosario',
                'magos' => null,
                'maquillaje' => 1,
                'karaoke' => 1,
                'payasos' => 1,
                'personajes' => null,
                'titeres' => null,
                'globologia' => 1,
                'robot_led' => null,
                'maquillaje_fluor' => null,
                'precio' => 6000,
                'precio_a_convenir' => null,
                'id_categoria' => 3,
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
        Schema::dropIfExists('animacions');
    }
}
