//asignar un nombre y versión al cache
const CACHE_NAME = 'v1_cache_eventse',
  urlsToCache = [
    './',
    'images/Logo-Eventse-1 ORIGINAL.png',
    'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js',
    'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js',
    'vendor/bootstrap/css/bootstrap.min.css',
    'vendor/bootstrap/css/mdb.min.css',
    'vendor/bootstrap/js/mdb.min.js',
    'https://use.fontawesome.com/releases/v5.8.2/css/all.css',
    'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js',
    'vendor/animate/animate.css',
    'vendor/css-hamburgers/hamburgers.min.css',
    'vendor/animsition/css/animsition.min.css',
    'vendor/select2/select2.min.css',
    'vendor/daterangepicker/daterangepicker.css',
    'vendor/slick/slick.css',
    'vendor/MagnificPopup/magnific-popup.css',
    'vendor/perfect-scrollbar/perfect-scrollbar.css',
    'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap',
    'vendor/fonts/iconic/css/material-design-iconic-font.min.css',
    'vendor/fonts/font-awesome-4.7.0/css/font-awesome.min.css',
    'vendor/fonts/linearicons-v1.0.0/icon-font.min.css',
    'vendor/fonts/linearicons-v1.0.0/icon-font.min.css',
    'adminlte/dist/css/adminlte.css',
    'adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.css',
    'css/util.css',
    'css/main.css',
    'json/manifest.json',
  ]

//durante la fase de instalación, generalmente se almacena en caché los activos estáticos
self.addEventListener('install', e => {
  e.waitUntil(
    caches.open(CACHE_NAME)
      .then(cache => {
        return cache.addAll(urlsToCache)
          .then(() => self.skipWaiting())
      })
      .catch(err => console.log('Falló registro de cache', err))
  )
})

//una vez que se instala el SW, se activa y busca los recursos para hacer que funcione sin conexión
self.addEventListener('activate', e => {
  const cacheWhitelist = [CACHE_NAME]

  e.waitUntil(
    caches.keys()
      .then(cacheNames => {
        return Promise.all(
          cacheNames.map(cacheName => {
            //Eliminamos lo que ya no se necesita en cache
            if (cacheWhitelist.indexOf(cacheName) === -1) {
              return caches.delete(cacheName)
            }
          })
        )
      })
      // Le indica al SW activar el cache actual
      .then(() => self.clients.claim())
  )
})

//cuando el navegador recupera una url
self.addEventListener('fetch', e => {
  //Responder ya sea con el objeto en caché o continuar y buscar la url real
  e.respondWith(
    caches.match(e.request)
      .then(res => {
        if (res) {
          //recuperar del cache
          return res
        }
        //recuperar de la petición a la url
        return fetch(e.request)
      })
  )
})

//Archivos al caché
const FILES_TO_CACHE = [
  '/offline.html',
];
