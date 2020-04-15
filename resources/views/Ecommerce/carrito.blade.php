@extends('layouts.barra_navegacion_principal')
@section('content')
<div class="animsition">
<!-- Carrito escritorio -->
	<form class="bg0 dispositivo">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
								<!-- Item 1 -->
								<div class="row container">
										<div class="col-md-3">
											<img class="img-fluid" src="{{asset('images/castillo2.webp')}}" alt="IMG">
										</div>
										<div class="row col-md-3">
											<span class="col-md-12 dispositivo-mt-2">Castillo inflable de 3x3mts</span>
											<a class="col-md-12 text-primary mt-2"><small>Ver mas servicios del prestador</small></a>
										</div>
										<div class="col-md-3 dispositivo-mt-2">
											<span>$ 600.00 <small class="text-success">Presupuestado</small></span>
										</div>
										<div class="col-md-3 dispositivo-mt-2">
											<div class="flex-c-m stext-101 cl2 size-100 bg8 bor13 hov-btn4 p-lr-15 trans-04 pointer m-tb-5">
												Eliminar
											</div>
										</div>
								</div>
								<hr>
								<!-- Item 1 -->
								<div class="row container">
										<div class="col-md-3">
											<img class="img-fluid" src="{{asset('images/castillo1.webp')}}" alt="IMG">
										</div>
										<div class="row col-md-3">
											<span class="col-md-12">Castillo inflable de 3x3mts</span>
											<a class="col-md-12 text-primary mt-2"><small>Ver mas servicios del prestador</small></a>
										</div>
										<div class="col-md-3">
											<a class="">Precio a convenir <small class="text-primary">Pedir un presupuesto</small></a>
										</div>
										<div class="col-md-3">
											<div class="flex-c-m stext-101 cl2 size-100 bg8 bor13 hov-btn4 p-lr-15 trans-04 pointer m-tb-5">
												Eliminar
											</div>
										</div>
								</div>

						{{-- <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
							<div class="flex-w flex-m m-r-20 m-tb-5">
								<input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="coupon" placeholder="Código del cupón">

								<div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
									Aplicar cupón
								</div>
							</div>

							<div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
								Actualizar paquete
							</div>
						</div> --}}
					</div>
				</div>

				<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">
							Total del paquete
						</h4>

						<div class="flex-w flex-t bor12 p-b-13">
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
						</div>

						<div class="flex-w flex-t bor12 p-t-15 p-b-30">
							<div class="size-208 w-full-ssm">
								<span class="stext-110 cl2">
									Envío:
								</span>
							</div>

							<div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
								<p class="stext-111 cl6 p-t-2">
									There are no shipping methods available. Please double check your address, or contact us if you need any help.
								</p>

								<div class="p-t-15">
									<span class="stext-112 cl8">
										Calcular envío
									</span>

									<div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
										<select class="js-select2" name="time">
											<option>Seleccionar una localidad...</option>
											<option>Santiago del Estero</option>
											<option>La Banda</option>
										</select>
										<div class="dropDownSelect2"></div>
									</div>

									<div class="bor8 bg0 m-b-12">
										<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="state" placeholder="State /  country">
									</div>

									<div class="bor8 bg0 m-b-22">
										<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="postcode" placeholder="Postcode / Zip">
									</div>

									<div class="flex-w">
										<div class="flex-c-m stext-101 cl2 size-115 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer">
											Actualizar total
										</div>
									</div>

								</div>
							</div>
						</div>

						<div class="flex-w flex-t p-t-27 p-b-33">
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
						</div>

						<button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
							Proceder a pagar el paquete
						</button>
					</div>
				</div>
			</div>
		</div>
	</form>
<!-- Fin Carrito escritorio -->

