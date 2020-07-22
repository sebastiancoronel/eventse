@extends('layouts.barra_navegacion_principal')
@section('content')

{{-- Detalle de producto --}}
<div class="animsition">
	<!-- breadcrumb escritorio -->
	<div class="container mt-5 pt-5 d-none d-sm-block">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="{{route('Principal')}}" class="stext-109 cl8 hov-cl1 trans-04">
				Inicio
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

		<a href="{{route('ServiciosPublicados')}}" class="stext-109 cl8 hov-cl1 trans-04">
				Reservar
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				{{$Inmueble->titulo}}
			</span>
		</div>
	</div>
	<!-- breadcrumb movil -->
	<div class="container d-md-none d-lg-none d-xl-none d-xs-block d-sm-block">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="{{route('Principal')}}" class="stext-109 cl8 hov-cl1 trans-04">
				Inicio
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<a href="{{route('ServiciosPublicados')}}" class="stext-109 cl8 hov-cl1 trans-04">
				Reservar
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				{{$Inmueble->titulo}}
			</span>
		</div>
	</div>

	<section class="sec-product-detail bg0 p-t-65 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-7 p-b-30">
					<div class="p-l-25 p-r-30 p-lr-0-lg">

						<!-- Slick de fotos Escritorio -->
						<div class="wrap-slick3 flex-sb flex-w ">
							<!-- Dots -->
							<div class="wrap-slick3-dots d-none d-sm-block">
							</div>
							<!-- Arrows -->
							<div class="wrap-slick3-arrows flex-sb-m flex-w d-none d-sm-block ">
							</div>

							<div class="slick3 gallery-lb d-none d-sm-block">

								<div class="item-slick3" data-thumb="{{$Inmueble->foto_1}}">
									<div class="wrap-pic-w pos-relative">
										<img src="{{$Inmueble->foto_1}}" alt="IMG-PRODUCT">
										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{$Inmueble->foto_1}}">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>

								<div class="item-slick3" data-thumb="{{$Inmueble->foto_2}}">
									<div class="wrap-pic-w pos-relative">
										<img src="{{$Inmueble->foto_2}}" alt="IMG-PRODUCT">
										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{$Inmueble->foto_2}}">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>

								<div class="item-slick3" data-thumb="{{$Inmueble->foto_3}}">
									<div class="wrap-pic-w pos-relative">
										<img src="{{$Inmueble->foto_3}}" alt="IMG-PRODUCT">
										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{$Inmueble->foto_3}}">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>

								<div class="item-slick3" data-thumb="{{$Inmueble->foto_4}}">
									<div class="wrap-pic-w pos-relative">
										<img src="{{$Inmueble->foto_4}}" alt="IMG-PRODUCT">
										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{$Inmueble->foto_4}}">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>

							</div>
						</div>
						<!-- Fin Slick de fotos Escritorio -->

						<!-- Slick de fotos Movil -->
						<div class="wrap-slick3 flex-c">

							<div class="slick3 gallery-lb d-md-none d-lg-none d-xl-none d-xs-block d-sm-block">

								<div class="item-slick3" data-thumb="{{$Inmueble->foto_1}}">
									<div class="wrap-pic-w pos-relative">
										<img src="{{$Inmueble->foto_1}}" alt="IMG-PRODUCT">
										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{$Inmueble->foto_1}}">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>

								<div class="item-slick3" data-thumb="{{$Inmueble->foto_2}}">
									<div class="wrap-pic-w pos-relative">
										<img src="{{$Inmueble->foto_2}}" alt="IMG-PRODUCT">
										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{$Inmueble->foto_2}}">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>

								<div class="item-slick3" data-thumb="{{$Inmueble->foto_3}}">
									<div class="wrap-pic-w pos-relative">
										<img src="{{$Inmueble->foto_3}}" alt="IMG-PRODUCT">
										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{$Inmueble->foto_3}}">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>

								<div class="item-slick3" data-thumb="{{$Inmueble->foto_4}}">
									<div class="wrap-pic-w pos-relative">
										<img src="{{$Inmueble->foto_4}}" alt="IMG-PRODUCT">
										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{$Inmueble->foto_4}}">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>

							</div>
						</div>
						<!-- Fin Slick de fotos Movil -->
					</div>
				</div>

				<div class="col-md-6 col-lg-5 p-b-30">
					<div class="p-r-50 p-t-5 p-lr-0-lg">
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
							{{$Inmueble->titulo}}
						</h4>

						<span class="mtext-106 cl2" style="color:#f40082;">
							@if ($Inmueble->precio != null)
								$ {{$Inmueble->precio}}
							@else
								Precio a convenir
							@endif
						</span>

						<p class="stext-102 cl3 p-t-23">
							<i class="zmdi zmdi-pin"></i>	{{$Inmueble->localidad}}, {{$Inmueble->provincia}}
						</p>

						<p class="stext-102 cl3 p-t-23  mt-5 d-flex align-items-center">
							<img src="{{$Prestador->foto}}" class="" width="10%" alt="IMG-PRESTADOR">
							<small class="ml-3">
								Publicado por <a href="" class="stext-104 cl4 hov-cl1"> {{$Prestador->nombre}} </a> 
							</small>
						</p>
						<!--  -->
						<div class="p-t-33">
							{{-- <div class="flex-w flex-r-m p-b-10">
								<div class="size-203 flex-c-m respon6">
									Select 1
								</div>

								<div class="size-204 respon6-next">
									<div class="rs1-select2 bor8 bg0">
										<select class="js-select2" name="time">
											<option>Elegir una opción</option>
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
									Select 2
								</div>

								<div class="size-204 respon6-next">
									<div class="rs1-select2 bor8 bg0">
										<select class="js-select2" name="time">
											<option>Elegir una opción</option>
											<option>Red</option>
											<option>Blue</option>
											<option>White</option>
											<option>Grey</option>
										</select>
										<div class="dropDownSelect2"></div>
									</div>
								</div>
							</div> --}}

							<div class="flex-w flex-r-m p-b-10">
								<div class="size-204 flex-w flex-m respon6-next">
									{{-- <div class="wrap-num-product flex-w m-r-20 m-tb-10">
										<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
											<i class="fs-16 zmdi zmdi-minus"></i>
										</div>

										<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">

										<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
											<i class="fs-16 zmdi zmdi-plus"></i>
										</div>
									</div> --}}
								@if ( Auth::user() )
								<form id="form_agregar_servicio" action="{{route('AgregarAlCarrito')}}" method="POST">
									@csrf
									<input id="id_inmueble" hidden type="text" name="id_inmueble" value="{{$Inmueble->id}}">
									<input id="id_cliente" hidden type="text" name="id_cliente" value="{{$Cliente->id}}">
									<button type="submit" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
										Agregar al paquete
									</button>
								</form>
								@endif

								@guest
									<button id="btn_agregar_servicio_guest" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
										Agregar al paquete
									</button>
								@endguest
								
								</div>
							</div>
						</div>

						<!-- Favoritos y redes sociales -->
						<div class="flex-w flex-m p-l-100 p-t-40 respon7">
							<div class="flex-m bor9 p-r-10 m-r-11">
								{{-- <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
									<i class="zmdi zmdi-favorite"></i>
								</a> --}}
							</div>

							<a href="https://www.facebook.com/sharer/sharer.php?u=example.org" target="_blank" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
								<i class="fa fa-facebook"></i>
							</a>

							{{-- <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
								<i class="fa fa-twitter"></i>
							</a>

							<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
								<i class="fa fa-google-plus"></i>
							</a> --}}
						</div>
					</div>
				</div>
			</div>

			{{-- Toda la informacion del articulo --}}
			<div class="bor10 m-t-50 p-t-43 p-b-40">
				<!-- Tab01 -->
				<div class="tab01">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item p-b-10">
							<a class="nav-link active" data-toggle="tab" href="#description" role="tab">Descripción</a>
						</li>

						<li class="nav-item p-b-10">
							<a class="nav-link" data-toggle="tab" href="#information" role="tab">Información adicional</a>
						</li>
						<li class="nav-item p-b-10">
							<a class="nav-link" data-toggle="tab" href="#preguntas" role="tab">Preguntas</a>
						</li>

						<li class="nav-item p-b-10">
							<a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Opiniones ({{$CantidadOpiniones}})</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content p-t-43">
						
						<!-- Descripcion -->
						<div class="tab-pane fade show active" id="description" role="tabpanel">
							<div class="how-pos2 p-lr-15-md text-center row">
								<p class="stext-102 cl6 text-left row col-md-6">
									<span class="text-uppercase col-md-12 mt-4"> Superficie: {{ $Inmueble->superficie }} </span>
									<span class="text-uppercase col-md-12 mt-4"> Capacidad de invitados: {{ $Inmueble->capacidad }} </span>
								</p>

								<p class="stext-102 cl6 text-left row col-md-6">
									<span class="text-uppercase col-md-12 mt-4"> Calle: {{ $Inmueble->calle }} </span>
									<span class="text-uppercase col-md-12 mt-4"> Número: {{ $Inmueble->numero }} </span>
									<span class="text-uppercase col-md-12 mt-4"> Barrio: {{ $Inmueble->barrio }} </span>

								</p>

							</div>
						</div>

						<!-- Informacion adicional -->
						<div class="tab-pane fade" id="information" role="tabpanel">
							<div class="row">
								<div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
									<ul class="p-lr-28 p-lr-15-sm">
										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Barra de tragos:
											</span>

											<span class="stext-102 cl6 size-206">
												@if ( $Inmueble->barra_tragos == 1 )
													SI
												@else
													NO
												@endif
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Catering:
											</span>

											<span class="stext-102 cl6 size-206">
												@if ( $Inmueble->catering == 1 )
													SI
												@else
													NO
												@endif
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												DJ:
											</span>

											<span class="stext-102 cl6 size-206">
												@if ( $Inmueble->dj == 1 )
													SI
												@else
													NO
												@endif
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Mesas y sillas:
											</span>

											<span class="stext-102 cl6 size-206">
												@if ( $Inmueble->mesas_sillas == 1 )
													SI
												@else
													NO
												@endif
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Mesa dulce:
											</span>

											<span class="stext-102 cl6 size-206">
												@if ( $Inmueble->mesa_dulce == 1 )
													SI
												@else
													NO
												@endif
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Guardarropas:
											</span>

											<span class="stext-102 cl6 size-206">
												@if ( $Inmueble->guardarropas == 1 )
													SI
												@else
													NO
												@endif
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Guardarropas:
											</span>

											<span class="stext-102 cl6 size-206">
												@if ( $Inmueble->guardarropas == 1 )
													SI
												@else
													NO
												@endif
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Mozos y camareras:
											</span>

											<span class="stext-102 cl6 size-206">
												@if ( $Inmueble->mozos_camareras == 1 )
													SI
												@else
													NO
												@endif
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Proyector y pantalla:
											</span>

											<span class="stext-102 cl6 size-206">
												@if ( $Inmueble->proyector_pantalla == 1 )
													SI
												@else
													NO
												@endif
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Recepción:
											</span>

											<span class="stext-102 cl6 size-206">
												@if ( $Inmueble->recepcion == 1 )
													SI
												@else
													NO
												@endif
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Vajillas
											</span>

											<span class="stext-102 cl6 size-206">
												@if ( $Inmueble->vajillas == 1 )
													SI
												@else
													NO
												@endif												
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												WiFi
											</span>

											<span class="stext-102 cl6 size-206">
												@if ( $Inmueble->wifi == 1 )
													SI
												@else
													NO
												@endif
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Piscina
											</span>

											<span class="stext-102 cl6 size-206">
												@if ( $Inmueble->piscina == 1 )
													SI
												@else
													NO
												@endif
											</span>
										</li>

									</ul>
								</div>
							</div>
						</div>

						<!-- Opiniones -->
						<div class="tab-pane fade" id="reviews" role="tabpanel">
							<div class="row">
								<div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
									<div class="p-b-30 m-lr-15-sm">
										@foreach ($OpinionesInmueble as $opinion_inmueble)
										<!-- Review -->
										<div class="flex-w flex-t p-b-68">
											{{-- <div class="wrap-pic-s size-109 bor0 of-hidden m-r-18 m-t-6">
												<img src="{{asset('images/avatar-01.jpg')}}" alt="AVATAR">
											</div> --}}
											
											<div class="size-207">
												<div class="flex-w flex-sb-m p-b-17">
													<span class="mtext-107 cl2 p-r-20">
														{{$opinion_inmueble->name}} {{$opinion_inmueble->lastname}}
													</span>
													
													{{-- <span class="fs-18 cl11">
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star-half"></i>
													</span> --}}
												</div>
												
												<p class="stext-102 cl6">
													{{$opinion_inmueble->opinion}}
												</p>
												<hr>
											</div>
										</div>
										
										@endforeach

										<!-- Add review -->
										{{-- <form class="w-full">
											<h5 class="mtext-108 cl2 p-b-7">
												Add a review
											</h5>

											<p class="stext-102 cl6">
												Your email address will not be published. Required fields are marked *
											</p>

											<div class="flex-w flex-m p-t-50 p-b-23">
												<span class="stext-102 cl3 m-r-16">
													Your Rating
												</span>

												<span class="wrap-rating fs-18 cl11 pointer">
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<input class="dis-none" type="number" name="rating">
												</span>
											</div>

											<div class="row p-b-25">
												<div class="col-12 p-b-5">
													<label class="stext-102 cl3" for="review">Your review</label>
													<textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10" id="review" name="review"></textarea>
												</div>

												<div class="col-sm-6 p-b-5">
													<label class="stext-102 cl3" for="name">Name</label>
													<input class="size-111 bor8 stext-102 cl2 p-lr-20" id="name" type="text" name="name">
												</div>

												<div class="col-sm-6 p-b-5">
													<label class="stext-102 cl3" for="email">Email</label>
													<input class="size-111 bor8 stext-102 cl2 p-lr-20" id="email" type="text" name="email">
												</div>
											</div>

											<button class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10">
												Submit
											</button>
										</form> --}}

									</div>
								</div>
							</div>
						</div>

						{{-- Preguntas --}}
						<div class="tab-pane fade how-pos2 p-lr-15-md" id="preguntas" role="tabpanel">
							{{-- Input para preguntar --}}
							<div class="md-form">
								@auth
									{{-- Comprueba que el usuario tenga una cuenta de cliente y esté logueado --}}
									@php
										$Usuario = Auth::user()->id;
										$Cliente = DB::table('clientes')
													->where('user_id', Auth::user()->id)
													->select('*')                         
													->first();
									@endphp

									@if ($Cliente && $Usuario != null)
									<form id="form_pregunta" action="{{route('PublicarPregunta')}}">
										<input id="id_prestador" hidden type="text" name="id_prestador" value="{{$Prestador->id}}">
										<input id="id_inmueble" hidden type="text" name="id_inmueble" value="{{$Inmueble->id}}">
										<input id="id_cliente" hidden type="text" name="id_cliente" value="{{$Cliente->id}}">
									
										<textarea id="textarea_pregunta" class="form-control size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10" name="pregunta" rows="4" cols="4" maxlength="300" required></textarea>
										<button id="boton_preguntar" type="submit" class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10">
											Preguntar
										</button>
									</form>
										@else
										<div class="alert alert-warning m-auto text-center">
											<i class="zmdi zmdi-alert-triangle"></i> 
											Debes <a href="{{route('login')}}" class=""> completar tus datos como cliente </a> para hacer una pregunta
										</div>
									@endif
								@endauth

									@guest
										<div class="alert alert-warning m-auto text-center">
											<i class="zmdi zmdi-alert-triangle"></i> 
											Debes <a href="{{route('login')}}" class=""> iniciar sesión </a> y <a href="{{route('login')}}" class=""> completar tus datos como cliente </a> para hacer una pregunta
										</div>
									@endguest
								
								</div>

								{{-- Traer todas las preguntas --}}
								<div id="mostrar_preguntas" >
									@foreach ($PreguntasInmueble as $pregunta_inmueble)
									<div class="row mt-4 rounded">
										<span class="col-md-12 col-12 text-dark"> <i class="zmdi zmdi-comment-text"></i> {{$pregunta_inmueble->pregunta}} </span><br>
										@if ( $pregunta_inmueble->respuesta != null)
											<span class="col-md-12 col-12 mt-3 text-black-50" ><i class="zmdi zmdi-comment-alt-text"></i> {{$pregunta_inmueble->respuesta}} </span><br><br><br>
										@endif
									</div>
									<hr>
									@endforeach
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">
			{{-- <span class="stext-107 cl6 p-lr-25">
				SKU: JAK-01
			</span> --}}

			<span class="stext-107 cl6 p-lr-25">
			Categoria: Inmuebles
			</span>
		</div>
	</section>

