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
