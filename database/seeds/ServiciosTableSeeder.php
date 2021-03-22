<?php

use Illuminate\Database\Seeder;
use App\Servicio;

class ServiciosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Servicio::create([ 
            'nombre' => 'Salon Le Coin - Recepciones - Eventos - Catering - Dj',
            'descripcion' => 'Incluye: Todo comienza con una idea de tener un lugar “especial” donde se puedan realizar eventos de todo tipo en la zona del centro de San Martín.   Inculcando un servicio de catering 100% artesanal y todo el trabajo y esfuerzo que eso implica, así nació nuestro calido y exclusivo Salón con una prestigiosa arquitectura de estilo clásico.  Nos concentramos en la dedicación y esmero de lograr un ambiente armónico para cubrir las exigencias de nuestros invitados, sabemos lo importante que es un evento para nuestros clientes y el recuerdo que creamos en ellos es imborrable, por eso nuestro objetivo no esta más que centrado en una alta calidad de servicio dejando nuestra marca en cada evento como si fuera propio.  Nuestros Servicios Además de nuestro exclusivo salón le ofrecemos todos los servicios indispensables para que su evento se convierta en una noche inolvidable.  -Iluminación puntual sobre las mesas -Suite privada para los agasajados -Mantelería a elección y sillas vestidas -Organización integral del evento -Ambiente climatizado -Shows en vivo -Capacidad para 120 invitados -DJ y sonido profesional -Guardaropas -Servicio de catering -Efectos de iluminación laser -Seguridad privada -Máquina de humo -Pantalla gigante - No Incluye: -Torta Alusiva -Adicionales - Información Adicional: No dejes de visitar nuestra web www.lecoinrecepciones.com.ar  Y...  Buscanos también en las redes sociales  Facebook: Le Coin Recepciones  Instagram: @lecoinrecepciones',
            'foto_1' => 'images/servicios/EjdK5V7koeqR4IG8UrXR.PNG',
            'foto_2' => 'images/servicios/lExc2GKPvujKQntg3uFT.PNG',
            'foto_3' => 'images/servicios/LUcwBtisfUVIhdh39AjV.PNG',
            'foto_4' => 'images/servicios/Yt1WHdkkkLJejw7bz5Ys.PNG',
            'precio' => null,
            'precio_a_convenir' => 1,
            'moderado' => 0,
            'aprobado' => 0,
            'id_categoria' => 1,
            'id_prestador' => 1
        ]);

        Servicio::create([ 
            'nombre' => 'Juegos JumpZone',
            'descripcion' => 'ESTAMOS ENTREGANDO CON PROTOCOLO DE CUIDADOS POR COVID! La única TIENDA OFICIAL de MercadoLibre especializada en alquiler de juegos.  ES MUY FÁCIL!!!! 1) Reservá por WhatsApp sin seña. 2) Armamos todo en 10 minutos. 3) Que comience la DIVERSION! Aceptamos efectivo, transferencia y MercadoPago.  Nuestros alquileres duran hasta que finaliza tu evento, instalamos los juegos y los retiramos al día siguiente, de esta forma disfrutas sin restricciones ni límites de tiempo!!  Visitanos en IG @playonjuegos para ver más fotos y videos reales =)  Catalogo de juegos: • Metegol, Mini PingPong: $1100 c/u • Arcade multijuegos: $2200 • Jenga gigante: $800 • Tejo electrico: $1300 • Minipool: $1700 • Ping-Pong profesional: $2400 • PS3 c/4 joysticks: $2000 • PS4 c/4 joysticks: $2700 • TV LED 43": $2700 • Minidisco: $4500 • Karaoke: $4500 • Envío, instalación y retiro en CABA y alrededores: $1100',
            'foto_1' => 'images/servicios/FeGqF270wjm6hoSyDr7j.PNG',
            'foto_2' => 'images/servicios/dIoKyywRSsnWqEK2g85y.PNG',
            'foto_3' => 'images/servicios/s4ywDpJYwEfrpuJSwhop.PNG',
            'foto_4' => 'images/servicios/ao6BSPRPanGNijDN1Yyo.PNG',
            'precio' => null,
            'precio_a_convenir' => 1,
            'moderado' => 0,
            'aprobado' => 0,
            'id_categoria' => 1,
            'id_prestador' => 1
        ]);

        Servicio::create([ 
            'nombre' => 'Animaciones JumpZone',
            'descripcion' => '-Nuestros personajes se encuentran excelentemente logrados, enfocándonos en cada detalle donde la magia sorprenderá a cada niño, lenguaje neutro, vestuarios deluxe. Todos los videos incluyen fondos, telones, luces y sonido profesional, sillones adaptados y elementos de la princesa contratada. Se entregan mediante un link para descargar por google drive con definición HD.',
            'foto_1' => 'images/servicios/1DPT3blx911QWM59xYXj.PNG',
            'foto_2' => 'images/servicios/lGMasILFYIp49kvyI0sm.PNG',
            'foto_3' => 'images/servicios/iO4Yz3feBeFCaaAWfb1F.PNG',
            'foto_4' => 'images/servicios/sNv4z8R9eGsXjMiYbInm.PNG',
            'precio' => 6000,
            'precio_a_convenir' => null,
            'moderado' => 0,
            'aprobado' => 0,
            'id_categoria' => 3,
            'id_prestador' => 1
        ]);

        Servicio::create([ 
            'nombre' => 'Living para eventos',
            'descripcion' => 'Disfruten cómodamente de su evento con mobiliario de primera calidad. Una empresa con una extensa trayectoria brindando productos de diversos estilos para cualquier tipo de ocasión. Un día en el que merecen contar con el mejor ambiente.',
            'foto_1' => 'images/servicios/kZ0QUzL0K76i1cjztG9T.PNG',
            'foto_2' => 'images/servicios/vogM6ozXv1ZJk4jB9Ex5.PNG',
            'foto_3' => 'images/servicios/3vioTRQLY0Xv4cMjwdsc.PNG',
            'foto_4' => 'images/servicios/xkDX3k1g0PPJaJHafkGn.PNG',
            'precio' => null,
            'precio_a_convenir' => 1,
            'moderado' => 0,
            'aprobado' => 0,
            'id_categoria' => 4,
            'id_prestador' => 1
        ]);

        Servicio::create([ 
            'nombre' => 'Servicio de Catering para 100 personas',
            'descripcion' => 'Servicios que ofrece:  Para que vivan esa anhelada fecha como se lo merecen y sin estrés, la empresa les ofrece ocuparse hasta del más mínimo detalle de su celebración. Es por eso que les ofrecen todos los servicios necesarios para realizar un exitoso evento, entre ellos se destacan:  Servicio de event planner Catering de primer nivel Sonido e iluminación Ambientación y decoración Atención de personal calificado Alquiler de vajilla, mantelería y mobiliario',
            'foto_1' => 'images/servicios/RI9hkrfjHJsLe8lIjvaf.jpg',
            'foto_2' => 'images/servicios/OqwFHpIzBzTspIYfp2A2.jpg',
            'foto_3' => 'images/servicios/NBNLtuJYhj7Ri7hHhtbv.jpg',
            'foto_4' => 'images/servicios/FC2Iji7VfDYRskObjioJ.jpg',
            'precio' => null,
            'precio_a_convenir' => 1,
            'moderado' => 0,
            'aprobado' => 0,
            'id_categoria' => 5,
            'id_prestador' => 1
        ]);

        Servicio::create([ 
            'nombre' => 'Mago Zeta - Magia & Humor para todo tipo de eventos',
            'descripcion' => 'Más de quince años de experiencia realizando shows para fiestas de todo tipo, casamientos, cumpleaños, fiestas de 15, ferias, congresos, etc. Más de mil shows para fiestas en su carrera, lo han convertido en uno de los magos para fiestas mas solicitados de la actualidad.
            Un show para fiestas en el cual los verdaderos protagonistas serán tus invitados, muy participativo y sumamente ameno.
            Si estas pensando en sorprender con un regalo original, el show para fiestas del Mago Zeta es ideal.',
            'foto_1' => 'images/servicios/Cc2Bspq93cMK2jdsYstn.jpg',
            'foto_2' => 'images/servicios/92PI98kobChQ8xs2QZYG.jpg',
            'foto_3' => 'images/servicios/92PI98kobChQ8xs2QZYG.jpg',
            'foto_4' => 'images/servicios/XVUA4W5EuktMNZtsA14N.jpg',
            'precio' => 15000,
            'precio_a_convenir' => null,
            'moderado' => 0,
            'aprobado' => 0,
            'id_categoria' => 12,
            'id_prestador' => 1
        ]);

        Servicio::create([ 
            'nombre' => 'Servicio De Lunch + Pernil De Cerdo 25/30 Personas',
            'descripcion' => 'BIENVENIDOS!!"COCINA CUATRO FUEGOS"VALOR ABONANDO EN EFECTIVO$9850LOS PRECIOS TIENEN VIGENCIA POR 15 DIAS.100%calificaciones positivasLa tranquilidad que vas Elegir el mejor!CONSULTANOS AHORA, indicando fecha, localidad y horario, así presupuestamos en detalle tu inquietud!!DescripciónServicio de lunch artesanal + Pernil Cuatrofuegos*Pernil de Paleta de aprox 6 KG*3 Salsas artesanales*40 figacines de manteca*48 mini triples (jamón y queso)*48 Empanadas copetin de carne y Pollo*36 chips de salame y queso*24 bastoncitos de pollo empanados fritos*36 Pizzetas con Muzarella* Se puede optar por ternera fileteada con 50 figacitas y 3 salsas CON COSTO ADICIONAL.*CONSULTAR VALOR DE ENVÍOS. VALOR DEL KILOMETRO $20',
            'foto_1' => 'images/servicios/4qoXqpniqHA2a8FYqZOn.PNG',
            'foto_2' => 'images/servicios/YSjhrS7ucdQqQvBT3BZm.PNG',
            'foto_3' => 'images/servicios/SerCQPKzJpdqINX0jQy3.PNG',
            'foto_4' => 'images/servicios/xCODWyhzWfCdSItiiGnb.PNG',
            'precio' => 10900,
            'precio_a_convenir' => null,
            'moderado' => 0,
            'aprobado' => 0,
            'id_categoria' => 5,
            'id_prestador' => 1
        ]);

        Servicio::create([ 
            'nombre' => 'Dream Days - Servicio de decoracion',
            'descripcion' => 'A la hora de decorar un evento, para el equipo de Dream Days no hay límites, ya que a través de la creatividad que tanto los caracteriza logran crear ambientación que enamoran a primera vista. Así que, si pronto se casan y necesitan poner un toque espectacular a su velada, elegir a este equipo será toda una garantía.Todos los proyectos en los que se embarcan son realizados con mucho mimo y cuidado. Y para ello brindan diversos servicios que convertirán cada rincón de su boda en un cuento de hadas.',
            'foto_1' => 'images/servicios/dlWYl66jODbjOcalYz0z.PNG',
            'foto_2' => 'images/servicios/EjU1gv4F1XAbkmOPYZRl.PNG',
            'foto_3' => 'images/servicios/5lE2TkncrnBi27Liz9hf.PNG',
            'foto_4' => 'images/servicios/lZql0QYcswXP2JDKutAL.PNG',
            'precio' => null,
            'precio_a_convenir' => 1,
            'moderado' => 0,
            'aprobado' => 0,
            'id_categoria' => 7,
            'id_prestador' => 2
        ]);

        Servicio::create([ 
            'nombre' => 'Ardeluna Producciones - Shows en vivo',
            'descripcion' => 'Ardeluna Producciones tiene muchísimas propuestas para la animación y el entretenimiento de todo tipo de fiestas. Se trata de una compañía especializada en este tema, con especial predilección por las ideas originales y que incluyan al público. Las posibilidades van desde un show musical hasta un pequeño casino, en el medio hay un rango variadísimo en el que seguro encontrarán algo a su medida.
 
            Servicios que ofrece
            
            La empresa está formada por un staff artístico y profesional, dedicado al cien por cien a darles a ustedes el trato que merecen. Se encargará de ambientar su fiesta de casamiento y de organizar el servicio que contraten.',
            'foto_1' => 'images/servicios/fVRldzdQtpYbLBcaPA6R.jpg',
            'foto_2' => 'images/servicios/E2tKuFgBk6izZHZ8BQe5.jpg',
            'foto_3' => 'images/servicios/q6RE3Q4MzTDMOkyB4Xqr.jpg',
            'foto_4' => 'images/servicios/PH4Ervcr6ihaQLrtROEO.jpg',
            'precio' => null,
            'precio_a_convenir' => 1,
            'moderado' => 0,
            'aprobado' => 0,
            'id_categoria' => 9,
            'id_prestador' => 3
        ]);

        Servicio::create([ 
            'nombre' => 'Servicio de catering ejecutivo',
            'descripcion' => '•50 BROCHETTE DE CARNE Y VEGETALES•50 MINI BURGERS CON LECHUGA Y TOMATE•50 FIGACITAS DE BONDIOLA DESMENUZADA A LA BARBACOA•50 FIGACITAS DE CERDO A LA MOSTAZA•50 CHIPS DE JAMON Y QUESO O CRUDO Y QUESO O SALAME Y QUESO•50 CANASTITAS DE VERDURA O JAMÓN Y QUESO O CAPRESSE•50 EMPANADITAS DE CARNE CORTADA A CUCHILLO•50 CANAPÉS DE QUESO AZUL Y JAMÓN O QUESO CREMA Y CHERRY O QUESO CREMA KETCHUP Y CHEDAR',
            'foto_1' => 'images/servicios/GQjryV8vSMqTLG8uQcY9.jpg',
            'foto_2' => 'images/servicios/H5ivIezUlZYJKQtYeHah.jpg',
            'foto_3' => 'images/servicios/XVx8ncdUyWiT1jLrsvlQ.jpg',
            'foto_4' => 'images/servicios/Ga1EAdl9RGUaBu3f12n3.jpg',
            'precio' => null,
            'precio_a_convenir' => 1,
            'moderado' => 0,
            'aprobado' => 0,
            'id_categoria' => 5,
            'id_prestador' => 1
        ]);

    }
}