</div>
{{-- Agregar al carrito --}}
<script>
	//Botón agregar al paquete @ Guest

	$("#btn_agregar_servicio_guest").click(function(){
		swal('Debes iniciar sesión y completar tus datos primero', '','error');
	});

	//Agregar al paquete
	$("#form_agregar_servicio").submit(function(e){
		e.preventDefault();
		
		var id_inmueble = $('#id_inmueble').val();
		var id_cliente = $('#id_cliente').val();

		$.ajax({
			method: 'POST',
			url: '{{url('/mi-paquete/agregando-inmueble')}}',
			data: {
				id_inmueble,
				id_cliente,
				_token: '{{csrf_token()}}'
			},

			error: function(x,y,z){
				console.log(x,y,z);
			},

			success: function(data){
				
				//console.log(data);
				if (data == 'Existe') {

					swal('Error!','Ya agregaste este servicio a tu paquete','error');

					//ActualizarCarrito();
				}else{
					swal('Listo!','Se agregó el servicio al paquete con éxito','success');
				}
			}

		});

		$.ajax({
					method: 'GET',
					url: '{{ url( '/mi-paquete/actualizando-carrito-inmueble' ) }}',
					data: {

						id_cliente,
						_token: '{{ csrf_token() }}'

					},

					error: function error(x,y,z){
						console.log(x,y,z);
					},

					success: function(data){
						console.log(data);
						$('#carrito_escritorio').addClass('icon-header-noti');
						$('#carrito_escritorio').attr('data-notify', data.CantidadServicios );
						$('#carrito_movil').attr('data-notify', data.CantidadServicios );
						$('#servicios_carrito').empty();

						$.each( data.ServiciosCarrito , function( index , value ) {
						console.log(value);	
						if( value['precio'] != null ){

							var serv_carr_precio = ` <li class="header-cart-item flex-w flex-t m-b-12">
													{{-- Imagen de Servicio --}}
													<div class="header-cart-item-img">
													<img src=" ` + value['foto_1'] + ` " class="rounded" alt="IMG">
													</div>
													{{-- Nombre de Servicio --}}
													<div class="header-cart-item-txt p-t-8">
														<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
														` + value['titulo'] + `
														</a>
														{{-- Precio de Servicio --}}
														<span class="header-cart-item-info">
															$
														` + value['precio'] +`
														</span>
													</div>
												</li>
												<hr>
												`;
						$('#servicios_carrito').append(serv_carr_precio);	
						} else{

							var serv_carr_convenir = ` <li class="header-cart-item flex-w flex-t m-b-12">
													{{-- Imagen de Servicio --}}
													<div class="header-cart-item-img">
													<img src=" ` + value['foto_1'] + ` " class="rounded" alt="IMG">
													</div>
													{{-- Nombre de Servicio --}}
													<div class="header-cart-item-txt p-t-8">
														<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
														` + value['titulo'] + `
														</a>
														{{-- Precio de Servicio --}}
														<span class="header-cart-item-info">
															Precio a convenir
														</span>
													</div>
												</li>
												<hr>
												`;
						$('#servicios_carrito').append(serv_carr_convenir);	

						}
						
							
						});
					}
				});
	});
