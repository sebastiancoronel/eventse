<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestadors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('foto');
            // $table->string('provincia');
            // $table->string('localidad');
            $table->string('email');
            $table->string('telefono');

            // Esto va en la tabla de Servicios por prestadores por si necesito consultar todos los servicios que tiene un prestador.
            // $table->integer('id_servicios')->nullable();
            // $table->foreign('id_servicios')->references('id')->on('servicios');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->softDeletes();
            $table->timestamps();
        });

        DB::table('prestadors')->insert([
            [
                'nombre' => 'JumpZone',
                'foto' => '/images/foto_perfil/1.png',
                // 'provincia' => 'Santiago Del Estero',
                // 'Localidad' => 'Santiago Del Estero',
                'email' => 'jumpzoneinflables@gmail.com',
                'telefono' => '3855000000',
                'user_id' => 1,
                
            ],
            [
                'nombre' => 'Dream Days',
                'foto' => '/images/foto_perfil/4.jpg',
                // 'provincia' => 'Santiago Del Estero',
                // 'Localidad' => 'Santiago Del Estero',
                'email' => 'dreamdays@hotmail.com',
                'telefono' => '3855896321',
                'user_id' => 4,
                
            ],

            [
                'nombre' => 'Ardeluna Producciones',
                'foto' => '/images/foto_perfil/5.jpg',
                // 'provincia' => 'Santiago Del Estero',
                // 'Localidad' => 'Santiago Del Estero',
                'email' => 'ardeluna@hotmail.com',
                'telefono' => '3851963899',
                'user_id' => 5,
                
            ],

            [
                'nombre' => 'Alumbra Fotografia',
                'foto' => '/images/foto_perfil/6.png',
                'email' => 'alumbra@hotmail.com',
                'telefono' => '3851961598',
                'user_id' => 11,
                
            ],

            [
                'nombre' => 'Concept Fotografia',
                'foto' => '/images/foto_perfil/7.png',
                'email' => 'concept@hotmail.com',
                'telefono' => '3851961049',
                'user_id' => 12,
                
            ],

            [
                'nombre' => 'Mago Komodin',
                'foto' => '/images/foto_perfil/8.png',
                'email' => 'mago_komodin@hotmail.com',
                'telefono' => '3851961741',
                'user_id' => 13,
                
            ],

            [
                'nombre' => 'El Gran Becker',
                'foto' => '/images/foto_perfil/9.png',
                'email' => 'GranBecker@hotmail.com',
                'telefono' => '3851782429',
                'user_id' => 14,
                
            ],

            [
                'nombre' => 'Bendito Living',
                'foto' => '/images/foto_perfil/10.jpg',
                'email' => 'GranBecker@hotmail.com',
                'telefono' => '3851782429',
                'user_id' => 15,
                
            ],

            [
                'nombre' => 'Dj Hat',
                'foto' => '/images/foto_perfil/11.png',
                'email' => 'dj_hat@hotmail.com',
                'telefono' => '3851784492',
                'user_id' => 16,
                
            ],

            [
                'nombre' => 'Mini Disco',
                'foto' => '/images/foto_perfil/12.png',
                'email' => 'mini_disco@hotmail.com',
                'telefono' => '3851784492',
                'user_id' => 17,
                
            ],

            [
                'nombre' => 'SoundMax',
                'foto' => '/images/foto_perfil/13.jpg',
                'email' => 'soundmaxdjs@hotmail.com',
                'telefono' => '3851784492',
                'user_id' => 18,
                
            ],

            [
                'nombre' => 'Rufino Eventos',
                'foto' => '/images/foto_perfil/14.png',
                'email' => 'mini_disco@hotmail.com',
                'telefono' => '3851782144',
                'user_id' => 19,
                
            ],

            [
                'nombre' => '123 Cumbia',
                'foto' => '/images/foto_perfil/15.jpg',
                'email' => '123_cumbia@hotmail.com',
                'telefono' => '3851782144',
                'user_id' => 20,
                
            ],

            [
                'nombre' => 'Cantantes Liricos',
                'foto' => '/images/foto_perfil/16.jpg',
                'email' => '123_cumbia@hotmail.com',
                'telefono' => '3741787890',
                'user_id' => 21,
                
            ],

            [
                'nombre' => 'Fidela',
                'foto' => '/images/foto_perfil/17.png',
                'email' => 'salonfidela@hotmail.com',
                'telefono' => '3741745900',
                'user_id' => 22,
                
            ],

            [
                'nombre' => 'Mundo Diversion',
                'foto' => '/images/foto_perfil/18.png',
                'email' => 'mundodiversion@hotmail.com',
                'telefono' => '3741745789',
                'user_id' => 23,
                
            ],

            [
                'nombre' => 'AEI iluminacion',
                'foto' => '/images/foto_perfil/19.jpg',
                'email' => 'iluminacion_aei@hotmail.com',
                'telefono' => '3741712589',
                'user_id' => 24,
                
            ],

            [
                'nombre' => 'Aura',
                'foto' => '/images/foto_perfil/20.jpg',
                'email' => 'aura@hotmail.com',
                'telefono' => '3811714563',
                'user_id' => 25,
                
            ],

            [
                'nombre' => 'Fotografia independiente',
                'foto' => '/images/foto_perfil/21.png',
                'email' => 'fotografos@hotmail.com',
                'telefono' => '3811714100',
                'user_id' => 26,
                
            ],

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestadors');
    }
}
