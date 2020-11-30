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

            $table->integer('id_categoria')->unsigned();
            $table->foreign('id_categoria')->references('id')->on('categorias');

            $table->integer('id_prestador')->unsigned();
            $table->foreign('id_prestador')->references('id')->on('prestadors');
            $table->softDeletes();
            $table->timestamps();
        });

        DB::table('servicios')->insert([
            [
                'nombre' => 'Salon Louis XV',
                'descripcion' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'foto_1' => 'images/servicios/8R64IoYFDHpBzUb2cn0y.jpg',
                'foto_2' => 'images/servicios/fn2VMkEssZywc2FdPMRI.jpg',
                'foto_3' => 'images/servicios/JjJtjZ614StTSRaXqQf2.jpg',
                'foto_4' => 'images/servicios/4CktBDfnAl0ITEkySJcb.jpg',
                'precio' => null,
                'precio_a_convenir' => 1,
                'id_categoria' => 1
                'id_prestador' => 1
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
        Schema::dropIfExists('servicios');
    }
}
