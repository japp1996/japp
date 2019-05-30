<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>
        @yield('title')
    </title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{ asset('vendors/linericon/style.css')}}">
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{ asset('vendors/owl-carousel/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{ asset('vendors/nice-select/css/nice-select.css')}}">
	<!-- main css -->
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
	<!--================ Start Header Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index-2.html"><img src="img/logo.png" width="110px" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-end">
                            <li class="nav-item active"><a class="nav-link" href="{{url('/')}}">Inicio</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Conocimientos</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="{{url('/know-tech')}}">Informáticos</a></li>
									<li class="nav-item"><a class="nav-link" href="{{url('/know-other')}}">Otros</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Blog</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="{{url('/chess-blog')}}">Blog de Ajedrez</a></li>
									<li class="nav-item"><a class="nav-link" href="{{url('/music-blog')}}">Blog de Música</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{url('/admin-rrhh-blog')}}">Blog de Administración y RRHH</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{url('/dev-blog')}}">Blog de Programación</a></li>
								</ul>
							</li>
                            <li class="nav-item"><a class="nav-link" href="{{url('contact')}}">Contácto</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                    aria-expanded="false">Idioma</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="{{url('/es')}}">Español</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{url('/en')}}">English</a></li>
                                </ul>
                            </li>
                            
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Area =================-->

    @yield('content')
	
	<!--================Footer Area =================-->
	<footer class="footer_area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="footer_top flex-column">
						<div class="footer_logo">
							<a href="#">
								<img src="img/logo.png" width="110px" alt="">
							</a>
							<h4>Sígueme</h4>
						</div>
						<div class="footer_social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-github"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row footer_bottom justify-content-center">
				<p class="col-lg-8 col-sm-12 footer-text">
                    Copyright &copy;
                    <script type="text/javascript">
                        document.write(new Date().getFullYear());
                    </script>
                    Todos los derechos reservados | Japp</a>
                </p>
			</div>
		</div>
	</footer>
	<!--================End Footer Area =================-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="{{asset('js/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/popper.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/stellar.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/jquery.magnific-popup.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('vendors/nice-select/js/jquery.nice-select.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('vendors/isotope/imagesloaded.pkgd.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('vendors/isotope/isotope-min.js')}}" type="text/javascript"></script>
	<script src="{{asset('vendors/owl-carousel/owl.carousel.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/jquery.ajaxchimp.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/mail-script.js')}}" type="text/javascript"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE" type="text/javascript"></script>
	<script src="{{asset('js/gmaps.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/theme.js')}}" type="text/javascript"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="text/javascript"></script>
<script type="text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){
      dataLayer.push(arguments);
  }
  gtag('js', new Date());
  gtag('config', 'UA-23581568-13');
</script>
<script src="{{asset('js/rocket-loader.min.js')}}" type="text/javascript"></script>

</body>
</html>