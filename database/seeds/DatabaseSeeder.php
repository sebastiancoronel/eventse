<?php

use Illuminate\Database\Seeder;
use App\Reserva;
use App\Opinion;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Ardeluna producciones 5 estrellas
        Reserva::create([ 
            'fecha' => '2021-04-14',
            'hora_desde' => '02:00:00',
            'hora_hasta' => '07:00:00',
            'direccion' => 'Soler 68',
            'barrio' => 'Belgrano',
            'monto' => 7000,
            'concretado' => 1,
            'opinion_agregada' => 1,
            'id_servicio' => 9,
            'id_prestador' => 3,
            'user_id' => 6
        ]);

        Opinion::create([ 
            'opinion' => 'Exelente servicio! 100% recomendable',
            'id_servicio' => 9,
            'id_prestador' => 3,
            'user_id' => 6
        ]);
        
        Reserva::create([ 
            'fecha' => '2021-04-14',
            'hora_desde' => '02:00:00',
            'hora_hasta' => '07:00:00',
            'direccion' => 'Soler 68',
            'barrio' => 'Belgrano',
            'monto' => 7000,
            'concretado' => 1,
            'opinion_agregada' => 1,
            'id_servicio' => 9,
            'id_prestador' => 3,
            'user_id' => 7
        ]);

        Opinion::create([ 
            'opinion' => 'Me encantó el show y el trato con el prestador exelente.',
            'id_servicio' => 9,
            'id_prestador' => 3,
            'user_id' => 7
        ]);

        Reserva::create([ 
            'fecha' => '2021-04-14',
            'hora_desde' => '02:00:00',
            'hora_hasta' => '07:00:00',
            'direccion' => 'Soler 68',
            'barrio' => 'Belgrano',
            'monto' => 7000,
            'concretado' => 1,
            'opinion_agregada' => 1,
            'id_servicio' => 9,
            'id_prestador' => 3,
            'user_id' => 8
        ]);

        Opinion::create([ 
            'opinion' => 'Buen balance entre precio y calidad del espectáculo',
            'id_servicio' => 9,
            'id_prestador' => 3,
            'user_id' => 8
        ]);

        Reserva::create([ 
            'fecha' => '2021-04-14',
            'hora_desde' => '02:00:00',
            'hora_hasta' => '07:00:00',
            'direccion' => 'Soler 68',
            'barrio' => 'Belgrano',
            'monto' => 7000,
            'concretado' => 1,
            'opinion_agregada' => 1,
            'id_servicio' => 9,
            'id_prestador' => 3,
            'user_id' => 9
        ]);

        Opinion::create([ 
            'opinion' => 'Hubo una pequeña demora pero el show fue incrible. Ya fijamos fecha para otra fiesta!',
            'id_servicio' => 9,
            'id_prestador' => 3,
            'user_id' => 9
        ]);

        Reserva::create([ 
            'fecha' => '2021-04-14',
            'hora_desde' => '02:00:00',
            'hora_hasta' => '07:00:00',
            'direccion' => 'Soler 68',
            'barrio' => 'Belgrano',
            'monto' => 7000,
            'concretado' => 1,
            'opinion_agregada' => 1,
            'id_servicio' => 9,
            'id_prestador' => 3,
            'user_id' => 10
        ]);

        Opinion::create([ 
            'opinion' => 'Muy buen servicio!',
            'id_servicio' => 9,
            'id_prestador' => 3,
            'user_id' => 10
        ]);
        // Fin Ardeluna producciones 5 estrellas

        // 

    }
    
}
