<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('dni');
            $table->string('provincia');
            $table->string('localidad');
            $table->string('telefono');
            $table->string('fecha_de_alta');
            $table->integer('puntos')->default(0);

            $table->softDeletes();
            $table->timestamps();
        });

        DB::table('clientes')->insert([
            [
                'user_id' => '1',
                'dni' => '38365229',
                'provincia' => 'Santiago Del Estero',
                'localidad' => 'Santiago Del Estero',
                'telefono' => '3855826093',
                'fecha_de_alta' => '2020-06-21',
                'puntos' => '0',
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
        Schema::dropIfExists('clientes');
    }
}
