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
        // Ardeluna producciones 5 contrataciones
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

        // Rufino Eventos 10 contrataciones
            Reserva::create([ 
                'fecha' => '2021-04-14',
                'hora_desde' => '02:00:00',
                'hora_hasta' => '07:00:00',
                'direccion' => 'Soler 68',
                'barrio' => 'Belgrano',
                'monto' => 120000,
                'concretado' => 1,
                'opinion_agregada' => 1,
                'id_servicio' => 27,
                'id_prestador' => 12,
                'user_id' => 6
            ]);

            Opinion::create([ 
                'opinion' => 'Me gustó mucho el salón, amplio y muy cómodo',
                'id_servicio' => 27,
                'id_prestador' => 12,
                'user_id' => 6
            ]);

            Reserva::create([ 
                'fecha' => '2021-04-14',
                'hora_desde' => '02:00:00',
                'hora_hasta' => '07:00:00',
                'direccion' => 'Soler 68',
                'barrio' => 'Belgrano',
                'monto' => 120000,
                'concretado' => 1,
                'opinion_agregada' => 1,
                'id_servicio' => 27,
                'id_prestador' => 12,
                'user_id' => 7
            ]);

            Opinion::create([
                'opinion' => 'Excelente atencion y servicio',
                'id_servicio' => 27,
                'id_prestador' => 12,
                'user_id' => 7
            ]);

            Reserva::create([ 
                'fecha' => '2021-04-14',
                'hora_desde' => '02:00:00',
                'hora_hasta' => '07:00:00',
                'direccion' => 'Soler 68',
                'barrio' => 'Belgrano',
                'monto' => 120000,
                'concretado' => 1,
                'opinion_agregada' => 1,
                'id_servicio' => 27,
                'id_prestador' => 12,
                'user_id' => 8
            ]);

            Opinion::create([
                'opinion' => 'Me gustó la atencion y recepción de los invitados',
                'id_servicio' => 27,
                'id_prestador' => 12,
                'user_id' => 8
            ]);

            Reserva::create([ 
                'fecha' => '2021-04-14',
                'hora_desde' => '02:00:00',
                'hora_hasta' => '07:00:00',
                'direccion' => 'Soler 68',
                'barrio' => 'Belgrano',
                'monto' => 120000,
                'concretado' => 1,
                'opinion_agregada' => 1,
                'id_servicio' => 27,
                'id_prestador' => 12,
                'user_id' => 9
            ]);

            Opinion::create([
                'opinion' => 'Todo impecable muy bueno',
                'id_servicio' => 27,
                'id_prestador' => 12,
                'user_id' => 9
            ]);

            Reserva::create([ 
                'fecha' => '2021-04-14',
                'hora_desde' => '02:00:00',
                'hora_hasta' => '07:00:00',
                'direccion' => 'Soler 68',
                'barrio' => 'Belgrano',
                'monto' => 120000,
                'concretado' => 1,
                'opinion_agregada' => 1,
                'id_servicio' => 27,
                'id_prestador' => 12,
                'user_id' => 10
            ]);

            Opinion::create([
                'opinion' => 'Todo impecable muy bueno',
                'id_servicio' => 27,
                'id_prestador' => 12,
                'user_id' => 10
            ]);
            
            Reserva::create([ 
                'fecha' => '2021-04-14',
                'hora_desde' => '02:00:00',
                'hora_hasta' => '07:00:00',
                'direccion' => 'Soler 68',
                'barrio' => 'Belgrano',
                'monto' => 120000,
                'concretado' => 1,
                'opinion_agregada' => 1,
                'id_servicio' => 27,
                'id_prestador' => 12,
                'user_id' => 10
            ]);

            Reserva::create([ 
                'fecha' => '2021-04-14',
                'hora_desde' => '02:00:00',
                'hora_hasta' => '07:00:00',
                'direccion' => 'Soler 68',
                'barrio' => 'Belgrano',
                'monto' => 120000,
                'concretado' => 1,
                'opinion_agregada' => 1,
                'id_servicio' => 27,
                'id_prestador' => 12,
                'user_id' => 10
            ]);

            Reserva::create([ 
                'fecha' => '2021-04-14',
                'hora_desde' => '02:00:00',
                'hora_hasta' => '07:00:00',
                'direccion' => 'Soler 68',
                'barrio' => 'Belgrano',
                'monto' => 120000,
                'concretado' => 1,
                'opinion_agregada' => 1,
                'id_servicio' => 27,
                'id_prestador' => 12,
                'user_id' => 10
            ]);

            Reserva::create([ 
                'fecha' => '2021-04-14',
                'hora_desde' => '02:00:00',
                'hora_hasta' => '07:00:00',
                'direccion' => 'Soler 68',
                'barrio' => 'Belgrano',
                'monto' => 120000,
                'concretado' => 1,
                'opinion_agregada' => 1,
                'id_servicio' => 27,
                'id_prestador' => 12,
                'user_id' => 10
            ]);

            Reserva::create([ 
                'fecha' => '2021-04-14',
                'hora_desde' => '02:00:00',
                'hora_hasta' => '07:00:00',
                'direccion' => 'Soler 68',
                'barrio' => 'Belgrano',
                'monto' => 120000,
                'concretado' => 1,
                'opinion_agregada' => 1,
                'id_servicio' => 27,
                'id_prestador' => 12,
                'user_id' => 10
            ]);
        // Fin Rufino Eventos

        // Show cantantes liricos 15 contrataciones
            Reserva::create([ 
                'fecha' => '2021-04-14',
                'hora_desde' => '02:00:00',
                'hora_hasta' => '07:00:00',
                'direccion' => 'Soler 68',
                'barrio' => 'Belgrano',
                'monto' => 10000,
                'concretado' => 1,
                'opinion_agregada' => 1,
                'id_servicio' => 29,
                'id_prestador' => 14,
                'user_id' => 6
            ]);

            Opinion::create([ 
                'opinion' => 'Increíbles cantantes!! mis invitados quedaron contentísimos',
                'id_servicio' => 29,
                'id_prestador' => 14,
                'user_id' => 6
            ]);

            Reserva::create([ 
                'fecha' => '2021-04-14',
                'hora_desde' => '02:00:00',
                'hora_hasta' => '07:00:00',
                'direccion' => 'Soler 68',
                'barrio' => 'Belgrano',
                'monto' => 10000,
                'concretado' => 1,
                'opinion_agregada' => 1,
                'id_servicio' => 29,
                'id_prestador' => 14,
                'user_id' => 7
            ]);

            Opinion::create([ 
                'opinion' => 'El show me pareció muy corto, solo 5 temas cantaron',
                'id_servicio' => 29,
                'id_prestador' => 14,
                'user_id' => 7
            ]);

            Reserva::create([ 
                'fecha' => '2021-04-14',
                'hora_desde' => '02:00:00',
                'hora_hasta' => '07:00:00',
                'direccion' => 'Soler 68',
                'barrio' => 'Belgrano',
                'monto' => 10000,
                'concretado' => 1,
                'opinion_agregada' => 1,
                'id_servicio' => 29,
                'id_prestador' => 14,
                'user_id' => 8
            ]);

            Opinion::create([ 
                'opinion' => 'Los recomiendo para todo evento formal. Muy bueno!',
                'id_servicio' => 29,
                'id_prestador' => 14,
                'user_id' => 8
            ]);

            Reserva::create([ 
                'fecha' => '2021-04-14',
                'hora_desde' => '02:00:00',
                'hora_hasta' => '07:00:00',
                'direccion' => 'Soler 68',
                'barrio' => 'Belgrano',
                'monto' => 10000,
                'concretado' => 1,
                'opinion_agregada' => 1,
                'id_servicio' => 29,
                'id_prestador' => 14,
                'user_id' => 9
            ]);

            Reserva::create([ 
                'fecha' => '2021-04-14',
                'hora_desde' => '02:00:00',
                'hora_hasta' => '07:00:00',
                'direccion' => 'Soler 68',
                'barrio' => 'Belgrano',
                'monto' => 10000,
                'concretado' => 1,
                'opinion_agregada' => 1,
                'id_servicio' => 29,
                'id_prestador' => 14,
                'user_id' => 10
            ]);

            Reserva::create([ 
                'fecha' => '2021-04-14',
                'hora_desde' => '02:00:00',
                'hora_hasta' => '07:00:00',
                'direccion' => 'Soler 68',
                'barrio' => 'Belgrano',
                'monto' => 10000,
                'concretado' => 1,
                'opinion_agregada' => 1,
                'id_servicio' => 29,
                'id_prestador' => 14,
                'user_id' => 10
            ]);

            Reserva::create([ 
                'fecha' => '2021-04-14',
                'hora_desde' => '02:00:00',
                'hora_hasta' => '07:00:00',
                'direccion' => 'Soler 68',
                'barrio' => 'Belgrano',
                'monto' => 10000,
                'concretado' => 1,
                'opinion_agregada' => 1,
                'id_servicio' => 29,
                'id_prestador' => 14,
                'user_id' => 10
            ]);

            Reserva::create([ 
                'fecha' => '2021-04-14',
                'hora_desde' => '02:00:00',
                'hora_hasta' => '07:00:00',
                'direccion' => 'Soler 68',
                'barrio' => 'Belgrano',
                'monto' => 10000,
                'concretado' => 1,
                'opinion_agregada' => 1,
                'id_servicio' => 29,
                'id_prestador' => 14,
                'user_id' => 10
            ]);

            Reserva::create([ 
                'fecha' => '2021-04-14',
                'hora_desde' => '02:00:00',
                'hora_hasta' => '07:00:00',
                'direccion' => 'Soler 68',
                'barrio' => 'Belgrano',
                'monto' => 10000,
                'concretado' => 1,
                'opinion_agregada' => 1,
                'id_servicio' => 29,
                'id_prestador' => 14,
                'user_id' => 10
            ]);

            Reserva::create([ 
                'fecha' => '2021-04-14',
                'hora_desde' => '02:00:00',
                'hora_hasta' => '07:00:00',
                'direccion' => 'Soler 68',
                'barrio' => 'Belgrano',
                'monto' => 10000,
                'concretado' => 1,
                'opinion_agregada' => 1,
                'id_servicio' => 29,
                'id_prestador' => 14,
                'user_id' => 10
            ]);

            Reserva::create([ 
                'fecha' => '2021-04-14',
                'hora_desde' => '02:00:00',
                'hora_hasta' => '07:00:00',
                'direccion' => 'Soler 68',
                'barrio' => 'Belgrano',
                'monto' => 10000,
                'concretado' => 1,
                'opinion_agregada' => 1,
                'id_servicio' => 29,
                'id_prestador' => 14,
                'user_id' => 10
            ]);

            Reserva::create([ 
                'fecha' => '2021-04-14',
                'hora_desde' => '02:00:00',
                'hora_hasta' => '07:00:00',
                'direccion' => 'Soler 68',
                'barrio' => 'Belgrano',
                'monto' => 10000,
                'concretado' => 1,
                'opinion_agregada' => 1,
                'id_servicio' => 29,
                'id_prestador' => 14,
                'user_id' => 10
            ]);

            Reserva::create([ 
                'fecha' => '2021-04-14',
                'hora_desde' => '02:00:00',
                'hora_hasta' => '07:00:00',
                'direccion' => 'Soler 68',
                'barrio' => 'Belgrano',
                'monto' => 10000,
                'concretado' => 1,
                'opinion_agregada' => 1,
                'id_servicio' => 29,
                'id_prestador' => 14,
                'user_id' => 10
            ]);

            Reserva::create([ 
                'fecha' => '2021-04-14',
                'hora_desde' => '02:00:00',
                'hora_hasta' => '07:00:00',
                'direccion' => 'Soler 68',
                'barrio' => 'Belgrano',
                'monto' => 10000,
                'concretado' => 1,
                'opinion_agregada' => 1,
                'id_servicio' => 29,
                'id_prestador' => 14,
                'user_id' => 10
            ]);

            Reserva::create([ 
                'fecha' => '2021-04-14',
                'hora_desde' => '02:00:00',
                'hora_hasta' => '07:00:00',
                'direccion' => 'Soler 68',
                'barrio' => 'Belgrano',
                'monto' => 10000,
                'concretado' => 1,
                'opinion_agregada' => 1,
                'id_servicio' => 29,
                'id_prestador' => 14,
                'user_id' => 10
            ]);
        // Fin Show cantantes liricos 15 contrataciones

        // Catering para 90 personas
            Reserva::create([ 
                'fecha' => '2021-04-14',
                'hora_desde' => '02:00:00',
                'hora_hasta' => '07:00:00',
                'direccion' => 'Soler 68',
                'barrio' => 'Belgrano',
                'monto' => 10000,
                'concretado' => 1,
                'opinion_agregada' => 1,
                'id_servicio' => 5,
                'id_prestador' => 1,
                'user_id' => 6
            ]);

            Opinion::create([ 
                'opinion' => 'La comida exquisita y la atencion de primer nivel',
                'id_servicio' => 5,
                'id_prestador' => 1,
                'user_id' => 6
            ]);

            Reserva::create([ 
                'fecha' => '2021-04-14',
                'hora_desde' => '02:00:00',
                'hora_hasta' => '07:00:00',
                'direccion' => 'Soler 68',
                'barrio' => 'Belgrano',
                'monto' => 8500,
                'concretado' => 1,
                'opinion_agregada' => 1,
                'id_servicio' => 5,
                'id_prestador' => 1,
                'user_id' => 7
            ]);

            Opinion::create([ 
                'opinion' => 'Muy puntuales y atentos. El servicio 10 puntos. Los volveria a contratar sin dudarlo',
                'id_servicio' => 5,
                'id_prestador' => 1,
                'user_id' => 7
            ]);

            Reserva::create([ 
                'fecha' => '2021-04-14',
                'hora_desde' => '02:00:00',
                'hora_hasta' => '07:00:00',
                'direccion' => 'Soler 68',
                'barrio' => 'Belgrano',
                'monto' => 8500,
                'concretado' => 1,
                'opinion_agregada' => 1,
                'id_servicio' => 5,
                'id_prestador' => 1,
                'user_id' => 8
            ]);

            Opinion::create([ 
                'opinion' => 'Hubo un pequeño problema con un plato pero el servicio muy bien, los invitados quedaron conformes',
                'id_servicio' => 5,
                'id_prestador' => 1,
                'user_id' => 8
            ]);

            Reserva::create([ 
                'fecha' => '2021-04-14',
                'hora_desde' => '02:00:00',
                'hora_hasta' => '07:00:00',
                'direccion' => 'Soler 68',
                'barrio' => 'Belgrano',
                'monto' => 8500,
                'concretado' => 1,
                'opinion_agregada' => 1,
                'id_servicio' => 5,
                'id_prestador' => 1,
                'user_id' => 8
            ]);

            Reserva::create([ 
                'fecha' => '2021-04-14',
                'hora_desde' => '02:00:00',
                'hora_hasta' => '07:00:00',
                'direccion' => 'Soler 68',
                'barrio' => 'Belgrano',
                'monto' => 8500,
                'concretado' => 1,
                'opinion_agregada' => 1,
                'id_servicio' => 5,
                'id_prestador' => 1,
                'user_id' => 8
            ]);
        // Fin Catering para 90 personas

    }
    
}
