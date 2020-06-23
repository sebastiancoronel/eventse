<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpinionCateringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opinion_caterings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_prestador');
            $table->foreign('id_prestador')->references('id')->on('prestadors');

            $table->integer('id_catering');
            $table->foreign('id_catering')->references('id')->on('caterings');

            $table->integer('id_cliente');
            $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->string('opinion',1000)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opinion_caterings');
    }
}
