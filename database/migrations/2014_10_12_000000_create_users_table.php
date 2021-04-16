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
                'localidad' => 'Santiago del Estero',
                'telefono' => '3855826093',
                'rol' => 'Prestador',
                'password' => bcrypt('123456789')
            ],

            [
                'name' => 'Administrador',
                'lastname' => 'admin',
                'email' => 'admin@gmail.com',
                'dni' => '38000000',
                'provincia' => 'Santiago del Estero',
                'localidad' => 'Santiago del Estero',
                'telefono' => '3855000000',
                'rol' => 'Administrador',
                'password' => bcrypt('123456789')
            ],

            [
                'name' => 'Cliente',
                'lastname' => 'cliente',
                'email' => 'cliente@gmail.com',
                'dni' => '38111111',
                'provincia' => 'Santiago del Estero',
                'localidad' => 'Santiago del Estero',
                'telefono' => '3855111111',
                'rol' => 'Cliente',
                'password' => bcrypt('123456789')
            ],

            [
                'name' => 'Prestador',
                'lastname' => 'numero 2',
                'email' => 'prestador2@gmail.com',
                'dni' => '30365229',
                'provincia' => 'Santiago Del Estero',
                'localidad' => 'Santiago del Estero',
                'telefono' => '3855129799',
                'rol' => 'Prestador',
                'password' => bcrypt('123456789')
            ],

            [
                'name' => 'Prestador',
                'lastname' => 'numero 3',
                'email' => 'prestador3@gmail.com',
                'dni' => '22336999',
                'provincia' => 'Cordoba',
                'localidad' => 'Villa Carlos Paz',
                'telefono' => '351649798',
                'rol' => 'Prestador',
                'password' => bcrypt('123456789')
            ],

            // 6
            [
                'name' => 'Pedro',
                'lastname' => 'Rodriguez',
                'email' => 'cliente2@gmail.com',
                'dni' => '38625999',
                'provincia' => 'Santiago del Estero',
                'localidad' => 'Santiago del Estero',
                'telefono' => '3855111111',
                'rol' => 'Cliente',
                'password' => bcrypt('123456789')
            ],

            // 7
            [
                'name' => 'Marcos',
                'lastname' => 'Russo',
                'email' => 'cliente3@gmail.com',
                'dni' => '38521999',
                'provincia' => 'Santiago del Estero',
                'localidad' => 'Santiago del Estero',
                'telefono' => '3855896320',
                'rol' => 'Cliente',
                'password' => bcrypt('123456789')
            ],

            // 8
            [
                'name' => 'Ana',
                'lastname' => 'Colombo',
                'email' => 'cliente4@gmail.com',
                'dni' => '38521888',
                'provincia' => 'Santiago del Estero',
                'localidad' => 'Santiago del Estero',
                'telefono' => '3855896390',
                'rol' => 'Cliente',
                'password' => bcrypt('123456789')
            ],

            // 9
            [
                'name' => 'Lourdes',
                'lastname' => 'Simon',
                'email' => 'cliente5@gmail.com',
                'dni' => '38521777',
                'provincia' => 'Santiago del Estero',
                'localidad' => 'Santiago del Estero',
                'telefono' => '3855896430',
                'rol' => 'Cliente',
                'password' => bcrypt('123456789')
            ],

            // 10
            [
                'name' => 'Virginia',
                'lastname' => 'Lopez',
                'email' => 'cliente6@gmail.com',
                'dni' => '38521000',
                'provincia' => 'Santiago del Estero',
                'localidad' => 'Santiago del Estero',
                'telefono' => '3854236430',
                'rol' => 'Cliente',
                'password' => bcrypt('123456789')
            ],

            //11 Alumbra fotografia
            [
                'name' => 'Prestador',
                'lastname' => 'numero 4',
                'email' => 'prestador4@gmail.com',
                'dni' => '30365230',
                'provincia' => 'Santiago Del Estero',
                'localidad' => 'Santiago del Estero',
                'telefono' => '3855129799',
                'rol' => 'Prestador',
                'password' => bcrypt('123456789')
            ],

            //12 Concept fotografia
            [
                'name' => 'Prestador',
                'lastname' => 'numero 5',
                'email' => 'prestador5@gmail.com',
                'dni' => '30365753',
                'provincia' => 'Santiago Del Estero',
                'localidad' => 'Santiago del Estero',
                'telefono' => '3855129003',
                'rol' => 'Prestador',
                'password' => bcrypt('123456789')
            ],

            //13 Mago Komodin
            [
                'name' => 'Prestador',
                'lastname' => 'numero 6',
                'email' => 'prestador6@gmail.com',
                'dni' => '30360239',
                'provincia' => 'Santiago Del Estero',
                'localidad' => 'Santiago del Estero',
                'telefono' => '3855112476',
                'rol' => 'Prestador',
                'password' => bcrypt('123456789')
            ],

            //14 Mago El gran becker
            [
                'name' => 'Prestador',
                'lastname' => 'numero 7',
                'email' => 'prestador7@gmail.com',
                'dni' => '30361000',
                'provincia' => 'Santiago Del Estero',
                'localidad' => 'Santiago del Estero',
                'telefono' => '3855023782',
                'rol' => 'Prestador',
                'password' => bcrypt('123456789')
            ],

            //15 Bendito Living
            [
                'name' => 'Prestador',
                'lastname' => 'numero 8',
                'email' => 'prestador8@gmail.com',
                'dni' => '30369997',
                'provincia' => 'Santiago Del Estero',
                'localidad' => 'Santiago del Estero',
                'telefono' => '3855029997',
                'rol' => 'Prestador',
                'password' => bcrypt('123456789')
            ],

            //16 DJ Hat
            [
                'name' => 'Prestador',
                'lastname' => 'numero 9',
                'email' => 'prestador9@gmail.com',
                'dni' => '30369933',
                'provincia' => 'Santiago Del Estero',
                'localidad' => 'Santiago del Estero',
                'telefono' => '3855029933',
                'rol' => 'Prestador',
                'password' => bcrypt('123456789')
            ],

            //17 Dj Mini Disco
            [
                'name' => 'Prestador',
                'lastname' => 'numero 10',
                'email' => 'prestador10@gmail.com',
                'dni' => '30369444',
                'provincia' => 'Santiago Del Estero',
                'localidad' => 'Santiago del Estero',
                'telefono' => '3855029444',
                'rol' => 'Prestador',
                'password' => bcrypt('123456789')
            ],

            //18 Dj SoundMax
            [
                'name' => 'Prestador',
                'lastname' => 'numero 11',
                'email' => 'prestador11@gmail.com',
                'dni' => '30367890',
                'provincia' => 'Santiago Del Estero',
                'localidad' => 'Santiago del Estero',
                'telefono' => '3855027890',
                'rol' => 'Prestador',
                'password' => bcrypt('123456789')
            ],

            //19 Rufino Eventos
            [
                'name' => 'Prestador',
                'lastname' => 'numero 12',
                'email' => 'prestador12@gmail.com',
                'dni' => '38369870',
                'provincia' => 'Santiago Del Estero',
                'localidad' => 'Santiago del Estero',
                'telefono' => '3858029870',
                'rol' => 'Prestador',
                'password' => bcrypt('123456789')
            ],

            //20 123 Cumbia
            [
                'name' => 'Prestador',
                'lastname' => 'numero 13',
                'email' => 'prestador13@gmail.com',
                'dni' => '38360022',
                'provincia' => 'Santiago Del Estero',
                'localidad' => 'Santiago del Estero',
                'telefono' => '3858029870',
                'rol' => 'Prestador',
                'password' => bcrypt('123456789')
            ],

            //21 Cantantes liricos
            [
                'name' => 'Prestador',
                'lastname' => 'numero 14',
                'email' => 'prestador14@gmail.com',
                'dni' => '38360123',
                'provincia' => 'Santiago Del Estero',
                'localidad' => 'Santiago del Estero',
                'telefono' => '3858021234',
                'rol' => 'Prestador',
                'password' => bcrypt('123456789')
            ],

            //22 Salon Fidela
            [
                'name' => 'Prestador',
                'lastname' => 'numero 15',
                'email' => 'prestador15@gmail.com',
                'dni' => '38360133',
                'provincia' => 'Santiago Del Estero',
                'localidad' => 'Santiago del Estero',
                'telefono' => '3858020203',
                'rol' => 'Prestador',
                'password' => bcrypt('123456789')
            ],

            //23 Mundo diversion
            [
                'name' => 'Prestador',
                'lastname' => 'numero 16',
                'email' => 'prestador16@gmail.com',
                'dni' => '38360202',
                'provincia' => 'Santiago Del Estero',
                'localidad' => 'Santiago del Estero',
                'telefono' => '3858020111',
                'rol' => 'Prestador',
                'password' => bcrypt('123456789')
            ],

            //24 AEI iluminacion
            [
                'name' => 'Prestador',
                'lastname' => 'numero 17',
                'email' => 'prestador17@gmail.com',
                'dni' => '38364501',
                'provincia' => 'Santiago Del Estero',
                'localidad' => 'Santiago del Estero',
                'telefono' => '3858012089',
                'rol' => 'Prestador',
                'password' => bcrypt('123456789')
            ],

            //25 Aura iluminacion
            [
                'name' => 'Prestador',
                'lastname' => 'numero 18',
                'email' => 'prestador18@gmail.com',
                'dni' => '38500200',
                'provincia' => 'Santiago Del Estero',
                'localidad' => 'Santiago del Estero',
                'telefono' => '3858123096',
                'rol' => 'Prestador',
                'password' => bcrypt('123456789')
            ],

            //26 Servicio de fotografia
            [
                'name' => 'Prestador',
                'lastname' => 'numero 19',
                'email' => 'prestador19@gmail.com',
                'dni' => '38512053',
                'provincia' => 'Santiago Del Estero',
                'localidad' => 'Santiago del Estero',
                'telefono' => '3858120909',
                'rol' => 'Prestador',
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
