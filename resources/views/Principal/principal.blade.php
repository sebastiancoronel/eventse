@extends('Principal.partials.master')
@section('content')

<!--Pagina principal-->
<div class="escritorio-mt-3-p-t-75">
	@if (Session::has('PerfilExistente'))
	<div id="ya_creaste_perfil" class="card wow bounceIn text-danger" data-wow-duration="10s" data-wow-delay="5s" data-wow-offset="10" data-wow-iteration="10">
		<div class="card-body">
			<div class="row d-flex justify-content-center align-items-center">
				<div class="col-md-12 col-12 text-center">
					<p class="pt-3 pr-2">{{Session::get('PerfilExistente')}}</p>
				</div>
				<a id="boton_aceptar" type="button" class="btn btn-danger">Aceptar</a>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$("#boton_aceptar").on('click', function() {
			$("#ya_creaste_perfil").fadeOut('400', function() {
				$(this).remove();
			});
			/* Act on the event */
		});
	</script>
	@endif

	{{-- <!-- Modal Search original -->
	<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
		<div class="container-search-header">
			<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
				<img src="images/icons/icon-close2.png" alt="CLOSE">
			</button>

			<form class="wrap-search-header flex-w p-l-15">
				<button class="flex-c-m trans-04">
					<i class="zmdi zmdi-search"></i>
				</button>
				<input class="plh3" type="text" name="search" placeholder="Search...">
			</form>
		</div>
	</div> --}}

	<!-- Slider -->
	<section class="section-slide d-none d-sm-block position-relative">
		<div class="wrap-slick1">
			<div class="slick1">
				@forelse ($Categorias as $categoria)
				<div class="item-slick1" style="background-image: url({{ asset($categoria->foto) }});">
					<div class="container h-full">
						<div class="flex-col-l-m p-t-200 p-b-20 p-l-20 p-r-20" style="width:40%; background: rgba(29, 38, 128, 0.50);">
							<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-101 cl2 respon2" style="color: white;">
									{{ $categoria->nombre }}
								</span>
							</div>

							<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1" style="color: white;">
									{{ $Mes }} {{ date('Y') }}
								</h2>
							</div>

							<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
								{{-- <a href="{{ route('ServiciosPorCategoria', ['id' => $categoria->id ] ) }}" target="_blank" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									<!-- Reservar ahora -->
									Ir a {{ $categoria->nombre }}
								</a> --}}
								<a href="{{ route('ServiciosPublicados') }}" target="_blank" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Reservar ahora
								</a>
							</div>
						</div>
					</div>
				</div>
				
				@empty

				@endforelse
			</div>
		</div>
		<!-- Buscador -->
		{{-- <div class="card position-absolute buscador-slider">
			
			<form class="card-body flex-w p-l-15">
				<div class="d-flex justify-content-center">
					<span class="ltext-100 cl5"> ¡Tenés más de 9.000 proveedores para elegir! </span>
				</div>
				<div class="row card-body align-items-center">
					<div class="col-lg-3">
						<select id="categorias" class="custom-select stext-101 borde-bajo" name="categoria" required>
							<option value="" selected>¿Qúe buscas?</option>
							@foreach ($Categorias as $categoria)
							<option value="{{ $categoria['id'] }}">{{$categoria['nombre']}}</option>
							@endforeach
						</select>
					</div>
	
					<div class="col-lg-3">
						<select id="provincia" class="custom-select stext-101 borde-bajo" name="provincia" required>
							<option value="" selected>¿Donde?</option>
							@foreach ($ProvinciasLocalidadesJson as $provincia)
							<option value="{{ $provincia['id'] }}">{{$provincia['nombre']}}</option>
							@endforeach
						</select>
					</div>
	
					<!-- Localidad -->
					<div class="col-lg-3">
						<select id="localidad" class="custom-select stext-101 borde-bajo" name="localidad" required>
							<option value="" selected> ¿Qué ciudad? </option>
						</select>
						
						@if ($errors->has('localidad'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('localidad') }}</strong>
							</span>
						@endif
					</div>
					<div class="col-lg-3">
						<button type="submit" class="btn btn bg1 stext-101 cl0 ">
							Buscar
						</button>
					</div>
				</div>
			</form>
		</div> --}}
		<!-- Fin buscador -->
	</section>
	<!--Fin Slider-->

	<!--SELECCION DE CATEGORIAS-->
	{{-- <div class="sec-banner bg0 p-b-50 mt-5">
		<div class="container">
			<div class="row">
				@forelse ($Categorias as $categoria)
					<div class="col-md-4 p-b-30">
						<!-- Block1 -->
						<div class="block1 wrap-pic-w background-img" style="background-image: url( '{{ asset($categoria->foto) }}' );">
						<a href=" {{ route('ServiciosPorCategoria', ['id' => $categoria->id ] ) }} " target="_blank" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
								<div class="block1-txt-child1 flex-col-l">
									<span class="block1-name ltext-102 trans-04 p-b-8" style="color: white;">
										{{ $categoria->nombre }}
									</span>

									<span class="block1-info stext-102 trans-04" style="color: white;">
										MAYO 2019
									</span>
								</div>

								<div class="block1-txt-child2 p-b-4 trans-05">
									<div class="block1-link stext-101 cl0 trans-09">
										Reservar ahora
									</div>
								</div>
							</a>
						</div>
					</div>
				@empty
					<div> No hay categorias creadas</div>	
				@endforelse
			</div>
		</div>
	</div> --}}
	<!--Fin SELECCION DE CATEGORIAS-->
	<hr>
	<div class="container my-5">
		<div class="p-b-10 text-center">
			<h3 class="ltext-103 cl5">
				Últimos publicados
			</h3>
		</div>
	</div>

	<!--Servicios-->
	<div class="sec-banner bg0 p-b-50 mt-5">
		<div class="container">
			<div class="row">
				@forelse ($Servicios as $servicio)
					<div class="col-md-4 p-b-30">
						<!-- Block1 -->
						<div class="block1 wrap-pic-w background-img" style="background-image: url( '{{ asset($servicio->foto_1) }}' );">
						<a href=" {{ route('MostrarServicio', ['id' => $servicio->id ] ) }} " target="_blank" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
								<div class="block1-txt-child1 flex-col-l">
									<span class="block1-name ltext-102 trans-04 p-b-8" style="color: white;">
										{{ $servicio->nombre }}
									</span>

									<span class="block1-info stext-102 trans-04 text-uppercase" style="color: white;">
										{{$Mes}} {{date('Y')}}
									</span>
								</div>

								<div class="block1-txt-child2 p-b-4 trans-05">
									<div class="block1-link stext-101 cl0 trans-09">
										Reservar ahora
									</div>
								</div>
							</a>
						</div>
					</div>
				@empty
					<div> No hay categorias creadas</div>	
				@endforelse
			</div>
		</div>
	</div>
	<!--Fin Servicios-->

	<hr>
	<!-- Destacados -->
	<section class="bg0 p-t-23 p-b-140">
		<div class="container">
			<div class="p-b-10 text-center">
				<h3 class="ltext-103 cl5">
					Destacados
				</h3>
			</div>

			<div id="" class="row isotope-grid mt-5" style="position: relative; height: 1717.38px;">
                @foreach ($FiltrarServicios as $filtrar_servicio)
                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item {{$filtrar_servicio->nombre_categoria}}" style="position: absolute; left: 0%; top: 0px;">
                        <!-- Block2 -->
                        <div class="block2 bor10">
							<div class="block2-pic hov-img0">
								<div style="background-image: url({{ asset($filtrar_servicio->foto_1) }}); background-position: center; background-size: cover; height: 200px;"> </div>
								{{-- <img src="{{ asset($filtrar_servicio->foto_1) }}" alt="IMG-PRODUCT"> --}}

								<a href=" {{route('MostrarServicio',[ 'id' => $filtrar_servicio  ])}} " class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Ver servicio
								</a>
							</div>

							<div class="block2-txt flex-w flex-t p-t-14 mx-3">
								<div class="row">
									<div class="col-lg-12 col-12 text-center">
										<a href="{{route('MostrarServicio',[ 'id' => $filtrar_servicio  ])}}" class="text-left cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
											{{ \Illuminate\Support\Str::limit($filtrar_servicio->nombre, 30) }}
										</a>
									</div>

									<div class="col-lg-12 col-12 text-center my-2">
										<span class="stext-105 cl3">
											@if ($filtrar_servicio->precio != null)
											$ {{$filtrar_servicio->precio}}
											@else
											Precio a convenir
											@endif
										</span>
									</div>

									<div class="col-lg-12 col-12 text-center">
										<span class="mt-2">
											<i class="zmdi zmdi-pin"></i> <small> {{ $filtrar_servicio->localidad }} , {{ $filtrar_servicio->provincia }} </small>
										</span>
									</div>
									
								</div>

								<!-- Separador -->
								<div class="bor10 mt-3" style="width: 100%; height: 1px;"></div>

								<div class="text-center mt-3">
									<span>
										<i class="zmdi zmdi-star text-warning"></i>
										<i class="zmdi zmdi-star text-warning"></i>
										<i class="zmdi zmdi-star text-warning"></i>
										<i class="zmdi zmdi-star text-warning"></i>
										<i class="zmdi zmdi-star text-warning"></i>
										{{-- Pienso establecer estrellas segun cantidad de contrataciones exitosas
											+10 1 estrella +20 2 estrellas asi hasta +50 5 estrellas --}}
										+100 contrataciones
									</span>
								</div>

								<!-- Separador -->
								<div class="bor10 mt-3" style="width: 100%; height: 1px;"></div>

								<div class="text-center mt-3">
									<small>
										{{ \Illuminate\Support\Str::limit($filtrar_servicio->descripcion, 80) }}
									</small>
								</div>

							</div>
                        </div>
                    </div>
                @endforeach
               
            </div> <!-- row isotope-grid -->

		</div>
	</section>

	<!-- Footer -->
	<footer class="bg3 p-t-75 p-b-32">
		<div class="container">
			{{-- <div class="row">
					<div class="col-sm-6 col-lg-3 p-b-50">
						<h4 class="stext-301 cl0 p-b-30">
							Categorias
						</h4>

						<ul>
							<li class="p-b-10">
								<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
									Salones
								</a>
							</li>

							<li class="p-b-10">
								<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
									Animación
								</a>
							</li>

							<li class="p-b-10">
								<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
									Mobiliario
								</a>
							</li>

						</ul>
					</div>

					<div class="col-sm-6 col-lg-3 p-b-50">
						<h4 class="stext-301 cl0 p-b-30">
							Ayuda
						</h4>

						<ul>
							<li class="p-b-10">
								<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
									Track Order
								</a>
							</li>

							<li class="p-b-10">
								<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
									Returns
								</a>
							</li>

							<li class="p-b-10">
								<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
									Shipping
								</a>
							</li>

							<li class="p-b-10">
								<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
									FAQs
								</a>
							</li>
						</ul>
					</div>

					<div class="col-sm-6 col-lg-3 p-b-50">
						<h4 class="stext-301 cl0 p-b-30">
							GET IN TOUCH
						</h4>

						<p class="stext-107 cl7 size-201">
							Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
						</p>

						<div class="p-t-27">
							<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
								<i class="fa fa-facebook"></i>
							</a>

							<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
								<i class="fa fa-instagram"></i>
							</a>

							<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
								<i class="fa fa-pinterest-p"></i>
							</a>
						</div>
					</div>

					<div class="col-sm-6 col-lg-3 p-b-50">
						<h4 class="stext-301 cl0 p-b-30">
							Newsletter
						</h4>

						<form>
							<div class="wrap-input1 w-full p-b-4">
								<input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@example.com">
								<div class="focus-input1 trans-04"></div>
							</div>

							<div class="p-t-18">
								<button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
									Subscribe
								</button>
							</div>
						</form>
					</div>
				</div> --}}

			<div class="p-t-40">
				<div class="flex-c-m flex-w p-b-18">
					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-01.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-02.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-03.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-04.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-05.png" alt="ICON-PAY">
					</a>
				</div>

				<p class="stext-107 cl6 txt-center">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;<script>
						document.write(new Date().getFullYear());
					</script> Todos los derechos reservados
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

				</p>
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fas fa-arrow-up"></i>
		</span>
	</div>

	<!-- Modal1 -->
	<div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
		<div class="overlay-modal1 js-hide-modal1"></div>

		<div class="container">
			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
				<button class="how-pos3 hov3 trans-04 js-hide-modal1">
					<img src="images/icons/icon-close.png" alt="CLOSE">
				</button>

				<div class="row">
					<div class="col-md-6 col-lg-7 p-b-30">
						<div class="p-l-25 p-r-30 p-lr-0-lg">
							<div class="wrap-slick3 flex-sb flex-w">
								<div class="wrap-slick3-dots"></div>
								<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

								<div class="slick3 gallery-lb">
									<div class="item-slick3" data-thumb="images/product-detail-01.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="images/product-detail-01.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-01.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>

									<div class="item-slick3" data-thumb="images/product-detail-02.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="images/product-detail-02.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-02.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>

									<div class="item-slick3" data-thumb="images/product-detail-03.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="images/product-detail-03.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-03.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-5 p-b-30">
						<div class="p-r-50 p-t-5 p-lr-0-lg">
							<h4 class="mtext-105 cl2 js-name-detail p-b-14">
								Lightweight Jacket
							</h4>

							<span class="mtext-106 cl2">
								$58.79
							</span>

							<p class="stext-102 cl3 p-t-23">
								Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.
							</p>

							<!--  -->
							<div class="p-t-33">
								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Size
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="js-select2" name="time">
												<option>Choose an option</option>
												<option>Size S</option>
												<option>Size M</option>
												<option>Size L</option>
												<option>Size XL</option>
											</select>
											<div class="dropDownSelect2"></div>
										</div>
									</div>
								</div>

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Color
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="js-select2" name="time">
												<option>Choose an option</option>
												<option>Red</option>
												<option>Blue</option>
												<option>White</option>
												<option>Grey</option>
											</select>
											<div class="dropDownSelect2"></div>
										</div>
									</div>
								</div>

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-204 flex-w flex-m respon6-next">
										<div class="wrap-num-product flex-w m-r-20 m-tb-10">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>

										<button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
											Add to cart
										</button>
									</div>
								</div>
							</div>

							<!--  -->
							<div class="flex-w flex-m p-l-100 p-t-40 respon7">
								<div class="flex-m bor9 p-r-10 m-r-11">
									<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
										<i class="zmdi zmdi-favorite"></i>
									</a>
								</div>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
									<i class="fa fa-facebook"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
									<i class="fa fa-twitter"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
									<i class="fa fa-google-plus"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@push('js')

	@if ( Session::has('PresupuestoEnviado') )
		<script>
			$(document).ready(function(){
				swal( 'Listo!' , 'Enviamos tu presupuesto, el prestador deberá responderte en las próximas 72hs' , 'success' );
			});
		</script>
	@endif

	
@endpush

@endsection
