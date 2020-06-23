<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCateringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caterings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('foto_1');
            $table->string('foto_2');
            $table->string('foto_3');
            $table->string('foto_4');
            $table->string('titulo',200);
            $table->string('descripcion',1000);
            $table->string('cantidad_invitados');
            $table->boolean('servicio_pizza')->nullable();
            $table->boolean('mesa_dulce')->nullable();
            $table->boolean('pernil')->nullable();
            $table->boolean('coffee_break')->nullable();
            $table->boolean('servicio_lunch')->nullable();
            $table->boolean('servicio_gourmet')->nullable();
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

        DB::table('caterings')->insert([
            [
                'foto_1' => '/images/publicaciones/JumpZone/Catering/2020-06-21/Servicio Catering - Pernil Para Eventos 50 Personas/foto 1.jpg',
                'foto_2' => '/images/publicaciones/JumpZone/Catering/2020-06-21/Servicio Catering - Pernil Para Eventos 50 Personas/foto 2.jpg',
                'foto_3' => '/images/publicaciones/JumpZone/Catering/2020-06-21/Servicio Catering - Pernil Para Eventos 50 Personas/foto 3.jpg',
                'foto_4' => '/images/publicaciones/JumpZone/Catering/2020-06-21/Servicio Catering - Pernil Para Eventos 50 Personas/foto 4.jpg',
                'titulo' => 'Servicio Catering - Pernil Para Eventos 50 Personas',
                'descripcion' => 'Servicio Catering - Pernil Para Eventos 50 PersonasServicio Catering - Pernil Para Eventos 50 PersonasServicio Catering - Pernil Para Eventos 50 PersonasServicio Catering - Pernil Para Eventos 50 PersonasServicio Catering - Pernil Para Eventos 50 PersonasServicio Catering - Pernil Para Eventos 50 PersonasServicio Catering - Pernil Para Eventos 50 PersonasServicio Catering - Pernil Para Eventos 50 PersonasServicio Catering - Pernil Para Eventos 50 PersonasServicio Catering - Pernil Para Eventos 50 PersonasServicio Catering - Pernil Para Eventos 50 PersonasServicio Catering - Pernil Para Eventos 50 PersonasServicio Catering - Pernil Para Eventos 50 PersonasServicio Catering - Pernil Para Eventos 50 PersonasServicio Catering - Pernil Para Eventos 50 PersonasServicio Catering - Pernil Para Eventos 50 PersonasServicio Catering - Pernil Para Eventos 50 PersonasServicio Catering - Pernil Para Eventos 50 PersonasServicio Catering - Pernil Para Eventos 50 PersonasServicio Catering',
                'cantidad_invitados' => '50',
                'servicio_pizza' => null,
                'mesa_dulce' => 1,
                'pernil' => 1,
                'coffee_break' => 1,
                'servicio_lunch' => null,
                'servicio_gourmet' => null,
                'provincia' => 'La Pampa',
                'localidad' => 'Colonia San Jose',
                'precio' => null,
                'precio_a_convenir' => 1,
                'id_categoria' => 5,
                'id_prestador' => 1,
                'fecha_publicacion' => '2020-06-24',
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
        Schema::dropIfExists('caterings');
    }
}
