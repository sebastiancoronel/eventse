// //asignar un nombre y versión al cache
// const CACHE_NAME = 'v1_cache_eventse',
//   urlsToCache = [
//     './',
//     'json/manifest.json',
//     'images/Logo-Eventse-1 ORIGINAL.png',
//     'adminlte/dist/css/adminlte.css',
//     'adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.css',
//     'css/util.css',
//     'css/main.css',
//     'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js',
//     'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js',
//     'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap',
//     'https://use.fontawesome.com/releases/v5.8.2/css/all.css',
//     'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js',
//     'vendor/bootstrap/css/bootstrap.min.css',
//     'vendor/bootstrap/css/mdb.min.css',
//     'vendor/bootstrap/js/mdb.min.js',
//     'vendor/animate/animate.css',
//     'vendor/css-hamburgers/hamburgers.min.css',
//     'vendor/animsition/css/animsition.min.css',
//     'vendor/select2/select2.min.css',
//     'vendor/daterangepicker/daterangepicker.css',
//     'vendor/slick/slick.css',
//     'vendor/MagnificPopup/magnific-popup.css',
//     'vendor/perfect-scrollbar/perfect-scrollbar.css',
//     'vendor/fonts/iconic/css/material-design-iconic-font.min.css',
//     'vendor/fonts/font-awesome-4.7.0/css/font-awesome.min.css',
//     'vendor/fonts/linearicons-v1.0.0/icon-font.min.css',
//   ]
//
//  //================
//  //    Install
//  //================
// self.addEventListener('install', function(event) {
//   // Perform install steps
//   event.waitUntil(
//     caches.open(CACHE_NAME)
//       .then(function(cache) {
//         console.log('Opened cache');
//         return cache.addAll(urlsToCache);
//       })
//   );
// });
//
// //================
// //    Fetch
// //================
// self.addEventListener('fetch', function(event) {
//   event.respondWith(
//     caches.match(event.request)
//       .then(function(response) {
//         // Cache hit - return response
//         if (response) {
//           return response;
//         }
//         return fetch(event.request);
//       }
//     )
//   );
// });
//
// //una vez que se instala el SW, se activa y busca los recursos para hacer que funcione sin conexión
//
// self.addEventListener('activate', e => {
//   const cacheWhitelist = [CACHE_NAME]
//
//   e.waitUntil(
//     caches.keys()
//       .then(cacheNames => {
//         return Promise.all(
//           cacheNames.map(cacheName => {
//             //Eliminamos lo que ya no se necesita en cache
//             if (cacheWhitelist.indexOf(cacheName) === -1) {
//               return caches.delete(cacheName)
//             }
//           })
//         )
//       })
//       // Le indica al SW activar el cache actual
//       .then(() => self.clients.claim())
//   )
// })
//
//
// //Archivos al caché
// const FILES_TO_CACHE = [
//   '../resources/views/Dependencias/head.blade.php',
//   '../resources/views/Dependencias/scripts.blade.php',
//   '../resources/views/Ecommerce/welcome.blade.php',
//   '../resources/views/Ecommerce/articulo_detalle.blade.php',
//   '../resources/views/Ecommerce/carrito.blade.php',
//   '../resources/views/Ecommerce/publicar.blade.php',
//   '../resources/views/layouts/barra_navegacion_principal.blade.php',
//   '../resources/views/Perfiles/Cliente/Menu/Servicios/favoritos.blade.php',
//   '../resources/views/Perfiles/Cliente/Menu/Servicios/preguntas_realizadas.blade.php',
//   '../resources/views/Perfiles/Cliente/Menu/Servicios/presupuestos_recibidos.blade.php',
//   '../resources/views/Perfiles/Cliente/Menu/Servicios/servicios_finalizados.blade.php',
//   '../resources/views/Perfiles/Cliente/Menu/resumen.blade.php',
// ];