<!-- Carrito movil -->
  {{-- <form class="bg0 mt-3 d-md-none d-lg-none d-xl-none d-xs-block d-sm-block">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
          <div class="m-l-25 m-r--38 m-lr-0-xl">
            <div class="wrap-table-shopping-cart">

              <table>
                <tr class="table_row">
									<!-- Botón Elipsis esquina superior derecha -->
										<div class="h-100 d-flex justify-content-end">
											<a class="nav-link" data-toggle="dropdown" href="#">
												<i class="d-md-none d-lg-none d-xl-none d-xs-block d-sm-block text-muted fas fa-ellipsis-v text-muted" style="cursor: pointer;"></i>
											</a>
											<!-- Menu Dropdown -->
										 <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
											<!-- Item -->
											<a href="#" class="dropdown-item">
												<div class="media">
													<div class="media-body">
														<h3 class="dropdown-item-title text-left">Ver</h3>
													</div>
												</div>
											</a>
											<div class="dropdown-divider"></div>
											<!-- Fin Item -->

											 <!-- Item -->
											 <a href="#" class="dropdown-item bg-danger">
												<div class="media">
													<div class="media-body">
														<h3 class="dropdown-item-title text-left">Eliminar</h3>
													</div>
												</div>
											</a>
											<div class="dropdown-divider"></div>
											<!-- Fin Item -->

										</div>
										<!-- Fin Menu Dropdown -->
										</div>
									<!-- Fin Botón Elipsis esquina superior derecha -->
                  <td class="column-1">
                    <div class="how-itemcart1">
                      <img src="{{asset('images/castillo2.webp')}}" alt="IMG">
                    </div>
                  </td>
                  <td class="column-2">Castillo inflable de 3x3mts</td>
                  <td class="column-3 ml-5 pl-5">$600.00</td>
                </tr>

								<table class="mt-4 d-flex justify-content-center">
									<tr class="table_row row">
										<td> <a href="#">Ver más servicios del prestador</a></td>
									</tr>
								</table>
							</table>

							<hr>

							<table>
                <tr class="table_row">
									<!-- Botón Elipsis esquina superior derecha -->
										<div class="h-100 d-flex justify-content-end">
											<a class="nav-link" data-toggle="dropdown" href="#">
												<i class="d-md-none d-lg-none d-xl-none d-xs-block d-sm-block text-muted fas fa-ellipsis-v text-muted" style="cursor: pointer;"></i>
											</a>
											<!-- Menu Dropdown -->
										 <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
											<!-- Item -->
											<a href="#" class="dropdown-item">
												<div class="media">
													<div class="media-body">
														<h3 class="dropdown-item-title text-left">Ver</h3>
													</div>
												</div>
											</a>
											<div class="dropdown-divider"></div>
											<!-- Fin Item -->

											 <!-- Item -->
											 <a href="#" class="dropdown-item bg-danger">
												<div class="media">
													<div class="media-body">
														<h3 class="dropdown-item-title text-left">Eliminar</h3>
													</div>
												</div>
											</a>
											<div class="dropdown-divider"></div>
											<!-- Fin Item -->

										</div>
										<!-- Fin Menu Dropdown -->
										</div>
									<!-- Fin Botón Elipsis esquina superior derecha -->
                  <td class="column-1">
                    <div class="how-itemcart1">
                      <img src="{{asset('images/castillo1.webp')}}" alt="IMG">
                    </div>
                  </td>
                  <td class="column-2">Castillo inflable de 4x3mts</td>
                  <td class="column-3 ml-5 pl-5">Precio a convenir</td>
                </tr>
							</table>

							<table class="mt-4 d-flex justify-content-center">
								<tr class="table_row row">
									<td> <a href="#">Ver más servicios del prestador</a></td>
								</tr>
							</table>
						</table>
            </div>

            <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
              <div class="flex-w flex-m m-r-20 m-tb-5">
                <input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="coupon" placeholder="Código del cupón">

                <div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
                  Aplicar cupón
                </div>
              </div>

              <div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
                Actualizar paquete
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
          <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
            <h4 class="mtext-109 cl2 p-b-30">
              Total del paquete
            </h4>

            <div class="flex-w flex-t bor12 p-b-13">
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
            </div>

            <div class="flex-w flex-t bor12 p-t-15 p-b-30">
              <div class="size-208 w-full-ssm">
                <span class="stext-110 cl2">
                  Envío:
                </span>
              </div>

              <div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
                <p class="stext-111 cl6 p-t-2">
                  There are no shipping methods available. Please double check your address, or contact us if you need any help.
                </p>

                <div class="p-t-15">
                  <span class="stext-112 cl8">
                    Calcular envío
                  </span>

                  <div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
                    <select class="js-select2" name="time">
                      <option>Seleccionar una localidad...</option>
                      <option>Santiago del Estero</option>
                      <option>La Banda</option>
                    </select>
                    <div class="dropDownSelect2"></div>
                  </div>

                  <div class="bor8 bg0 m-b-12">
                    <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="state" placeholder="State /  country">
                  </div>

                  <div class="bor8 bg0 m-b-22">
                    <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="postcode" placeholder="Postcode / Zip">
                  </div>

                  <div class="flex-w">
                    <div class="flex-c-m stext-101 cl2 size-115 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer">
                      Actualizar total
                    </div>
                  </div>

                </div>
              </div>
            </div>

            <div class="flex-w flex-t p-t-27 p-b-33">
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
            </div>

            <button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
              Proceder a pagar el paquete
            </button>
          </div>
        </div>
      </div>
    </div>
  </form> --}}
<!-- Fin carrito movil -->
</div>
@endsection
