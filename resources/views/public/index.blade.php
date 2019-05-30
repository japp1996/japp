@extends('layouts.public')
@section('title', 'Japp Portafolio')
@section('content')
    <section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
						<div class="banner_content">
							<h3 class="text-uppercase">Hola!</h3>
							<h1 class="text-uppercase">Soy Jose Padron</h1>
							<h5 class="text-uppercase">Junior PHP-Javascript Developer</h5>
							<div class="d-flex align-items-center">
								<a class="primary_btn" href="#"><span>Hire Me</span></a>
								<a class="primary_btn tr-bg" href="{{url('/cv')}}"><span>Ver CV</span></a>
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
						<h2>Conozca <br>
							un poco sobre mí<br>
							antes que nada</h2>
						<p>
                            Venezolano. 22 años. Técnico Superior en Informática. Programador PHP-Javascript. Experiencia en desarrollo
                            de aplicaciones web, docencia y soporte técnico. Metodología ágil de trabajo y metódica.
						</p>
						<p>
							Apróximadamente 2 años en el área web, 3 meses en el área de soporte y 2 meses en enseñanza de ajedrez a niños en colegio.
						</p>
                        <a class="primary_btn" href="{{url('cv')}}"><span>Descargar CV</span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End About Us Area =================-->

	<!--================ Srart Brand Area =================-->
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
									<img src="img/brands/logo9.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="offset-lg-2 col-lg-4 col-md-6">
					<div class="client-info">
						<div class="d-flex mb-50">
							<span class="lage">2</span>
							<span class="smll">Años de Experiencia en el desarrollo web</span>
						</div>
						<div class="call-now d-flex">
							<div>
								<span class="fa fa-phone"></span>
							</div>
							<div class="ml-15">
								<p>Llámame</p>
								<h3>(+58)-412-467-4136</h3>
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
						<h2>Servicios Ofrecidos </h2>
						<p>
                            Atención ofrecida a cualquiera interesado en subir su negocio a internet y generar ingresos 
                            <br> 
                            Si tiene una idea y desea monetizarla a traves de una aplicación ésta es su oportunidad con
                            precios bastante económicos.
                            <br>
						</p>
					</div>
				</div>
			</div>
			<div class="row feature_inner">
				<div class="col-lg-3 col-md-6">
					<div class="feature_item">
						<img src="img/services/s1.png" alt="">
						<h4>Web developing</h4>
						<p>
                            Aplicaciones web conforme a su necesidad con tecnología estandar y estrategia de desarrollo ágil 
                        </p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="feature_item">
						<img src="img/services/s2.png" alt="">
						<h4>Clases de Ajedrez</h4>
						<p>Lecciones privadas online para principiantes adultos, jóvenes y niños que estén en sus inicios</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="feature_item">
						<img src="img/services/s3.png" alt="">
						<h4>Diseño Web</h4>
						<p>
                            Creación de Interfaces responsive (adaptables a teléfonos) y conforme a su marca corporativa
                            y colores asociados a su logotipo o preferencia.
                        </p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="feature_item">
						<img src="img/services/s4.png" alt="">
						<h4>Clases de Programación</h4>
						<p>Clases privadas de programación. Temas: HTML, CSS, Javascript, Node.js, PHP estructurado, orientado a objetos, 
                            Mysql, Diseño de Base de datos, Frameworks Css, Frameworks Js, Frameworks PHP, Socket, Entre otros.</p>
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
						<h2>PORTAFOLIO <br>
							Proyectos de calidad </h2>
					</div>
				</div>
			</div>
			<div class="filters portfolio-filter">
				<ul>
					<li class="active" data-filter="*">Todos</li>
					<li data-filter=".popular">Populares</li>
					<li data-filter=".latest"> Últimos</li>
					<li data-filter=".following">En Mantenimiento</li>
					<li data-filter=".upcoming">En desarrollo</li>
				</ul>
			</div>
	
			<div class="filters-content">
				<div class="row portfolio-grid justify-content-center">
					<div class="col-lg-4 col-md-6 all latest">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="img/portfolio/p1.jpg" alt="">
								<div class="overlay"></div>
								<a href="img/portfolio/p1.jpg" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">minimal design</a></h4>
								<p>Animated, portfolio</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all popular">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="img/portfolio/p2.jpg" alt="">
								<div class="overlay"></div>
								<a href="img/portfolio/p2.jpg" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">Paint wall</a></h4>
								<p>Animated, portfolio</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all latest">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="img/portfolio/p3.jpg" alt="">
								<div class="overlay"></div>
								<a href="img/portfolio/p3.jpg" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">female light</a></h4>
								<p>Animated, portfolio</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all popular">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="img/portfolio/p4.jpg" alt="">
								<div class="overlay"></div>
								<a href="img/portfolio/p4.jpg" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">fourth air</a></h4>
								<p>Animated, portfolio</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all following">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="img/portfolio/p6.jpg" alt="">
								<div class="overlay"></div>
								<a href="img/portfolio/p5.jpg" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">together sign</a></h4>
								<p>Animated, portfolio</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all upcoming">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="img/portfolio/p5.jpg" alt="">
								<div class="overlay"></div>
								<a href="img/portfolio/p6.jpg" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">multiply fowl</a></h4>
								<p>Animated, portfolio</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all upcoming following">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="img/portfolio/p7.jpg" alt="">
								<div class="overlay"></div>
								<a href="img/portfolio/p7.jpg" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">green heaven</a></h4>
								<p>Animated, portfolio</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all following">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="img/portfolio/p8.jpg" alt="">
								<div class="overlay"></div>
								<a href="img/portfolio/p8.jpg" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4>fly male</h4>
								<p>Animated, portfolio</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all upcoming">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="img/portfolio/p9.jpg" alt="">
								<div class="overlay"></div>
								<a href="img/portfolio/p9.jpg" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">season face</a></h4>
								<p>Animated, portfolio</p>
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
						<h2>Comentarios de clientes</h2>
						<p>Is give may shall likeness made yielding spirit a itself togeth created after sea is in beast <br>
							 beginning signs open god you're gathering ithe</p>
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
        							<h4>Neil Guedez</h4>
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
        			<div class="testi_item">
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
        			</div>
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
						<h2 class="text-uppercase text-white">Recibir nuestro catálogo de ofertas</h2>
						<p class="text-white"> Le enviaremos a su correo un PDF con información más detallada acerca de nuestros servicios y precios.</p>
						<div class="subcribe-form" id="mc_embed_signup">
							<form target="_blank" novalidate="true" action="" method="POST" class="subscription relative">
								<input name="email" placeholder="Dirección de correo electrónico" required="" type="email">
								<div style="position: absolute; left: -5000px;">
									<input name="input" tabindex="-1" value="" type="text">
								</div>
								<button class="primary-btn hover d-inline"> Solicitar Cotización </button>
								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection