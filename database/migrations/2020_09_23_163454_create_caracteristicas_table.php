<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaracteristicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caracteristicas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->softDeletes();
            $table->timestamps();
        });

        DB::table('caracteristicas')->insert([
            // Salones 1 al 8
            ['nombre' => 'Mozos y camareras' ],
            ['nombre' => 'Proyector' ],
            ['nombre' => 'Maquina de humo' ],
            ['nombre' => 'Máquina de espuma' ],
            ['nombre' => 'Inflables y peloteros' ],
            ['nombre' => 'Servicio de pizzas' ],
            ['nombre' => 'Pinta caritas' ],
            ['nombre' => 'Bolsitas' ],
            // Magos 9 al 12
            ['nombre' => 'Shows de magia infantil' ],
            ['nombre' => 'Magia con cartas' ],
            ['nombre' => 'Show de escapismo' ],
            ['nombre' => 'Magia con animales' ],
            // Catering 13 al 15
            ['nombre' => 'Servicio de lunch' ],
            ['nombre' => 'Mozos y camareras' ],
            ['nombre' => 'Coffee break' ],
            // Ornamentacion 16 al 23
            ['nombre' => 'Arreglos florales' ],
            ['nombre' => 'Centros de mesa' ],
            ['nombre' => 'Detalles y recuerdos' ],
            ['nombre' => 'Arreglos con globos' ],
            ['nombre' => 'Decoracion tematica' ],
            ['nombre' => 'Manteleria' ],
            ['nombre' => 'Guirnaldas' ],
            ['nombre' => 'Biombos' ],
            // shows 24 al 31
            ['nombre' => 'Música en vivo' ],
            ['nombre' => 'Circo' ],
            ['nombre' => 'Shows aéreos' ],
            ['nombre' => 'Shows cómicos' ],
            ['nombre' => 'Teatro negro' ],
            ['nombre' => 'Conductores' ],
            ['nombre' => 'Batucadas y coreografías' ],
            ['nombre' => 'Shows de salsa y odaliscas' ],
            // Continua Catering
            ['nombre' => 'Servicio de pizzas' ],
            ['nombre' => 'Fuente de chocolate' ],
            // Juegos 34 al 42
            ['nombre' => 'Inflables' ],
            ['nombre' => 'Peloteros' ],
            ['nombre' => 'Plaza blanda' ],
            ['nombre' => 'Cama elastica' ],
            ['nombre' => 'Metegoles' ],
            ['nombre' => 'Inflables acuaticos' ],
            ['nombre' => 'Mesa de ping pong' ],
            ['nombre' => 'Mesa de tejo' ],
            ['nombre' => 'Deslizables' ],
            // Mobiliario 43 al 47
            ['nombre' => 'Puf luminoso' ],
            ['nombre' => 'Living para niños - 10 invitados' ],
            ['nombre' => 'Living para adultos - 10 invitados' ],
            ['nombre' => 'Mesas y sillas vestidas' ],
            ['nombre' => 'Gazebos' ],
            // Iluminación 48 al 54
            ['nombre' => 'Laser'],
            ['nombre' => 'Luz led'],
            ['nombre' => 'Neon'],
            ['nombre' => 'Esfera espejada'],
            ['nombre' => 'Luz robotica'],
            ['nombre' => 'Luz negra'],
            ['nombre' => 'Esfera led'],
            // Capacidades 55 al 61
            ['nombre' => 'Hasta 30 personas'],
            ['nombre' => 'Hasta 60 personas'],
            ['nombre' => 'Hasta 90 personas'],
            ['nombre' => 'Hasta 120 personas'],
            ['nombre' => 'Hasta 150 personas'],
            ['nombre' => 'Hasta 180 personas'],
            ['nombre' => 'Hasta 200 personas'],
            // Animacion 62 al 70
            ['nombre' => 'Animacion musical'],
            ['nombre' => 'Animacion infantil'],
            ['nombre' => 'Animacion para adultos'],
            ['nombre' => 'Danza'],
            ['nombre' => 'Juegos coreográficos'],
            ['nombre' => 'Humor'],
            ['nombre' => 'Musical'],
            ['nombre' => 'Teatro'],
            ['nombre' => 'Magia'],
            //Fotografia 71 al 81
            ['nombre' => 'Books XV'],
            ['nombre' => 'Books casamientos'],
            ['nombre' => 'Eventos sociales'],
            ['nombre' => 'Corporativo'],
            ['nombre' => 'Preboda'],
            ['nombre' => 'Postboda'],
            ['nombre' => 'Álbum digital'],
            ['nombre' => 'Mini álbumes'],
            ['nombre' => 'Fotografías en alta resolución'],
            ['nombre' => 'Negativos'],
            ['nombre' => 'Blue-ray o DVD con fotografías'],
            // Musica-Djs 82 al 87
            ['nombre' => 'Pantalla 100 pulgadas'],
            ['nombre' => 'Karaoke'],
            ['nombre' => 'Ambientacion DMX'],
            ['nombre' => 'Luces móviles'],
            ['nombre' => 'Pista de baile'],
            ['nombre' => 'Video y proyección'],
            
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('caracteristicas');
    }
}
