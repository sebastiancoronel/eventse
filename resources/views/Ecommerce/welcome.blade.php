@extends('layouts.barra_navegacion_principal')
@section('content')
<!--Pagina principal-->
	<div class="animsition">
				<!-- Modal Search -->
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
			</div>
			
		<!--ZONA SERVICIOS PREMIUM-->
		<!-- Slider -->
		<section class="section-slide d-none d-sm-block">
			<div class="wrap-slick1">
				<div class="slick1">
					<div class="item-slick1" style="background-image: url(images/salon-01.jpg);">
						<div class="container h-full">
							<div class="flex-col-l-m p-t-200 " style="width:20%; background-color:#1D2680; opacity:0.5;">
								<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
									<span class="ltext-101 cl2 respon2" style="color: white;">
										Salones
									</span>
								</div>

								<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
									<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1" style="color: white;">
										SEPTIEMBRE 2019
									</h2>
								</div>

								<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
									<a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
										Reservar ahora
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="item-slick1" style="background-image: url(images/Animacion-01.jpg);">
						<div class="container h-full">
							<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
								<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
									<span class="ltext-101 cl2 respon2" style="color: white;">
										Animación
									</span>
								</div>

								<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
									<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1" style="color: white;">
										Infantil & XV
									</h2>
								</div>

								<div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
									<a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
										Reservar ahora
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="item-slick1" style="background-image: url(images/Juegos-01.jpg);">
						<div class="container h-full">
							<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
								<div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
									<span class="ltext-101 cl2 respon2" style="color: white;">
										Mobiliario
									</span>
								</div>

								<div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
									<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1" style="color: white;">
										Juegos, mesas y más
									</h2>
								</div>

								<div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
									<a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
										Reservar ahora
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Fin ZONA SERVICIOS PREMIUM-->

		<!--SELECCION DE CATEGORIAS-->
		<!-- Banner -->
		<div class="sec-banner bg0 p-t-80 p-b-50">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
						<!-- Block1 -->
						<div class="block1 wrap-pic-w">
							<img src="images/Salon-01.jpg" alt="IMG-BANNER">

							<a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
								<div class="block1-txt-child1 flex-col-l">
									<span class="block1-name ltext-102 trans-04 p-b-8" style="color: white;" >
										Salones
									</span>

									<span class="block1-info stext-102 trans-04" style="color: white;" >
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

					<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
						<!-- Block1 -->
						<div class="block1 wrap-pic-w">
							<img src="images/Animacion-01.jpg" alt="IMG-BANNER">

							<a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
								<div class="block1-txt-child1 flex-col-l">
									<span class="block1-name ltext-102 trans-04 p-b-8" style="color: white;" >
										Animación
									</span>

									<span class="block1-info stext-102 trans-04" style="color: white;" >
										XV & Infantiles
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

					<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
						<!-- Block1 -->
						<div class="block1 wrap-pic-w">
							<img src="images/Juegos-01.jpg" alt="IMG-BANNER">

							<a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
								<div class="block1-txt-child1 flex-col-l">
									<span class="block1-name ltext-102 trans-04 p-b-8" style="color: white;" >
										Mobiliario
									</span>

									<span class="block1-info stext-102 trans-04" style="color: white;" >
										Juegos, mesas, sillas, manteles, vajillas
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
				</div>
			</div>
		</div>
		<!--Fin SELECCION DE CATEGORIAS-->

		<!-- Product -->
		<section class="bg0 p-t-23 p-b-140">
			<div class="container">
				<div class="p-b-10">
					<h3 class="ltext-103 cl5">
						Desatacados
					</h3>
				</div>

				<div class="flex-w flex-sb-m p-b-52">
					<div class="flex-w flex-l-m filter-tope-group m-tb-10">
						<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
							Todos los productos
						</button>

						<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".women">
							Salones
						</button>

						<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".men">
							Animacion
						</button>

						<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".bag">
							Mobiliario
						</button>

						<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".shoes">
							Juegos
						</button>

						<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".watches">
							Servicios de catering
						</button>

						<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".watches">
							Iluminación
						</button>

						<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".watches">
							Música & DJ´s
						</button>
					</div>

					<div class="flex-w flex-c-m m-tb-10">
						<div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
							<i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
							<i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
							 Filtrar
						</div>

						<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
							<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
							<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
							Buscar
						</div>
					</div>

					<!-- Search product -->
					<div class="dis-none panel-search w-full p-t-10 p-b-15">
						<div class="bor8 dis-flex p-l-15">
							<button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
								<i class="zmdi zmdi-search"></i>
							</button>

							<input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Search">
						</div>
					</div>

					<!-- Filter -->
					<div class="dis-none panel-filter w-full p-t-10">
						<div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
							<div class="filter-col1 p-r-15 p-b-27">
								<div class="mtext-102 cl2 p-b-15">
									Ordenar por
								</div>

								<ul>
									<li class="p-b-6">
										<a href="#" class="filter-link stext-106 trans-04">
											Default
										</a>
									</li>

									<li class="p-b-6">
										<a href="#" class="filter-link stext-106 trans-04">
											Popularity
										</a>
									</li>

									<li class="p-b-6">
										<a href="#" class="filter-link stext-106 trans-04">
											Average rating
										</a>
									</li>

									<li class="p-b-6">
										<a href="#" class="filter-link stext-106 trans-04 filter-link-active">
											Newness
										</a>
									</li>

									<li class="p-b-6">
										<a href="#" class="filter-link stext-106 trans-04">
											Price: Low to High
										</a>
									</li>

									<li class="p-b-6">
										<a href="#" class="filter-link stext-106 trans-04">
											Price: High to Low
										</a>
									</li>
								</ul>
							</div>

							<div class="filter-col2 p-r-15 p-b-27">
								<div class="mtext-102 cl2 p-b-15">
									Price
								</div>

								<ul>
									<li class="p-b-6">
										<a href="#" class="filter-link stext-106 trans-04 filter-link-active">
											All
										</a>
									</li>

									<li class="p-b-6">
										<a href="#" class="filter-link stext-106 trans-04">
											$0.00 - $50.00
										</a>
									</li>

									<li class="p-b-6">
										<a href="#" class="filter-link stext-106 trans-04">
											$50.00 - $100.00
										</a>
									</li>

									<li class="p-b-6">
										<a href="#" class="filter-link stext-106 trans-04">
											$100.00 - $150.00
										</a>
									</li>

									<li class="p-b-6">
										<a href="#" class="filter-link stext-106 trans-04">
											$150.00 - $200.00
										</a>
									</li>

									<li class="p-b-6">
										<a href="#" class="filter-link stext-106 trans-04">
											$200.00+
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="row isotope-grid">
					<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-pic hov-img0">
								<img src="images/product-01.jpg" alt="IMG-PRODUCT">
								<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
									Quick View
								</a>
							</div>
							<div class="block2-txt flex-w flex-t p-t-14">
								<div class="block2-txt-child1 flex-col-l ">
									<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
										Esprit Ruffle Shirt
									</a>
									<span class="stext-105 cl3">
										$16.64
									</span>
								</div>
								<div class="block2-txt-child2 flex-r p-t-3">
									<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
										<img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
										<img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Load more -->
				<div class="flex-c-m flex-w w-full p-t-45">
					<a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
						Cargar más
					</a>
				</div>
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
	Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados
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


@endsection