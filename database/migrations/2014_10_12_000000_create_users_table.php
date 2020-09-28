<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('dni')->unique();
            $table->string('provincia');
            $table->string('localidad');
            $table->string('telefono');
            $table->enum('rol',['Cliente','Prestador','Administrador']);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert([
            [
                'name' => 'Sebastian',
                'lastname' => 'Coronel',
                'email' => 'seba_c94@hotmail.com',
                'dni' => '38365229',
                'provincia' => 'Santiago del Estero',
                'localidad' => 'Capital',
                'telefono' => '3855826093',
                'rol' => 'Administrador',
                'password' => bcrypt('123456789')
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
        Schema::dropIfExists('users');
    }
}
