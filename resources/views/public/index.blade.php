@extends('layouts.public')
@section('title', 'Japp Portafolio')
@section('content')
    <section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
						<div class="banner_content">
							<h3 class="text-uppercase">@lang('Public.Presentacion.Saludo')</h3>
							<h1 class="text-uppercase">@lang('Public.Presentacion.Soy')</h1>
							<h5 class="text-uppercase">@lang('Public.Presentacion.Oficio')</h5>
							<div class="d-flex align-items-center">
								<a class="primary_btn" href="#"><span>@lang('Public.Presentacion.Contratar')</span></a>
								<a class="primary_btn tr-bg" target="_blank" href="{{url('docs/cv.pdf')}}"><span>@lang('Public.Presentacion.VerCV')</span></a>
							</div>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="home_right_img">
							<img class="img-responsive" src="img/banner/home-right.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->

	<!--================ Start About Us Area =================-->
	<section class="about_area section_gap">
		<div class="container">
			<div class="row justify-content-start align-items-center">
				<div class="col-lg-5">
					<div class="about_img">
						<img class="" src="img/about-us.png" alt="">
					</div>
				</div>

				<div class="offset-lg-1 col-lg-5">
					<div class="main_title text-left">
						<h2>@lang('Public.About.Me')</h2>
						<p>
                            @lang('Public.About.Oficio')
						</p>
						<p>
							@lang('Public.About.Anos')
						</p>
                        <a class="danger_btn" target="_blank" href="{{url('docs/cv.pdf')}}"><span>@lang('Public.About.DescargarCV')</span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End About Us Area =================-->

	<!--================ Start Knowledge Area =================-->
	<section class="brand_area section_gap_bottom">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-brand-item d-table">
								<div class="d-table-cell text-center">
									<img src="img/brands/logo1.png" alt="">
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-brand-item d-table">
								<div class="d-table-cell text-center">
									<img src="img/brands/logo2.png" alt="">
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-brand-item d-table">
								<div class="d-table-cell text-center">
									<img src="img/brands/logo3.png" alt="">
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-brand-item d-table">
								<div class="d-table-cell text-center">
									<img src="img/brands/logo4.png" alt="">
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-brand-item d-table">
								<div class="d-table-cell text-center">
									<img src="img/brands/logo5.png" alt="">
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-brand-item d-table">
								<div class="d-table-cell text-center">
									<img src="img/brands/logo6.png" alt="">
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-brand-item d-table">
								<div class="d-table-cell text-center">
									<img src="img/brands/logo7.png" alt="">
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-brand-item d-table">
								<div class="d-table-cell text-center">
									<img src="img/brands/logo8.png" alt="">
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-brand-item d-table">
								<div class="d-table-cell text-center">
									<img src="img/brands/logo9.svg" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="offset-lg-2 col-lg-4 col-md-6">
					<div class="client-info">
						<div class="d-flex mb-50">
							<span class="lage">3</span>
							<span class="smll">@lang('Public.About.Experiencia')</span>
						</div>
						<div class="call-now d-flex">
							<div>
								<span class="fa fa-phone"></span>
							</div>
							<div class="ml-15">
								<p class="text_warning">@lang('Public.About.Llamame')</p>
								<h3>(+58) 412 467-4136</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Brand Area =================-->

	<!--================ Start Features Area =================-->
	<section class="features_area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<div class="main_title">
						<h2>@lang('Public.Servicios.Ofrecidos') </h2>
						<p>
                            @lang('Public.Servicios.Descripcion')
						</p>
					</div>
				</div>
			</div>
			<div class="row feature_inner">
				<div class="col-lg-3 col-md-6">
					<div class="feature_item">
						<img src="img/services/s1.png" alt="">
						<h4>@lang('Public.Servicios.Desarrollo')</h4>
						<p>
                            @lang('Public.Servicios.DescripcionUno')
                        </p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="feature_item">
						<img src="img/services/s2.png" alt="">
						<h4>@lang('Public.Servicios.Grafico')</h4>
						<p>@lang('Public.Servicios.DescripcionDos')</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="feature_item">
						<img src="img/services/s3.png" alt="">
						<h4>@lang('Public.Servicios.Diseno')</h4>
						<p>
							@lang('Public.Servicios.DescripcionTres')
                        </p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="feature_item">
						<img src="img/services/s4.png" alt="">
						<h4>@lang('Public.Servicios.App')</h4>
						<p>@lang('Public.Servicios.DescripcionCuatro')</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Features Area =================-->

	<!--================Start Portfolio Area =================-->
	<section class="portfolio_area" id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title text-left">
						<h2>@lang('Public.Portafolio.Portafolio') <br>
							@lang('Public.Portafolio.Proyectos') </h2>
					</div>
				</div>
			</div>
			<div class="filters portfolio-filter">
				<ul>
					<li class="active" data-filter="*">@lang('Public.Portafolio.Todos')</li>
					<li data-filter=".popular">@lang('Public.Portafolio.Sitios')</li>
					<li data-filter=".latest"> @lang('Public.Portafolio.Logos')</li>
					<li data-filter=".following">@lang('Public.Portafolio.Publicidades')</li>
					{{--<li data-filter=".upcoming">En desarrollo</li>--}}
				</ul>
			</div>
	
			<div class="filters-content">
				<div class="row portfolio-grid justify-content-center">
					<div class="col-lg-4 col-md-6 all latest">
						<div class="portfolio_box">
							<div class="single_portfolio single_portfolio_primary">
								<img class="img-fluid w-100" src="img/portfolio/p1.png" alt="">
								<div class="overlay"></div>
								<a href="img/portfolio/p1.png" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">escuela de ajedrez bobby fischer</a></h4>
								<p>Logo, Maracay, Venezuela</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all latest">
						<div class="portfolio_box">
							<div class="single_portfolio single_portfolio_danger">
								<img class="img-fluid w-100" src="img/portfolio/p2.png" alt="">
								<div class="overlay"></div>
								<a href="img/portfolio/p2.png" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">centro de capacitacion y consultoría empresarial</a></h4>
								<p>Logo, Medellin, Colombia</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all latest">
						<div class="portfolio_box">
							<div class="single_portfolio single_portfolio_warning">
								<img class="img-fluid w-100" src="img/portfolio/p3.png" alt="">
								<div class="overlay"></div>
								<a href="img/portfolio/p3.png" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">Jovenes y Juveniles en accion</a></h4>
								<p>Logo, El Limon, Venezuela</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all latest">
						<div class="portfolio_box">
							<div class="single_portfolio single_portfolio_success">
								<img class="img-fluid w-100" src="img/portfolio/p4.png" alt="">
								<div class="overlay"></div>
								<a href="img/portfolio/p4.png" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">Ferretería La Campana, C.A.</a></h4>
								<p>Logo, Maracay, Venezuela</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all following">
						<div class="portfolio_box">
							<div class="single_portfolio single_portfolio_primary">
								<img class="img-fluid w-100" src="img/portfolio/p6.jpg" alt="">
								<div class="overlay"></div>
								<a href="img/portfolio/p5.jpg" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">¿Tuve alternativa?</a></h4>
								<p>@lang('Public.Portafolio.Publicidad'), Actividad Juvenil</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all following">
						<div class="portfolio_box">
							<div class="single_portfolio single_portfolio_danger">
								<img class="img-fluid w-100" src="img/portfolio/p5.jpg" alt="">
								<div class="overlay"></div>
								<a href="img/portfolio/p6.jpg" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">de lo que tengo te doy</a></h4>
								<p>@lang('Public.Portafolio.Publicidad'), Actividad Juvenil</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all following">
						<div class="portfolio_box">
							<div class="single_portfolio single_portfolio_warning">
								<img class="img-fluid w-100" src="img/portfolio/p7.jpg" alt="">
								<div class="overlay"></div>
								<a href="img/portfolio/p7.jpg" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">#dimeconquienandasy</a></h4>
								<p>@lang('Public.Portafolio.Publicidad'), Actividad Juvenil</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all following">
						<div class="portfolio_box">
							<div class="single_portfolio single_portfolio_success">
								<img class="img-fluid w-100" src="img/portfolio/p8.jpg" alt="">
								<div class="overlay"></div>
								<a href="img/portfolio/p8.jpg" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4>supremacia 3</h4>
								<p>@lang('Public.Portafolio.Publicidad'), Actividad Juvenil</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all following">
						<div class="portfolio_box">
							<div class="single_portfolio single_portfolio_primary">
								<img class="img-fluid w-100" src="img/portfolio/p9.jpg" alt="">
								<div class="overlay"></div>
								<a href="img/portfolio/p9.jpg" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">conflictos</a></h4>
								<p>@lang('Public.Portafolio.Publicidad'), Actividad Juvenil</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all popular">
						<div class="portfolio_box">
							<div class="single_portfolio single_portfolio_primary">
								<iframe class="img-fluid w-100" src="http://escuelabobbyfischer.000webhostapp.com/"></iframe>
								<div class="overlay"></div>
								<a href="http://escuelabobbyfischer.000webhostapp.com/" target="_blank">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">escuela de ajedrez bobby fischer</a></h4>
								<p>@lang('Public.Portafolio.Sitio'), @lang('Public.Portafolio.Host')</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all popular">
						<div class="portfolio_box">
							<div class="single_portfolio single_portfolio_primary">
								<iframe class="img-fluid w-100" src="http://ferreteriacampana.000webhostapp.com"></iframe>
								<div class="overlay"></div>
								<a href="http://ferreteriacampana.000webhostapp.com" target="_blank">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">ferreteria la campana</a></h4>
								<p>@lang('Public.Portafolio.Sitio'), @lang('Public.Portafolio.Host')</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all popular">
						<div class="portfolio_box">
							<div class="single_portfolio single_portfolio_primary">
								<iframe class="img-fluid w-100" src="http://veocarga.com/"></iframe>
								<div class="overlay"></div>
								<a href="http://veocarga.com/" target="_blank">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">veocarga</a></h4>
								<p>@lang('Public.Portafolio.Sitio'), @lang('Public.Portafolio.Contribucion') <a href="https://limonbyte.com" class="text-success" target="_blank">Limonbyte</a> </p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all popular">
						<div class="portfolio_box">
							<div class="single_portfolio single_portfolio_primary">
								<iframe class="img-fluid w-100" src="https://doggos.us/"></iframe>
								<div class="overlay"></div>
								<a href="https://doggos.us/" target="_blank">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">doggos</a></h4>
								<p>@lang('Public.Portafolio.Sitio'), @lang('Public.Portafolio.Contribucion') <a href="https://limonbyte.com" class="text-success" target="_blank">Limonbyte</a></p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all popular">
						<div class="portfolio_box">
							<div class="single_portfolio single_portfolio_primary">
								<iframe class="img-fluid w-100" src="http://hipismoglobal.com/"></iframe>
								<div class="overlay"></div>
								<a href="http://hipismoglobal.com/" target="_blank">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">hipismo global</a></h4>
								<p>@lang('Public.Portafolio.Sitio'), @lang('Public.Portafolio.Contribucion') <a href="https://limonbyte.com" class="text-success" target="_blank">Limonbyte</a></p>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!--================End Portfolio Area =================-->

	<!--================ Start Testimonial Area =================-->
	<div class="testimonial_area section_gap_bottom">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<div class="main_title">
						<h2>@lang('Public.Clientes.Comentarios')</h2>
						{{--<p>Is give may shall likeness made yielding spirit a itself togeth created after sea is in beast <br>
							 beginning signs open god you're gathering ithe</p>--}}
					</div>
				</div>
			</div>
			<div class="row">
				<div class="testi_slider owl-carousel">
        			<div class="testi_item">
        				<div class="row">
        					<div class="col-lg-4">
        						<img src="img/testimonials/t1.jpg" alt="">
        					</div>
        					<div class="col-lg-8">
        						<div class="testi_text">
        							<h4>Leonardo Padron</h4>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro doloremque totam repudiandae incidunt doloribus voluptates voluptate. Nemo aperiam inventore laudantium natus, alias fugiat qui molestiae similique expedita sed! Aperiam, ratione. </p>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="testi_item">
        				<div class="row">
        					<div class="col-lg-4">
        						<img src="img/testimonials/t2.jpg" alt="">
        					</div>
        					<div class="col-lg-8">
        						<div class="testi_text">
        							<h4>Gregorio </h4>
									<p>Him, made can't called over won't there on divide there male fish beast own his day third seed sixth seas unto. Saw from </p>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="testi_item">
        				<div class="row">
        					<div class="col-lg-4">
        						<img src="img/testimonials/t1.jpg" alt="">
        					</div>
        					<div class="col-lg-8">
        						<div class="testi_text">
        							<h4>Gustavo Arias</h4>
									<p>Him, made can't called over won't there on divide there male fish beast own his day third seed sixth seas unto. Saw from </p>
        						</div>
        					</div>
        				</div>
        			</div>
        			{{--<div class="testi_item">
        				<div class="row">
        					<div class="col-lg-4">
        						<img src="img/testimonials/t2.jpg" alt="">
        					</div>
        					<div class="col-lg-8">
        						<div class="testi_text">
        							<h4>Jobert Martínez</h4>
									<p>Him, made can't called over won't there on divide there male fish beast own his day third seed sixth seas unto. Saw from </p>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="testi_item">
        				<div class="row">
        					<div class="col-lg-4">
        						<img src="img/testimonials/t1.jpg" alt="">
        					</div>
        					<div class="col-lg-8">
        						<div class="testi_text">
        							<h4>Hans Fischer</h4>
									<p>Him, made can't called over won't there on divide there male fish beast own his day third seed sixth seas unto. Saw from </p>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="testi_item">
        				<div class="row">
        					<div class="col-lg-4">
        						<img src="img/testimonials/t2.jpg" alt="">
        					</div>
        					<div class="col-lg-8">
        						<div class="testi_text">
        							<h4>Davil Saden</h4>
									<p>Him, made can't called over won't there on divide there male fish beast own his day third seed sixth seas unto. Saw from </p>
        						</div>
        					</div>
        				</div>
        			</div>--}}
        		</div>
			</div>
		</div>
	</div>
	<!--================ End Testimonial Area =================-->

	<!--================ Start Newsletter Area =================-->
	<section class="newsletter_area">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-12">
					<div class="subscription_box text-center">
						<h2 class="text-uppercase text-white">@lang('Public.Brochure.Recibir')</h2>
						<p class="text-white"> @lang('Public.Brochure.Enviar')</p>
						<div class="subcribe-form" id="mc_embed_signup">
							<form target="_blank" novalidate="true" action="" method="POST" class="subscription relative">
								<input name="email" placeholder="@lang('Public.Brochure.Correo')" required="" type="email">
								<div style="position: absolute; left: -5000px;">
									<input name="input" tabindex="-1" value="" type="text">
								</div>
								<button class="primary-btn hover d-inline"> @lang('Public.Brochure.Solicitar') </button>
								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection