<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMusicaDjsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musica_djs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('foto_1');
            $table->string('foto_2');
            $table->string('foto_3');
            $table->string('foto_4');
            $table->string('titulo',200);
            $table->boolean('cumpleaños_infantiles')->nullable();
            $table->boolean('cumpleaños_adultos')->nullable();
            $table->boolean('fiestas_tematicas')->nullable();
            $table->boolean('comuniones')->nullable();
            $table->boolean('bodas_y_aniversarios')->nullable();
            $table->boolean('musica_70')->nullable();
            $table->boolean('musica_80')->nullable();
            $table->boolean('musica_90')->nullable();
            $table->boolean('musica_2000')->nullable();
            $table->boolean('clasicos')->nullable();
            $table->boolean('cumbia')->nullable();
            $table->boolean('cuarteto')->nullable();
            $table->boolean('reggaeton')->nullable();
            $table->boolean('bachata')->nullable();
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

        DB::table('musica_djs')->insert([
            [
                'foto_1' => '/images/publicaciones/JumpZone/Música-DJ´s/2020-06-21/Dj, Sonido, Iluminación, Pantalla, Humo. Travel Music/foto 1.jpg',
                'foto_2' => '/images/publicaciones/JumpZone/Música-DJ´s/2020-06-21/Dj, Sonido, Iluminación, Pantalla, Humo. Travel Music/foto 2.jpg',
                'foto_3' => '/images/publicaciones/JumpZone/Música-DJ´s/2020-06-21/Dj, Sonido, Iluminación, Pantalla, Humo. Travel Music/foto 3.jpg',
                'foto_4' => '/images/publicaciones/JumpZone/Música-DJ´s/2020-06-21/Dj, Sonido, Iluminación, Pantalla, Humo. Travel Music/foto 4.png',
                'titulo' => 'Dj, Sonido, Iluminación, Pantalla, Humo. Travel Music',
                'cumpleaños_infantiles' => 1,
                'cumpleaños_adultos' => 1,
                'fiestas_tematicas' => 1,
                'comuniones' => 1,
                'bodas_y_aniversarios' => 1,
                'musica_70' => null,
                'musica_80' => null,
                'musica_90' => null,
                'musica_2000' => null,
                'clasicos' => null,
                'cumbia' => 1,
                'cuarteto' => 1,
                'reggaeton' => 1,
                'bachata' => null,
                'descripcion' => 'Servicio Catering - Pernil Para Eventos 50 PersonasServicio Catering - Pernil Para Eventos 50 PersonasServicio Catering - Pernil Para Eventos 50 PersonasServicio Catering - Pernil Para Eventos 50 PersonasServicio Catering - Pernil Para Eventos 50 PersonasServicio Catering - Pernil Para Eventos 50 PersonasServicio Catering - Pernil Para Eventos 50 PersonasServicio Catering - Pernil Para Eventos 50 PersonasServicio Catering - Pernil Para Eventos 50 PersonasServicio Catering - Pernil Para Eventos 50 PersonasServicio Catering - Pernil Para Eventos 50 PersonasServicio Catering - Pernil Para Eventos 50 PersonasServicio Catering - Pernil Para Eventos 50 PersonasServicio Catering - Pernil Para Eventos 50 PersonasServicio Catering - Pernil Para Eventos 50 PersonasServicio Catering - Pernil Para Eventos 50 PersonasServicio Catering - Pernil Para Eventos 50 PersonasServicio Catering - Pernil Para Eventos 50 PersonasServicio Catering - Pernil Para Eventos 50 PersonasServicio Catering',
                'provincia' => 'Misiones',
                'localidad' => 'Candelaria',
                'precio_a_convenir' => null,
                'precio' => 6200,
                'id_categoria' => 6,
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
        Schema::dropIfExists('musica_djs');
    }
}
