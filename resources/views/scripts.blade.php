{{-- Scripts --}}
<!--===============================================================================================-->
	<script src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
	<!-- jQuery UI -->
<script src="{{asset('vendor/jqueryui/jquery-ui.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('adminlte/dist/js/adminlte.js')}}"></script>

		<script src="{{asset('vendor/select2/select2.min.js')}}"></script>
		<script>
			$(".js-select2").each(function(){
				$(this).select2({
					minimumResultsForSearch: 20,
					dropdownParent: $(this).next('.dropDownSelect2')
				});
			})
		</script>
	<!--===============================================================================================-->
		<script src="{{asset('vendor/daterangepicker/moment.min.js')}}"></script>
		<script src="{{asset('vendor/daterangepicker/daterangepicker.js')}}"></script>
	<!--===============================================================================================-->
		<script src="{{asset('vendor/slick/slick.min.js')}}"></script>
		<script src="{{asset('js/slick-custom.js')}}"></script>
	<!--===============================================================================================-->
		<script src="{{asset('vendor/parallax100/parallax100.js')}}"></script>
		<script>
					$('.parallax100').parallax100();
		</script>
	<!--===============================================================================================-->
		<script src="{{asset('vendor/MagnificPopup/jquery.magnific-popup.min.js')}}"></script>
		<script>
			$('.gallery-lb').each(function() { // the containers for all your galleries
				$(this).magnificPopup({
							delegate: 'a', // the selector for gallery item
							type: 'image',
							gallery: {
								enabled:true
							},
							mainClass: 'mfp-fade'
					});
			});
		</script>
	<!--===============================================================================================-->
		<script src="{{asset('vendor/isotope/isotope.pkgd.min.js')}}"></script>
	<!--===============================================================================================-->
		<script src="{{asset('vendor/sweetalert/sweetalert.min.js')}}"></script>
		<script>
			$('.js-addwish-b2').on('click', function(e){
				e.preventDefault();
			});

			$('.js-addwish-b2').each(function(){
				var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
				$(this).on('click', function(){
					swal(nameProduct, "is added to wishlist !", "success");

					$(this).addClass('js-addedwish-b2');
					$(this).off('click');
				});
			});

			$('.js-addwish-detail').each(function(){
				var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

				$(this).on('click', function(){
					swal(nameProduct, "is added to wishlist !", "success");

					$(this).addClass('js-addedwish-detail');
					$(this).off('click');
				});
			});

			/*---------------------------------------------*/

			$('.js-addcart-detail').each(function(){
				var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
				$(this).on('click', function(){
					swal(nameProduct, "is added to cart !", "success");
				});
			});

		</script>
	<!--===============================================================================================-->
		<script src="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
		<script>
			$('.js-pscroll').each(function(){
				$(this).css('position','relative');
				$(this).css('overflow','hidden');
				var ps = new PerfectScrollbar(this, {
					wheelSpeed: 1,
					scrollingThreshold: 1000,
					wheelPropagation: false,
				});

				$(window).on('resize', function(){
					ps.update();
				})
			});
		</script>
	<!--===============================================================================================-->
		<script src="{{asset('js/main.js')}}"></script>
 <!--===============================================================================================-->

{{-- PWA --}}
<script>
$(document).ready(function(){
	if('serviceWorker' in navigator){
		navigator.serviceWorker.register('./sw.js')
		.then(reg=> console.log('Registro de Service Worker exitoso',reg))
		.catch(err=> console.warn('Error al tratar de registrar el service worker',err))
	}
	//asignar un nombre y versión al cache
	const CACHE_NAME = 'v1_cache_eventse',
	urlsToCache = [
		'./',
		'https://fonts.googleapis.com/css?family=Raleway:400,700',
		'https://fonts.gstatic.com/s/raleway/v12/1Ptrg8zYS_SKggPNwJYtWqZPAA.woff2',
		'https://use.fontawesome.com/releases/v5.0.7/css/all.css',
		'https://use.fontawesome.com/releases/v5.0.6/webfonts/fa-brands-400.woff2',
		'vendor/jquery/jquery-3.2.1.min.js',
		'vendor/jqueryui/jquery-ui.min.js',
		'vendor/animsition/js/animsition.min.js',
		'vendor/bootstrap/js/popper.js',
		'vendor/bootstrap/js/bootstrap.min.js',
		'adminlte/dist/js/adminlte.js',
		'vendor/select2/select2.min.js',
		'vendor/daterangepicker/moment.min.js',
		'vendor/daterangepicker/daterangepicker.js',
		'vendor/slick/slick.min.js',
		'js/slick-custom.js',
		'vendor/parallax100/parallax100.js',
		'vendor/MagnificPopup/jquery.magnific-popup.min.js',
		'vendor/isotope/isotope.pkgd.min.js',
		'vendor/sweetalert/sweetalert.min.js',
		'vendor/perfect-scrollbar/perfect-scrollbar.min.js',
		'js/main.js',
		'vendor/bootstrap/css/bootstrap.min.css',
		'vendor/animate/animate.css',
		'vendor/css-hamburgers/hamburgers.min.css',
		'vendor/animsition/css/animsition.min.css',
		'vendor/select2/select2.min.css',
		'vendor/daterangepicker/daterangepicker.css',
		'vendor/slick/slick.css',
		'vendor/MagnificPopup/magnific-popup.css',
		'vendor/perfect-scrollbar/perfect-scrollbar.css',
		'images/Logo-Eventse-1 ORIGINAL.png',
		'adminlte/plugins/fontawesome-free/css/all.min.css',,
		'adminlte/dist/js/adminlte.js',
		'adminlte/dist/css/adminlte.css',
		'adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.css',
		'css/util.css',
		'css/main.css'

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
	});

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
	});

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
	});

});


</script>

{{-- FIN SCRIPTS --}}
