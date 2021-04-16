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
            'moderado' => 1,
            'aprobado' => 1,
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
            'moderado' => 1,
            'aprobado' => 1,
            'id_categoria' => 2,
            'id_prestador' => 1
        ]);

        Servicio::create([ 
            'nombre' => 'Animaciones infantiles jumpzone',
            'descripcion' => '-Nuestros personajes se encuentran excelentemente logrados, enfocándonos en cada detalle donde la magia sorprenderá a cada niño, lenguaje neutro, vestuarios deluxe. Todos los videos incluyen fondos, telones, luces y sonido profesional, sillones adaptados y elementos de la princesa contratada. Se entregan mediante un link para descargar por google drive con definición HD.',
            'foto_1' => 'images/servicios/1DPT3blx911QWM59xYXj.PNG',
            'foto_2' => 'images/servicios/lGMasILFYIp49kvyI0sm.PNG',
            'foto_3' => 'images/servicios/iO4Yz3feBeFCaaAWfb1F.PNG',
            'foto_4' => 'images/servicios/sNv4z8R9eGsXjMiYbInm.PNG',
            'precio' => 6000,
            'precio_a_convenir' => null,
            'moderado' => 1,
            'aprobado' => 1,
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
            'moderado' => 1,
            'aprobado' => 1,
            'id_categoria' => 4,
            'id_prestador' => 1
        ]);

        Servicio::create([ 
            'nombre' => 'Servicio de Catering para 90 personas',
            'descripcion' => 'Servicios que ofrece:  Para que vivan esa anhelada fecha como se lo merecen y sin estrés, la empresa les ofrece ocuparse hasta del más mínimo detalle de su celebración. Es por eso que les ofrecen todos los servicios necesarios para realizar un exitoso evento, entre ellos se destacan:  Servicio de event planner Catering de primer nivel Sonido e iluminación Ambientación y decoración Atención de personal calificado Alquiler de vajilla, mantelería y mobiliario',
            'foto_1' => 'images/servicios/RI9hkrfjHJsLe8lIjvaf.jpg',
            'foto_2' => 'images/servicios/OqwFHpIzBzTspIYfp2A2.jpg',
            'foto_3' => 'images/servicios/NBNLtuJYhj7Ri7hHhtbv.jpg',
            'foto_4' => 'images/servicios/FC2Iji7VfDYRskObjioJ.jpg',
            'precio' => null,
            'precio_a_convenir' => 1,
            'moderado' => 1,
            'aprobado' => 1,
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
            'moderado' => 1,
            'aprobado' => 1,
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
            'moderado' => 1,
            'aprobado' => 1,
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
            'moderado' => 1,
            'aprobado' => 1,
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
            'moderado' => 1,
            'aprobado' => 1,
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
            'moderado' => 1,
            'aprobado' => 1,
            'id_categoria' => 5,
            'id_prestador' => 1
        ]);

        Servicio::create([ 
            'nombre' => 'Animación y entretenimiento - adolescentes y adultos',
            'descripcion' => 'Jumpzone animaciones para adultos es un grupo de artistas con una espectacular puesta en escena. 
            Hoy se presenta ante ustedes como una empresa seria y con muchas ideas para que su evento sea recordado por todos como una noche única y llena de sorpresas. 
            Sus servicios incluyen también todo lo referente a la organización de los shows, desde contenidos artísticos hasta la posibilidad de planificar actividades para el entretenimiento de su evento.',
            'foto_1' => 'images/servicios/jumpzoneadultos1.png',
            'foto_2' => 'images/servicios/jumpzoneadultos2.png',
            'foto_3' => 'images/servicios/jumpzoneadultos3.png',
            'foto_4' => 'images/servicios/jumpzoneadultos4.png',
            'precio' => null,
            'precio_a_convenir' => 1,
            'moderado' => 1,
            'aprobado' => 1,
            'id_categoria' => 3,
            'id_prestador' => 1
        ]);

        Servicio::create([ 
            'nombre' => 'Fotografos /videografos Profesionales Eventos 15',
            'descripcion' => 'Desde Alumbra Productora Audiovisual cubrimos todas las areas de la fotografia y de videografia con imagenes y tomas naturales, creativas y de calidad.
            Eventos: 15 años, Bodas, corporativo.
            Emprendedores: Creamos producimos y realizamos contenido para tu marca, para que puedas mostrar en redes sociales con estética y calidad tu producto o servicio.
            Book, look-book, portfolio, Video clip.',
            'foto_1' => 'images/servicios/alumbra1.png',
            'foto_2' => 'images/servicios/alumbra2.png',
            'foto_3' => 'images/servicios/alumbra3.png',
            'foto_4' => 'images/servicios/alumbra4.png',
            'precio' => 10000,
            'precio_a_convenir' => null,
            'moderado' => 1,
            'aprobado' => 1,
            'id_categoria' => 10,
            'id_prestador' => 4
        ]);

        Servicio::create([ 
            'nombre' => 'Concept Fotografia - HD o 4K lo ultimo en tecnología y calidad',
            'descripcion' => 'Tenemos todo tipo de presupuesta que se ajusta a su necesidad. Consultanos trabajo por hora , te respondemos a la brevedad.

            Trabajamos solo con camaras FX full frame profesional Nikon y lentes de ultima generacion que brinda la maxima calidad.
            
            Filamamos en calidad FULL HD o 4K lo ultimo en tecnología y calidad.
            
            Vamos a los eventos con equipos de respaldo de la misma calidad.
            
            PROMO INFANTIL
            Cobertura en Fotografía del evento por 3 horas.
            No hay limite de fotos, se entregan en máxima calidad y resolución editadas sin marcas de agua.
            Pedi el combo con revelado de fotos al mejor precio del mercado con calidad premium en un laboratorio prestigioso.
            Pregunta por el valor promocional y si necesitas personalizar el combo.',
            'foto_1' => 'images/servicios/concept1.png',
            'foto_2' => 'images/servicios/concept2.png',
            'foto_3' => 'images/servicios/concept3.png',
            'foto_4' => 'images/servicios/concept4.png',
            'precio' => 12500,
            'precio_a_convenir' => null,
            'moderado' => 1,
            'aprobado' => 1,
            'id_categoria' => 10,
            'id_prestador' => 5
        ]);

        Servicio::create([ 
            'nombre' => 'Servicio De Fotografía Profesional - Fotografo.',
            'descripcion' => 'Servicios fotograficos con 10 años de experiencia trabajando para agencias de Buenos Aires.
            Googleandome podras conocer todas mis referencias de clientes reales, mi página Web, porfolio en portales de casamientos, IG, reviews de Google con estrellas, etc.',
            'foto_1' => 'images/servicios/fotografoindep1.png',
            'foto_2' => 'images/servicios/fotografoindep2.png',
            'foto_3' => 'images/servicios/fotografoindep3.png',
            'foto_4' => 'images/servicios/fotografoindep4.png',
            'precio' => 15000,
            'precio_a_convenir' => null,
            'moderado' => 1,
            'aprobado' => 1,
            'id_categoria' => 10,
            'id_prestador' => 19
        ]);

        Servicio::create([ 
            'nombre' => 'Alquiler de Iluminación para Eventos.',
            'descripcion' => 'Contamos con la mas variada calidad de servicios de iluminacion inteligente, luces móviles , iluminacion tradicional, iluminacion LED,  Gran variedad de Luminarias para Shows y Eventos en General.

            Material propicio para la ambientación de eventos con luminarias cálidas , luces de obra, iluminacion teatral, y una enorme variedad de equipos de iluminacion de tecnología de ultima generación capaces de brindar soluciones para todo tipo de eventos.
            
            Consolas Digitales, Controladores DMX, cableado y todo lo necesario para tu evento.',
            'foto_1' => 'images/servicios/aura1.jpg',
            'foto_2' => 'images/servicios/aura2.jpg',
            'foto_3' => 'images/servicios/aura3.jpg',
            'foto_4' => 'images/servicios/aura4.jpg',
            'precio' => 8000,
            'precio_a_convenir' => null,
            'moderado' => 1,
            'aprobado' => 1,
            'id_categoria' => 6,
            'id_prestador' => 18
        ]);

        Servicio::create([ 
            'nombre' => 'Mundo Diversion– Delivery de juegos y diversión',
            'descripcion' => 'ESTAMOS ENTREGANDO CON PROTOCOLO DE CUIDADOS POR COVID!
            La única TIENDA OFICIAL de MercadoLibre especializada en alquiler de juegos.
            
            ES MUY FÁCIL!!!!
            1) Reservá sin entregar una seña.
            2) Armamos todo en 10 minutos.
            3) Que comience la DIVERSION!
            Aceptamos efectivo, transferencia y MercadoPago.
            
            Nuestros alquileres duran hasta que finaliza tu evento, instalamos los juegos y los retiramos al día siguiente, de esta forma disfrutas sin restricciones ni límites de tiempo!!',
            'foto_1' => 'images/servicios/mundodiversion1.png',
            'foto_2' => 'images/servicios/mundodiversion2.png',
            'foto_3' => 'images/servicios/mundodiversion3.png',
            'foto_4' => 'images/servicios/mundodiversion4.png',
            'precio' => null,
            'precio_a_convenir' => 1,
            'moderado' => 1,
            'aprobado' => 1,
            'id_categoria' => 2,
            'id_prestador' => 16
        ]);

        Servicio::create([ 
            'nombre' => 'Show De Magia Infantil Y Familiar Mago El Gran Beker Eventos.',
            'descripcion' => 'El gran Beker eventos
            Producciones artísticas
            (Show de magia, globologia, zanquistas, personajes itinerantes, zanquistas, talleres artísticos, maquillaje artístico y servicio de fotografía)
            
            Servicios y presupuestos acorde a tus posibilidades.
            
            El Verdadero momento en el que la magia ocurre, es en realidad un momento de asombro, es ese instante en el que la persona acaba de ver algo que no es posible, que no logra encajar en ninguno de sus casilleros. Entonces sus prejuicios y clasificaciones se caen y, durante unos segundos, su mente suprime sus casilleros y vuelve a ser la de un niño.',
            'foto_1' => 'images/servicios/granbecker1.png',
            'foto_2' => 'images/servicios/granbecker2.png',
            'foto_3' => 'images/servicios/granbecker3.png',
            'foto_4' => 'images/servicios/granbecker4.png',
            'precio' => 8500,
            'precio_a_convenir' => null,
            'moderado' => 1,
            'aprobado' => 1,
            'id_categoria' => 11,
            'id_prestador' => 7
        ]);

        Servicio::create([ 
            'nombre' => 'Mago Komodin para todo el publico',
            'descripcion' => 'El Mago Komodin se caracteriza por adaptarse a distintos públicos.
            Sus shows se basan en crear momentos inolvidables.
            En base a la participación del publico se crean situaciones con mucho humor familiar.
            Sus shows se basan en crear momentos unicos e inolvidables.
            Tiene variadas opciones para chicos, grandes y shows combinados en el que ambos participan.
            Tiene shows por zoom o presenciales.
            En los shows presenciales adaptandose a esta nueva realidad usa mascara facial, alcohol en gel y de ser necesario barbijo. (protocolo covid19)
            Hace Magia con efectos originales y comicos siempre adaptandose a las distintas edades
            Realiza Ventriloquia en donde el publico no parara de reir
            Para los mas chicos tambien hace globologia
            Tiene varios videos que podes ver para empezar a divertirte y para certificar sus años de experiencia.
            Consulta sin compromiso y visitanos en las distintas redes sociales!!',
            'foto_1' => 'images/servicios/komodin1.png',
            'foto_2' => 'images/servicios/komodin2.png',
            'foto_3' => 'images/servicios/komodin3.png',
            'foto_4' => 'images/servicios/komodin4.png',
            'precio' => 8000,
            'precio_a_convenir' => null,
            'moderado' => 1,
            'aprobado' => 1,
            'id_categoria' => 11,
            'id_prestador' => 6
        ]);

        Servicio::create([ 
            'nombre' => 'Mobiliario tipo living - mesas + pufs',
            'descripcion' => 'Disfruten cómodamente de su evento con mobiliario de primera calidad que les ofrece Bendito Living. Una empresa con una extensa trayectoria brindando productos de diversos estilos para cualquier tipo de ocasión. Un día en el que merecen contar con el mejor ambiente.

            Productos que ofrece:
            
            Bendito Living les asesora en la selección de los productos más adecuados a su evento. Ya sea en interior o exterior cuenta con múltiples opciones en formas y estilos.',
            'foto_1' => 'images/servicios/benditoliving1.jpg',
            'foto_2' => 'images/servicios/benditoliving2.jpg',
            'foto_3' => 'images/servicios/benditoliving3.jpg',
            'foto_4' => 'images/servicios/benditoliving4.jpg',
            'precio' => null,
            'precio_a_convenir' => 1,
            'moderado' => 1,
            'aprobado' => 1,
            'id_categoria' => 4,
            'id_prestador' => 8
        ]);

        Servicio::create([ 
            'nombre' => 'Mobiliario para eventos al aire libre',
            'descripcion' => '¿Están contemplando ambientar su evento con muebles elegantes, exclusivos y con diseños que alucinen? Pues la empresa Möble Söcial tiene todo lo que seguramente buscan. Se especializan en alquiler de living con los cuales logran crear eventos que se diferencia y que a todos les encanta.

            Productos que ofrece
            
            Todos y cada uno de los productos de Möble Söcial están en perfectas condiciones y estado de conservación. Sus muebles se adaptan a cualquier tipo de casamiento logrando un encaje perfecto con la temática del mismo. Estos son los productos que les ofrecen:
            
            Sillas
            Altar
            Mesas
            Equipo de Iluminación
            Muebles
            Mantelería',
            'foto_1' => 'images/servicios/benditolivingAireLibre1.png',
            'foto_2' => 'images/servicios/benditolivingAireLibre2.png',
            'foto_3' => 'images/servicios/benditolivingAireLibre3.png',
            'foto_4' => 'images/servicios/benditolivingAireLibre4.png',
            'precio' => null,
            'precio_a_convenir' => 1,
            'moderado' => 1,
            'aprobado' => 1,
            'id_categoria' => 4,
            'id_prestador' => 8
        ]);

        Servicio::create([ 
            'nombre' => 'Musica Dj Hat - Sonido, humo, ambientación',
            'descripcion' => 'Una correcta selección musical es algo determinante a la hora de celebrar un evento tan importante como su casamiento. Por eso, es necesario contar con un especialista en el tema como DJ Hat! Con más de 12 años de experiencia en distintas celebraciones sociales, este artista representará con su música la alegría que lo caracteriza y conseguirá que sus invitados disfruten de una fiesta inolvidable.

            Servicios que ofrece
            
            Con DJ Hat! encontrarán distintas opciones que harán de su enlace social algo único e irrepetible. Podrán combinar los servicios y crear el paquete perfecto que necesiten. Entre sus prestaciones se encuentran:
            
            Sonido hasta 100 personas
            Iluminación con efectos LED para pista de baile
            Cabezales móviles
            Máquinas de humo
            Ambientación DMX con tachos LED
            Animación y conducción',
            'foto_1' => 'images/servicios/DjHat1.png',
            'foto_2' => 'images/servicios/DjHat2.png',
            'foto_3' => 'images/servicios/DjHat3.png',
            'foto_4' => 'images/servicios/DjHat4.png',
            'precio' => 6500,
            'precio_a_convenir' => null,
            'moderado' => 1,
            'aprobado' => 1,
            'id_categoria' => 8,
            'id_prestador' => 9
        ]);

        Servicio::create([ 
            'nombre' => 'Servicio De Dj Disc Jockey',
            'descripcion' => 'DISC JOCKEY ( LA MUSICA LA ELEGIS VOS Y TUS INVITADOS)
            CABINA LED: PONELE ONDA A TU EVENTO CON NUESTRA EXCLUSIVA CABINA Y SORPRENDE A TUS INVITADOS
            SHOW DE LASER
            PROYECCION
            PANTALLA 100"
            KARAOKES LOS MAS DIVERTDOS CON JUEGOS PARA TODOS LOS INVITADOS
            CONSULTANOS VIA WATHSAPP
            PRESUPUESTOS AL INSTANTE
            CONSULTANOS',
            'foto_1' => 'images/servicios/MiniDisco1.png',
            'foto_2' => 'images/servicios/MiniDisco2.png',
            'foto_3' => 'images/servicios/MiniDisco3.png',
            'foto_4' => 'images/servicios/MiniDisco4.png',
            'precio' => 5000,
            'precio_a_convenir' => null,
            'moderado' => 1,
            'aprobado' => 1,
            'id_categoria' => 8,
            'id_prestador' => 10
        ]);

        Servicio::create([ 
            'nombre' => 'SoundMax Djs, escenarios, led y más',
            'descripcion' => 'Soundmax que se especializa en brindar un servicio completo de sonido e iluminación y disc jockey. 
            Su objetivo es el de brindarles una atención de calidad y, de esta forma, colaborar en hacer de su celebración de casamiento un evento inolvidable.
            
            Soundmax pone a disposición todos los accesorios necesarios para generar la atmósfera perfecta donde llevar a cabo la celebración. Entre sus prestaciones se destacan:
            
            Disc Jockey
            Escenarios
            Pantallas
            Equipos de sonido
            Equipos de iluminación
            Video y proyección
            Máquinas de humo y de burbujas
            Grupos electrógenos',
            'foto_1' => 'images/servicios/SoundMax1.jpg',
            'foto_2' => 'images/servicios/SoundMax2.jpg',
            'foto_3' => 'images/servicios/SoundMax3.png',
            'foto_4' => 'images/servicios/SoundMax4.jpg',
            'precio' => 7500,
            'precio_a_convenir' => null,
            'moderado' => 1,
            'aprobado' => 1,
            'id_categoria' => 8,
            'id_prestador' => 11
        ]);

        Servicio::create([ 
            'nombre' => 'Ornamentacion bodas y eventos nocturnos',
            'descripcion' => 'Dreamdays Eventos es una empresa que se especializa en la decoración y organización de bodas, eventos sociales y corporativos. Su boda es uno de los días más importantes de sus vidas, con lo cual, cada detalle debe ser pensado muy bien para asegurar que su evento sea único y personalizado a sus gustos. ¡Este equipo decorará su casamiento para que sea inolvidable!

            Productos que ofrece
            
            El equipo ofrece los siguientes productos para la ambientación de su fiesta de boda. El paquete de casamiento que ofrecen incluye una pizarra de bienvenida, señalización de sectores, ubicación de mesas, centro floral clásico en mesas de invitados (hasta 10 mesas) y mesa principal, guirnaldas y rincones. Ofrece servicios extras para ampliar la ambientación, si es necesario, de acuerdo a la cantidad de invitados y espacios a decorar.',
            'foto_1' => 'images/servicios/DreamDaysNocturos1.jpg',
            'foto_2' => 'images/servicios/DreamDaysNocturos2.jpg',
            'foto_3' => 'images/servicios/DreamDaysNocturos3.jpg',
            'foto_4' => 'images/servicios/DreamDaysNocturos4.jpg',
            'precio' => 9200,
            'precio_a_convenir' => null,
            'moderado' => 1,
            'aprobado' => 1,
            'id_categoria' => 7,
            'id_prestador' => 2
        ]);

        Servicio::create([ 
            'nombre' => 'Ornamentacion bodas y eventos Vintage',
            'descripcion' => 'Dreamdays Eventos es una empresa que se especializa en la decoración y organización de bodas, eventos sociales y corporativos. Su boda es uno de los días más importantes de sus vidas, con lo cual, cada detalle debe ser pensado muy bien para asegurar que su evento sea único y personalizado a sus gustos. ¡Este equipo decorará su casamiento para que sea inolvidable!

            Productos que ofrece
            
            El equipo ofrece los siguientes productos para la ambientación de su fiesta de boda. El paquete de casamiento que ofrecen incluye una pizarra de bienvenida, señalización de sectores, ubicación de mesas, centro floral clásico en mesas de invitados (hasta 10 mesas) y mesa principal, guirnaldas y rincones. Ofrece servicios extras para ampliar la ambientación, si es necesario, de acuerdo a la cantidad de invitados y espacios a decorar.',
            'foto_1' => 'images/servicios/DreamDaysVintage1.jpg',
            'foto_2' => 'images/servicios/DreamDaysVintage2.jpg',
            'foto_3' => 'images/servicios/DreamDaysVintage3.jpg',
            'foto_4' => 'images/servicios/DreamDaysVintage4.jpg',
            'precio' => 10000,
            'precio_a_convenir' => null,
            'moderado' => 1,
            'aprobado' => 1,
            'id_categoria' => 7,
            'id_prestador' => 2
        ]);

        Servicio::create([ 
            'nombre' => 'Fidela ¡Multiespacio para eventos sociales y corporativos!',
            'descripcion' => 'Fidela ¡Multiespacio para eventos sociales y corporativos!
            Ubicado sobre la Avenida Hipólito Yrigoyen
            
            Capacidad: 70 personas
            Catering propio de excelente calidad
            
            EVENTOS
            Casamientos, Cumpleaños, Fiestas 15 años, Comuniones, Matinée, Bautismos, Bar/Bat mitzvah, Eventos infantiles, Meriendas.',
            'foto_1' => 'images/servicios/Fidela1.png',
            'foto_2' => 'images/servicios/Fidela2.png',
            'foto_3' => 'images/servicios/Fidela3.png',
            'foto_4' => 'images/servicios/Fidela4.png',
            'precio' => 30000,
            'precio_a_convenir' => null,
            'moderado' => 1,
            'aprobado' => 1,
            'id_categoria' => 1,
            'id_prestador' => 15
        ]);

        Servicio::create([ 
            'nombre' => 'Rufino Eventos',
            'descripcion' => 'Bienvenidos a Rufino Eventos un PH antiguo de 330 mts2 refaccionado con una calidez inigualable para que ambientes tus eventos de la mejor manera. 
            El espacio cuenta con hall para recibir a tus invitados, salón principal con capacidad hasta 60 personas con mobiliario formal & hasta 100 personas con mobiliario informal, pista de baile equipado con la mejor tecnología, siempre a la vanguardia de la última generación en sistemas de luces, sonido y pantalla.
            Además, contamos con el Patio de recepción cubierto o descubierto con su barra de autor que lo caracteriza y su árbol natural de más de 20 metros con sus plantas naturales.
            Terraza de 150mts cuadrados para que disfrutes tu evento al aire libre con todos los protocolos escenciales .',
            'foto_1' => 'images/servicios/Rufino1.png',
            'foto_2' => 'images/servicios/Rufino2.png',
            'foto_3' => 'images/servicios/Rufino3.png',
            'foto_4' => 'images/servicios/Rufino4.png',
            'precio' => 45000,
            'precio_a_convenir' => null,
            'moderado' => 1,
            'aprobado' => 1,
            'id_categoria' => 1,
            'id_prestador' => 12
        ]);

        Servicio::create([ 
            'nombre' => '123 Cumbia! Shows en vivo',
            'descripcion' => 'Si están pensado ofrecer música en vivo con un show que ponga a todos a bailar por igual, nada mejor que la banda 1-2-3 Cumbia especializada en este ritmo de estilo. 
            Se preocupan porque cada tema interpretado suene tal cual ustedes lo esperan, y les recuerden aquellas emociones que vivieron al escucharlas.
            
            Servicios que ofrece
            
            1-2-3 Cumbia tocará en su evento música de todos los tiempos, en lo que incluye canciones de artistas como Wawancó, Antonio Ríos, Lia Crucet y Gilda hasta los últimos temas de Rombai, Márama o Mano Arriba. Su show tiene una duración de 45 minutos minutos aproximadamente, y este se coordinará con ustedes para que se ajuste a sus deseos.',
            'foto_1' => 'images/servicios/123Cumbia1.jpg',
            'foto_2' => 'images/servicios/123Cumbia2.jpg',
            'foto_3' => 'images/servicios/123Cumbia3.jpg',
            'foto_4' => 'images/servicios/123Cumbia4.png',
            'precio' => 10000,
            'precio_a_convenir' => null,
            'moderado' => 1,
            'aprobado' => 1,
            'id_categoria' => 9,
            'id_prestador' => 13
        ]);

        Servicio::create([ 
            'nombre' => 'Show de Cantantes Líricos',
            'descripcion' => 'Show de Cantantes Líricos nace como un grupo musical pero ofrece un servicio que va más allá del que suelen ofrecer este tipo de empresas. Su originalidad radica en que tiene espectáculos que hacen participar al público, llegando a ofrecer toda una experiencia interactiva. Los amantes de la buena música se deleitarán con sus canzonetas y zarzuelas, entre muchos otros géneros musicales.

            Servicios que ofrece
            
            Este grupo está formado por grandes voces de la lírica. Estos cantantes son auténticos artistas, llegando incluso a formar parte del legendario Teatro Colón. El show de su casamiento será un reflejo se sus gustos y deseos, ya que cada repertorio se adapta al gusto del público.',
            'foto_1' => 'images/servicios/Liricos1.jpg',
            'foto_2' => 'images/servicios/Liricos2.jpg',
            'foto_3' => 'images/servicios/Liricos3.jpg',
            'foto_4' => 'images/servicios/Liricos4.jpg',
            'precio' => 9900,
            'precio_a_convenir' => null,
            'moderado' => 1,
            'aprobado' => 1,
            'id_categoria' => 9,
            'id_prestador' => 14
        ]);

    }
}
