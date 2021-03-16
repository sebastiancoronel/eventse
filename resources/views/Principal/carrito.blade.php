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
								@foreach ($Paquete as $key_serv => $servicio)

								
								<div class="row container">
										{{-- <div class="col-md-3">
											<img class="img-fluid" src="{{asset('images/castillo2.webp')}}" alt="IMG">
										</div> --}}
										<div class="row col-md-6">
											<span class="col-md-12"> {{ $servicio['NombreServicio'] }} </span>
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
										
										<!-- Separador -->
										<div class="bor10 my-3" style="width: 100%; height: 1px;"></div>

										<span class="font-weight-bold"> ¿ Que prestaciones quiere para su servicio ? </span class="font-weight-bold">
										
										<div class="form-row mt-4">
											@foreach ( $TodasLasCaracteristicas as $key_caract => $caracteristicas )
												@if ( $key_serv == $key_caract )
													@foreach ($caracteristicas as $caracteristica)
													<div class="col-md-4">
														<input class="form-check-input" id="{{ $caracteristica['nombre'] }}" name="caracteristicas[]" type="checkbox">
														<label class="form-check-label" for="{{ $caracteristica['nombre'] }}"> {{ $caracteristica['nombre'] }} </label>
													</div>
													@endforeach
												@endif
											@endforeach
										</div>
										<small class="col-md-12 text-primary my-4">Agregar un comentario</small>
										<div class="bor8 bg0 m-b-12">
											<textarea class="stext-111 cl8 plh3 size-111 p-lr-15 h-100" name="comentario_adicional[{{ $servicio['id_servicio'] }}]" maxlength="500" cols="100" rows="5"></textarea>
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
								<p class="stext-111 cl6 p-t-2">
									Indicanos la direccion para enviar los servicios que requieran traslado
								</p>
								<div class="flex-w flex-t bor12 p-b-13">
									<div class="md-form">
										<input id="sin_traslado" class="form-check-input" type="checkbox" name="sin_traslado" value="1">
										<label class="form-check-label" for="sin_traslado"> Sin traslado </label>
									</div>
								</div>
								<div class="flex-w flex-t bor12 p-t-15 p-b-30 mt-5">
									<div class="size-208 w-full-ssm">
										<span class="stext-110 cl2">
											Envío:
										</span>
									</div>

									{{-- Localidad --}}
									<div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
										<div class="form-group">
											<span>{{ Auth::user()->provincia }} , {{ Auth::user()->localidad }} </span>
										</div>
									{{-- Dirección --}}
										<div class="bor8 bg0 m-b-12">
											<textarea class="stext-111 cl8 plh3 size-111 p-lr-15" name="direccion" maxlength="100" id="direccion" cols="30" rows="10" placeholder="Dirección" required></textarea>
											<div class="text-danger"> {{ $errors->first('direccion') }} </div>
										</div>

									{{-- Barrio --}}
										<div class="bor8 bg0 m-b-22">
											<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="barrio" maxlength="100" id="barrio" placeholder="Barrio" required>
										</div>
										<div class="text-danger"> {{ $errors->first('barrio') }} </div>
									</div>

									{{-- Horario --}}
									<div class="size-208 w-full-ssm">
										<span class="stext-110 cl2">
											Día y Horario:
										</span>
									</div>

									<div class="size-209 p-r-18 p-r-0-sm w-full-ssm">

										<div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker">
											<input placeholder="Fecha" name="fecha" type="date" id="example" class="form-control" required>
										</div>

										<div class="p-t-15">
											<div class="form-group">
												{{-- Desde --}}
												<div class="md-form">
													<input placeholder="Desde" name="desde" type="text" id="input_starttime" class="form-control timepicker" required>
												 </div>
												{{-- Hasta --}}
												 <div class="md-form">
													<input placeholder="Hasta" name="hasta" type="text" id="input_starttime" class="form-control timepicker" required>
												 </div>
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

	{{-- TimePicker --}}
	<script>
		$('.timepicker').pickatime({
			// 12 or 24 hour
			twelvehour: false,
		});
	</script>

	{{-- Sin traslado --}}
	<script>
		$(document).on('change','#sin_traslado',function(){
		if ( $('#sin_traslado').is(':checked') ) {

			$('#direccion').val('Sin traslado');
			$('#barrio').val('Sin traslado');
			$('#direccion').attr('readonly',true);
			$('#barrio').attr('readonly',true);

		}else{
			$('#direccion').val('');
			$('#barrio').val('');
			$('#direccion').attr('readonly',false);
			$('#barrio').attr('readonly',false);
		}

		});
		
	</script>
@endpush
@endsection
