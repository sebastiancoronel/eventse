<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInmueblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inmuebles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('foto_1');
            $table->string('foto_2');
            $table->string('foto_3');
            $table->string('foto_4');
            $table->enum('tipo',['Salon','Quinta','Salon infantil','Complejo']);
            $table->string('titulo', 200);
            $table->string('calle');
            $table->string('numero');
            $table->string('barrio');
            $table->string('superficie');
            $table->integer('capacidad');
            $table->string('provincia');
            $table->string('localidad');
            $table->boolean('barra_tragos')->nullable();
            $table->boolean('catering')->nullable();
            $table->boolean('dj')->nullable();
            $table->boolean('mesas_sillas')->nullable();
            $table->boolean('mesa_dulce')->nullable();
            $table->boolean('guardarropas')->nullable();
            $table->boolean('mozos_camareras')->nullable();
            $table->boolean('proyector_pantalla')->nullable();
            $table->boolean('recepcion')->nullable();
            $table->boolean('vajillas')->nullable();
            $table->boolean('wifi')->nullable();
            $table->boolean('piscina')->nullable();
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

        DB::table('inmuebles')->insert([
            [
                'foto_1' => '/images/publicaciones/JumpZone/Salones/2020-06-21/Casa quinta monte grande/foto 1.jpg',
                'foto_2' => '/images/publicaciones/JumpZone/Salones/2020-06-21/Casa quinta monte grande/foto 2.jpg',
                'foto_3' => '/images/publicaciones/JumpZone/Salones/2020-06-21/Casa quinta monte grande/foto 3.jpg',
                'foto_4' => '/images/publicaciones/JumpZone/Salones/2020-06-21/Casa quinta monte grande/foto 4.jpg',
                'tipo' => 'Salon',
                'titulo' => 'Casa quinta monte grande',
                'calle' => 'Las Heras',
                'numero' => '1760',
                'barrio' => 'El Bosque',
                'superficie' => '100',
                'capacidad' => '60',
                'provincia' => 'Rio Negro',
                'localidad' => 'Barrio Colonia Conesa',
                'barra_tragos' => null,
                'catering' => 1,
                'dj' => 1,
                'mesas_sillas' => 1,
                'mesa_dulce' => null,
                'guardarropas' => null,
                'mozos_camareras' => 1,
                'proyector_pantalla' => null,
                'recepcion' => null,
                'vajillas' => 1,
                'wifi' => 1,
                'piscina' => null,
                'precio' => null,
                'precio_a_convenir' => 1,
                'id_categoria' => 1,
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
        Schema::dropIfExists('inmuebles');
    }
}