</script>

{{-- Agregar pregunta --}}
<script>
	$('#form_pregunta').submit( function(e){
		e.preventDefault();
		var id_prestador = $('#id_prestador').val();
		var id_inmueble = $('#id_inmueble').val();
		var id_cliente = $('#id_cliente').val();
		var textarea_pregunta = $('#textarea_pregunta').val();

		$.ajax({
	
			method: 'POST',
			url: '{{url('/reservar/servicios-publicados/Inmueble/almacenando-pregunta')}}',
			data: {
				id_prestador,
				id_inmueble,
				id_cliente,
				textarea_pregunta,
				_token: "{{csrf_token()}}"
				
	
			},
			error: function(x,y,z){
	
				console.log(x,y,z);
			},
	
			success: function(data){
				$('#textarea_pregunta').val('');
				swal('Listo!','Su pregunta fue realizada con éxito','success');
				
			}
	
		}); //ajax

		//Actualizar preguntas
		$.ajax({
		
			method: 'GET',
			url: '{{url('/reservar/servicios-publicados/Inmueble/almacenando-pregunta')}}',
			data: {
				id_prestador,
				id_inmueble,
				_token: "{{csrf_token()}}"
			},

			error: function(x,y,z){
				console.log(x,y,z);
			},

			success: function(data){
				console.log(data);
				$('#mostrar_preguntas').empty();

				$.each(data, function(index, value) {
					if( value['respuesta'] == null ){
						value['respuesta'] = '';
						var mostrar_preguntas = `
													<div class="row mt-4 rounded">
														<span class="col-md-12 col-12 text-dark"> <i class="zmdi zmdi-comment-text"></i> `+ value['pregunta'] +` </span><br>
													</div>
												`;
						$('#mostrar_preguntas').append(mostrar_preguntas);
					}else{

						var mostrar_preguntas_y_respuestas = `
																<div class="row mt-4 rounded">
																	<span class="col-md-12 col-12 text-dark"> <i class="zmdi zmdi-comment-text"></i> `+ value['pregunta'] +` </span><br>
																	<span class="col-md-12 col-12 mt-3 text-black-50"><i class="zmdi zmdi-comment-alt-text"></i> `+ value['respuesta'] +` </span><br><br><br>
																</div>
															`;
						$('#mostrar_preguntas').append(mostrar_preguntas_y_respuestas);
					}
                });
			}//success

		})

	}); //on click
	
</script>

@endsection
