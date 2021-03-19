<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('descripcion',2000);
            $table->string('foto_1');
            $table->string('foto_2');
            $table->string('foto_3');
            $table->string('foto_4');
            $table->integer('precio')->nullable();
            $table->boolean('precio_a_convenir')->nullable();
            $table->boolean('moderado')->nullable();

            $table->integer('id_categoria')->unsigned();
            $table->foreign('id_categoria')->references('id')->on('categorias');

            $table->integer('id_prestador')->unsigned();
            $table->foreign('id_prestador')->references('id')->on('prestadors');
            $table->softDeletes();
            $table->timestamps();
        });

        // DB::table('servicios')->insert([
        //     [
        //         'nombre' => 'Salon Mururoa',
        //         'descripcion' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        //         'foto_1' => 'images/servicios/8R64IoYFDHpBzUb2cn0y.jpg',
        //         'foto_2' => 'images/servicios/fn2VMkEssZywc2FdPMRI.jpg',
        //         'foto_3' => 'images/servicios/JjJtjZ614StTSRaXqQf2.jpg',
        //         'foto_4' => 'images/servicios/4CktBDfnAl0ITEkySJcb.jpg',
        //         'precio' => null,
        //         'precio_a_convenir' => 1,
        //         'id_categoria' => 1,
        //         'id_prestador' => 1
        //     ],

        //     [
        //         'nombre' => 'Juegos JumpZone',
        //         'descripcion' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        //         'foto_1' => 'images/servicios/LVjDQzmJKD6ZAw5nMFyu.jpg',
        //         'foto_2' => 'images/servicios/eGb5KmLQzxHvJy7G3tGZ.jpg',
        //         'foto_3' => 'images/servicios/Ygz3Bs9pKRPKH9Fhs4IC.jpg',
        //         'foto_4' => 'images/servicios/LwiFoWbquNXWw3M0xAeA.jpg',
        //         'precio' => 3600,
        //         'precio_a_convenir' => null,
        //         'id_categoria' => 2,
        //         'id_prestador' => 1
        //     ],

        //     [
        //         'nombre' => 'Animaciones JumpZone',
        //         'descripcion' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        //         'foto_1' => 'images/servicios/8NU2oLzWptocKTgAGyPW.jpg',
        //         'foto_2' => 'images/servicios/1wdcyTlZuQADCFovujRL.jpg',
        //         'foto_3' => 'images/servicios/1ee6AreC2PF1quaSdXs8.jpg',
        //         'foto_4' => 'images/servicios/xZoZiot04QRSHNyrZz3i.jpg',
        //         'precio' => 6000,
        //         'precio_a_convenir' => null,
        //         'id_categoria' => 3,
        //         'id_prestador' => 1
        //     ],

        //     [
        //         'nombre' => 'Living para eventos',
        //         'descripcion' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        //         'foto_1' => 'images/servicios/xoj6fqgbAtofXd78ZX2f.jpg',
        //         'foto_2' => 'images/servicios/6zGGh6vh4yIuwhWFZC3O.jpg',
        //         'foto_3' => 'images/servicios/RCWKGUtpIRtBmnCRSI17.jpg',
        //         'foto_4' => 'images/servicios/GqkmCVd5fC2i4mESDjC1.jpg',
        //         'precio' => 7900,
        //         'precio_a_convenir' => null,
        //         'id_categoria' => 4,
        //         'id_prestador' => 1
        //     ],

        //     [
        //         'nombre' => 'Servicio de Catering para 100 personas',
        //         'descripcion' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        //         'foto_1' => 'images/servicios/QbUDAXffN1DHDSmoOsyU.jpg',
        //         'foto_2' => 'images/servicios/kWrIRtUdUmae94GC805g.jpg',
        //         'foto_3' => 'images/servicios/N0ve7iEGORICLE6vZ64P.jpg',
        //         'foto_4' => 'images/servicios/vQWG790XYBzefL9vWx5H.jpg',
        //         'precio' => 10000,
        //         'precio_a_convenir' => null,
        //         'id_categoria' => 5,
        //         'id_prestador' => 1
        //     ],
        // ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicios');
    }
}
