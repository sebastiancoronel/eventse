<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notificacions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id_notificar');
            $table->foreign('user_id_notificar')->references('id')->on('users');

            $table->integer('user_id_trigger');
            $table->foreign('user_id_trigger')->references('id')->on('users');

            $table->integer('id_evento');
            $table->foreign('id_evento')->references('id')->on('eventos');

            $table->boolean('visto');

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
        Schema::dropIfExists('notificacions');
    }
}
