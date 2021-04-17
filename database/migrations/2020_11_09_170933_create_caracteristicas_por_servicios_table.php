<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaracteristicasPorServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caracteristicas_por_servicios', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_servicio');
            $table->foreign('id_servicio')->references('id')->on('servicios');
            
            $table->integer('id_caracteristica');
            $table->foreign('id_caracteristica')->references('id')->on('servicios');
            $table->softDeletes();
            $table->timestamps();
        });

        DB::table('caracteristicas_por_servicios')->insert([

            // Salon LeCoin
                [
                    'id_servicio' => 1,
                    'id_caracteristica' => 5

                ],
                [
                    'id_servicio' => 1,
                    'id_caracteristica' => 3

                ],
                [
                    'id_servicio' => 1,
                    'id_caracteristica' => 7

                ],
                [
                    'id_servicio' => 1,
                    'id_caracteristica' => 1

                ],
                [
                    'id_servicio' => 1,
                    'id_caracteristica' => 61 // Hasta 200 personas

                ],
            // Fin Salon LeCoin
            
            //Juegos JumpZone
                [
                    'id_servicio' => 2,
                    'id_caracteristica' => 34

                ],

                [
                    'id_servicio' => 2,
                    'id_caracteristica' => 38

                ],

                [
                    'id_servicio' => 2,
                    'id_caracteristica' => 40

                ],

                [
                    'id_servicio' => 2,
                    'id_caracteristica' => 41

                ],
            // Fin Juegos JumpZone

            // Animaciones infantiles jumpzone
                [
                    'id_servicio' => 3,
                    'id_caracteristica' => 63

                ],

                [
                    'id_servicio' => 3,
                    'id_caracteristica' => 68

                ],

                [
                    'id_servicio' => 3,
                    'id_caracteristica' => 66

                ],
                [
                    'id_servicio' => 3,
                    'id_caracteristica' => 55 // Hasta 30 personas

                ],
            // Fin Animaciones infantiles jumpzone

            // Living para eventos

                [
                    'id_servicio' => 4,
                    'id_caracteristica' => 45

                ],
                [
                    'id_servicio' => 4,
                    'id_caracteristica' => 46

                ],

                [
                    'id_servicio' => 4,
                    'id_caracteristica' => 47

                ],
                [
                    'id_servicio' => 4,
                    'id_caracteristica' => 56 // Hasta 60 personas

                ],

            // Fin Living para eventos
            
            // Servicio catering 100 personas
                [
                    'id_servicio' => 5,
                    'id_caracteristica' => 13

                ],
                [
                    'id_servicio' => 5,
                    'id_caracteristica' => 15

                ],
                [
                    'id_servicio' => 5,
                    'id_caracteristica' => 57 // Hasta 90 personas

                ],
            // Fin Servicio catering 100 personas

            // Mago Zeta
                [
                    'id_servicio' => 6,
                    'id_caracteristica' => 9

                ],
                [
                    'id_servicio' => 6,
                    'id_caracteristica' => 10

                ],
                [
                    'id_servicio' => 6,
                    'id_caracteristica' => 55 // Hasta 30 personas

                ],
            // Fin Mago Zeta
           
            // Lunch pernil de cerdo
                [
                    'id_servicio' => 7,
                    'id_caracteristica' => 15

                ],

                [
                    'id_servicio' => 7,
                    'id_caracteristica' => 13

                ],
                [
                    'id_servicio' => 7,
                    'id_caracteristica' => 55 // Hasta 30 personas

                ],
            // Fin Lunch pernil de cerdo
            
            // DreamDays Servicio de decoracion
                [
                    'id_servicio' => 8,
                    'id_caracteristica' => 16

                ],
                [
                    'id_servicio' => 8,
                    'id_caracteristica' => 17
    
                ],
                [
                    'id_servicio' => 8,
                    'id_caracteristica' => 20
    
                ],
                [
                    'id_servicio' => 8,
                    'id_caracteristica' => 22
    
                ],
                [
                    'id_servicio' => 8,
                    'id_caracteristica' => 55 // Hasta 30 personas

                ],
            // Fin DreamDays Servicio de decoracion

            // Ardeluna Producciones
                [
                    'id_servicio' => 9,
                    'id_caracteristica' => 24

                ],
                [
                    'id_servicio' => 9,
                    'id_caracteristica' => 25

                ],
                [
                    'id_servicio' => 9,
                    'id_caracteristica' => 26

                ],
                [
                    'id_servicio' => 9,
                    'id_caracteristica' => 28

                ],
                [
                    'id_servicio' => 9,
                    'id_caracteristica' => 55 // Hasta 30 personas

                ],
            // Fin Ardeluna Producciones
            
            // Catering ejecutivo
                [
                    'id_servicio' => 10,
                    'id_caracteristica' => 14

                ],
                [
                    'id_servicio' => 10,
                    'id_caracteristica' => 15

                ],
                [
                    'id_servicio' => 10,
                    'id_caracteristica' => 56 // Hasta 60 personas

                ],
            // Fin Catering ejecutivo

            // Animacion y entretenimiento adoolescentes y adultos
                [
                    'id_servicio' => 11,
                    'id_caracteristica' => 64

                ],
                [
                    'id_servicio' => 11,
                    'id_caracteristica' => 65

                ],
                [
                    'id_servicio' => 11,
                    'id_caracteristica' => 68

                ],
                [
                    'id_servicio' => 11,
                    'id_caracteristica' => 55 // Hasta 30 personas

                ],
            // Fin Animacion y entretenimiento adoolescentes y adultos

            // Fotografos/videografos prof. Eventos 15
                [
                    'id_servicio' => 12,
                    'id_caracteristica' => 71

                ],
                [
                    'id_servicio' => 12,
                    'id_caracteristica' => 72

                ],
                [
                    'id_servicio' => 12,
                    'id_caracteristica' => 79

                ],
                [
                    'id_servicio' => 12,
                    'id_caracteristica' => 81

                ],
            // Fin Fotografos/videografos prof. Eventos 15

            // Concept Fotografia - HD o 4k
                [
                    'id_servicio' => 13,
                    'id_caracteristica' => 71

                ],
                [
                    'id_servicio' => 13,
                    'id_caracteristica' => 72

                ],
                [
                    'id_servicio' => 13,
                    'id_caracteristica' => 73

                ],
                [
                    'id_servicio' => 13,
                    'id_caracteristica' => 78

                ],
                [
                    'id_servicio' => 13,
                    'id_caracteristica' => 79

                ],
            // Fin Concept Fotografia - HD o 4k
            
            // Servicio de fotografia profesional - fotografo
                [
                    'id_servicio' => 14,
                    'id_caracteristica' => 75

                ],
                [
                    'id_servicio' => 14,
                    'id_caracteristica' => 76

                ],
            // Fin Servicio de fotografia profesional - fotografo
            
            // 15 - Alquiler de iluminacion para eventos
                [
                    'id_servicio' => 15,
                    'id_caracteristica' => 49

                ],
                [
                    'id_servicio' => 15,
                    'id_caracteristica' => 50

                ],
            // Fin 15 - Alquiler de iluminacion para eventos

            // 16 - Mundo Diversion - Delivery de juegos y diversion
                [
                    'id_servicio' => 16,
                    'id_caracteristica' => 34

                ],
                [
                    'id_servicio' => 16,
                    'id_caracteristica' => 39

                ],
            // Fin 16 - Mundo Diversion - Delivery de juegos y diversion

            // 17 - Show de magia infantil
                [
                    'id_servicio' => 17,
                    'id_caracteristica' => 9

                ],
                [
                    'id_servicio' => 17,
                    'id_caracteristica' => 10

                ],
                [
                    'id_servicio' => 17,
                    'id_caracteristica' => 55 // Hasta 30 personas

                ],
            // Fin 17 - Show de magia infantil

            // 18 - Mago Komodin
                [
                    'id_servicio' => 18,
                    'id_caracteristica' => 9

                ],
                [
                    'id_servicio' => 18,
                    'id_caracteristica' => 10

                ],
                [
                    'id_servicio' => 18,
                    'id_caracteristica' => 12

                ],
                [
                    'id_servicio' => 18,
                    'id_caracteristica' => 55 // Hasta 30 personas

                ],
            // Fin 18 - Mago Komodin

            // 19 - Mabiliario tipo living - mesas + pufs
                [
                    'id_servicio' => 19,
                    'id_caracteristica' => 43

                ],
                [
                    'id_servicio' => 19,
                    'id_caracteristica' => 44

                ],
                [
                    'id_servicio' => 19,
                    'id_caracteristica' => 45

                ],
            // Fin 19 - Mabiliario tipo living - mesas + pufs

            // 20 - Mobiliario para evntos al aire libre
                [
                    'id_servicio' => 20,
                    'id_caracteristica' => 45

                ],
                [
                    'id_servicio' => 20,
                    'id_caracteristica' => 47

                ],
            // Fin 20 - Mobiliario para evntos al aire libre

            // 21 - Musica Dj Hat - Sonido, humo, ambientación
                [
                    'id_servicio' => 21,
                    'id_caracteristica' => 84

                ],
                [
                    'id_servicio' => 21,
                    'id_caracteristica' => 85

                ],
                [
                    'id_servicio' => 21,
                    'id_caracteristica' => 56 //Hasta 60 personas

                ],
            // Fin 21 - Musica Dj Hat - Sonido, humo, ambientación

            // 22 - Servicio De Dj Disc Jockey
                [
                    'id_servicio' => 22,
                    'id_caracteristica' => 83

                ],
                [
                    'id_servicio' => 22,
                    'id_caracteristica' => 86

                ],
                [
                    'id_servicio' => 22,
                    'id_caracteristica' => 55 //Hasta 30 personas

                ],
            // Fin 22 - Servicio De Dj Disc Jockey

            // 23 - SoundMax Djs, escenarios, led y más
                [
                    'id_servicio' => 23,
                    'id_caracteristica' => 82

                ],
                [
                    'id_servicio' => 23,
                    'id_caracteristica' => 84

                ],
                [
                    'id_servicio' => 23,
                    'id_caracteristica' => 85

                ],
                [
                    'id_servicio' => 23,
                    'id_caracteristica' => 56 //Hasta 60 personas

                ],
            // Fin 23 - SoundMax Djs, escenarios, led y más

            // 24 - Ornamentacion bodas y eventos nocturnos
                [
                    'id_servicio' => 24,
                    'id_caracteristica' => 16

                ],
                [
                    'id_servicio' => 24,
                    'id_caracteristica' => 17

                ],
                [
                    'id_servicio' => 24,
                    'id_caracteristica' => 20

                ],
                [
                    'id_servicio' => 24,
                    'id_caracteristica' => 22

                ],
                [
                    'id_servicio' => 24,
                    'id_caracteristica' => 56 //Hasta 60 personas

                ],
            // Fin 24 - Ornamentacion bodas y eventos nocturnos

            // 25 - Ornamentacion bodas y eventos Vintage
                [
                    'id_servicio' => 25,
                    'id_caracteristica' => 16

                ],
                
                [
                    'id_servicio' => 25,
                    'id_caracteristica' => 22

                ],

                [
                    'id_servicio' => 25,
                    'id_caracteristica' => 56 //Hasta 60 personas

                ],
            // Fin 25 - Ornamentacion bodas y eventos Vintage

            // 26 - Fidela ¡Multiespacio para eventos sociales y corporativos!
                [
                    'id_servicio' => 26,
                    'id_caracteristica' => 2

                ],
                
                [
                    'id_servicio' => 26,
                    'id_caracteristica' => 3

                ],

                [
                    'id_servicio' => 26,
                    'id_caracteristica' => 4

                ],
                
                [
                    'id_servicio' => 26,
                    'id_caracteristica' => 58 //Hasta 120 personas

                ],
            // Fin 26 - Fidela ¡Multiespacio para eventos sociales y corporativos!

            // 27 - Rufino Eventos
                [
                    'id_servicio' => 27,
                    'id_caracteristica' => 1

                ],
                
                [
                    'id_servicio' => 27,
                    'id_caracteristica' => 3

                ],

                [
                    'id_servicio' => 27,
                    'id_caracteristica' => 5

                ],

                [
                    'id_servicio' => 27,
                    'id_caracteristica' => 6

                ],

                [
                    'id_servicio' => 27,
                    'id_caracteristica' => 7

                ],
                [
                    'id_servicio' => 27,
                    'id_caracteristica' => 8

                ],
                
                [
                    'id_servicio' => 27,
                    'id_caracteristica' => 59 //Hasta 150 personas

                ],
            // Fin 27 - Rufino Eventos

            // 28 - 123 Cumbia! Shows en vivo
                [
                    'id_servicio' => 28,
                    'id_caracteristica' => 24

                ],
                
                [
                    'id_servicio' => 28,
                    'id_caracteristica' => 56 //Hasta 60 personas

                ],
            // Fin 28 - 123 Cumbia! Shows en vivo

            // 29 - Show de Cantantes Líricos
                [
                    'id_servicio' => 29,
                    'id_caracteristica' => 24

                ],

                [
                    'id_servicio' => 29,
                    'id_caracteristica' => 29

                ],
                
                [
                    'id_servicio' => 29,
                    'id_caracteristica' => 55 //Hasta 30 personas

                ],
            // Fin 29 - Show de Cantantes Líricos

            // 30 - Show de Cantantes Líricos
                [
                    'id_servicio' => 30,
                    'id_caracteristica' => 48

                ],

                [
                    'id_servicio' => 30,
                    'id_caracteristica' => 49

                ],

                [
                    'id_servicio' => 30,
                    'id_caracteristica' => 51

                ],

                [
                    'id_servicio' => 30,
                    'id_caracteristica' => 53

                ],

                [
                    'id_servicio' => 30,
                    'id_caracteristica' => 52

                ],
                
            // Fin 30 - Show de Cantantes Líricos

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('caracteristicas_por_servicios');
    }
}
