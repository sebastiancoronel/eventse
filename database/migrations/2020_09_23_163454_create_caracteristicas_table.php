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
            ['nombre' => 'Mozos y camareras' ],
            ['nombre' => 'Proyector' ],
            ['nombre' => 'Maquina de humo' ],
            ['nombre' => 'Máquina de espuma' ],
            ['nombre' => 'Inflables y peloteros' ],
            ['nombre' => 'Servicio de pizzas' ],
            ['nombre' => 'Pinta caritas' ],
            ['nombre' => 'Bolsitas' ],
            ['nombre' => 'Shows de magia infantil' ],
            ['nombre' => 'Magia con cartas' ],
            ['nombre' => 'Show de escapismo' ],
            ['nombre' => 'Magia con animales' ],
            ['nombre' => 'Servicio de lunch' ],
            ['nombre' => 'Mozos y camareras' ],
            ['nombre' => 'Coffee break' ],
            ['nombre' => 'Arreglos florales' ],
            ['nombre' => 'Centros de mesa' ],
            ['nombre' => 'Detalles y recuerdos' ],
            ['nombre' => 'Arreglos con globos' ],
            ['nombre' => 'Decoracion tematica' ],
            ['nombre' => 'Manteleria' ],
            ['nombre' => 'Guirnaldas' ],
            ['nombre' => 'Biombos' ],
            ['nombre' => 'Música en vivo' ],
            ['nombre' => 'Circo' ],
            ['nombre' => 'Shows aéreos' ],
            ['nombre' => 'Shows cómicos' ],
            ['nombre' => 'Teatro negro' ],
            ['nombre' => 'Conductores' ],
            ['nombre' => 'Batucadas y coreografías' ],
            ['nombre' => 'Shows de salsa y odaliscas' ],
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
