@extends('Principal.Partials.master')
@section('content')
<div class="animsition">
	<div class="bg0 dispositivo">
		<div class="container">
			<form action=" {{ route('EnviarSolicitudPresupuesto') }} " method="POST">
				@csrf 
				<div class="row">
					{{-- Servicios del paquete --}}
					<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
						<div class="m-l-25 m-r--38 m-lr-0-xl">
							<!-- Item 1 -->
							@if ($Paquete)
								@foreach ($Paquete as $servicio)
									<div class="row container">
										{{-- <div class="col-md-3">
											<img class="img-fluid" src="{{asset('images/castillo2.webp')}}" alt="IMG">
										</div> --}}
										<div class="row col-md-6">
											<span class="col-md-12"> {{ $servicio['NombreServicio'] }} </span>
												<small class="col-md-12 text-primary mt-2">Agregar un comentario</small>
										</div>
										<div class="col-md-3">
											@if ( $servicio['Precio'] != 'Precio a convenir' )
												$ {{ $servicio['Precio'] }}
											@else
												{{ $servicio['Precio'] }}
											@endif
											<span>
												{{-- <small class="text-success">Presupuestado</small> --}}
											</span>
										</div>

										<div class="col-md-3" data-id="{{ $servicio['id_servicio'] }}">
											<button type="button" class="flex-c-m stext-101 cl2 size-100 bg8 bor13 hov-btn4 p-lr-15 trans-04 pointer m-tb-5 eliminar-del-paquete">
												Eliminar
											</button>
										</div>

										<div class="bor8 bg0 m-b-12">
											<textarea class="stext-111 cl8 plh3 size-111 p-lr-15 h-100" name="comentario_adicional[]" maxlength="500" cols="100" rows="5"></textarea>
										</div>
									</div>
									<hr>
								@endforeach
							@else
							<span class=""> No tienes servicios en tu paquete aún </span>
							@endif
						</div>
					</div>
					
					{{-- Envío --}}
					@if ($Paquete)
						<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
							<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
								<h4 class="mtext-109 cl2 p-b-30">
									Datos de traslado
								</h4>
								{{-- <div class="flex-w flex-t bor12 p-b-13">
									<div class="size-208">
										<span class="stext-110 cl2">
											Subtotal:
										</span>
									</div>

									<div class="size-209">
										<span class="mtext-110 cl2">
											$79.65
										</span>
									</div>
								</div> --}}
								<div class="flex-w flex-t bor12 p-t-15 p-b-30">
									<div class="size-208 w-full-ssm">
										<span class="stext-110 cl2">
											Envío:
										</span>
									</div>

									<div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
										<p class="stext-111 cl6 p-t-2">
											Indicanos la direccion para enviar los servicios que requieran traslado
										</p>

										<div class="p-t-15">
											{{-- <span class="stext-112 cl8">
												Calcular envío
											</span> --}}
											<div class="form-group">
												<span>{{ Auth::user()->provincia }} , {{ Auth::user()->localidad }} </span>
											</div>

											<div class="bor8 bg0 m-b-12">
												<textarea class="stext-111 cl8 plh3 size-111 p-lr-15" name="direccion" maxlength="100" id="" cols="30" rows="10" placeholder="Dirección"></textarea>
											</div>

											<div class="bor8 bg0 m-b-22">
												<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="barrio" maxlength="100" placeholder="Barrio">
											</div>

											{{-- <div class="flex-w">
												<div class="flex-c-m stext-101 cl2 size-115 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer">
													Actualizar total
												</div>
											</div> --}}

										</div>
									</div>
								</div>
									
									{{-- <div class="flex-w flex-t p-t-27 p-b-33">
									<div class="size-208">
										<span class="mtext-101 cl2">
											Total:
										</span>
									</div>
									
									<div class="size-209 p-t-1">
										<span class="mtext-110 cl2"style="color:#f40082;">
											<strong>$79.65</strong>
										</span>
									</div>
								</div> --}}
								<button type="submit" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
									Enviar solicitud
								</button>
							</div>
						</div>
					@endif
				</div>
			</form>
		</div>
	</div>
</div>

@push('js')
	<script>
		$(document).on('click', '.eliminar-del-paquete', function(){
			id_servicio = $(this).parents().data('id');
			$.ajax({
				method: 'POST',
				url: '{{ url('/reservar/servicios-publicados/eliminando-del-paquete') }}',
				data:{
					_token: '{{ csrf_token() }}',
					id_servicio
				},
				error: function(x,y,z){
					console.log(x,y,z);
				},
				success: function(data){
					location.reload();
				}
			});
		});
	</script>
@endpush
@endsection
