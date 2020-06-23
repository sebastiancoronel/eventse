<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobiliariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobiliarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('foto_1');
            $table->string('foto_2');
            $table->string('foto_3');
            $table->string('foto_4');
            $table->string('titulo',200);
            $table->string('capacidad');
            $table->enum('tipo',['Niños','Adultos']);
            $table->boolean('sillones')->nullable();
            $table->boolean('puf')->nullable();
            $table->boolean('mesas')->nullable();
            $table->boolean('puf_luminoso')->nullable();
            $table->boolean('gazebos')->nullable();
            $table->boolean('carpas')->nullable();
            $table->boolean('caminos')->nullable();
            $table->boolean('fanales')->nullable();
            $table->boolean('farolas')->nullable();
            $table->boolean('biombo')->nullable();
            $table->boolean('mini_living')->nullable();
            $table->boolean('lamparas_vintage')->nullable();
            $table->boolean('camastro')->nullable();
            $table->boolean('puf_redondo')->nullable();
            $table->boolean('isla_circular')->nullable();
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

        DB::table('mobiliarios')->insert([
            [
                'foto_1' => '/images/publicaciones/JumpZone/Mobiliario/2020-06-21/Mobiliario - Puff mesas islas y más/foto 1.jpg',
                'foto_2' => '/images/publicaciones/JumpZone/Mobiliario/2020-06-21/Mobiliario - Puff mesas islas y más/foto 2.jpg',
                'foto_3' => '/images/publicaciones/JumpZone/Mobiliario/2020-06-21/Mobiliario - Puff mesas islas y más/foto 3.jpg',
                'foto_4' => '/images/publicaciones/JumpZone/Mobiliario/2020-06-21/Mobiliario - Puff mesas islas y más/foto 4.jpg',
                'titulo' => 'Alquiler Muebles Luminosos - Catarata De Luz Mesas Piña',
                'capacidad' => '44',
                'tipo' => 'adultos',
                'sillones' => null,
                'puf' => 1,
                'gazebos' => 1,
                'carpas' => 1,
                'fanales' => null,
                'farolas' => null,
                'biombo' => 1,
                'mini_living' => null,
                'lamparas_vintage' => null,
                'camastro' => null,
                'puf_redondo' => null,
                'isla_circular' => null,
                'provincia' => 'Santiago Del Esteor',
                'localidad' => 'La Banda',
                'descripcion' => 'EL COMBO INCLUYE: - 1 Catarata Luminosa (Blanca Cálida 3 Metros de ancho x 2,80 metros de alto; Blanca Fría o Azul 4 Metros de Ancho x 2,80 metros de alto). - 4 Mesas Ratonas de Piña (50 cm de ancho x 50 cm de alto). - 1 Hielera (Grande 36 cm de ancho x 28 cm de alto; Chica 26 cm de ancho x 30 cm de alto) *ENTRAN TODOS EN TU AUTO; TE AHORRAS EL FLETE!',
                'precio' => 2700,
                'precio_a_convenir' => null,
                'id_categoria' => 4,
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
        Schema::dropIfExists('mobiliarios');
    }
}
