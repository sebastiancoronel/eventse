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
            ['nombre' => 'Pelotero' ],
            ['nombre' => 'Servicio de pizzas' ],
            ['nombre' => 'Pinta caritas' ],
            ['nombre' => 'Bolsitas' ],
            
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
