<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="{{ asset('img/favicon.ico') }}">
	<title>
        @yield('title')
	</title>
	
	<link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/favicon/apple-icon-57x57.png') }} ">
	<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/favicon/apple-icon-60x60.png') }} ">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/favicon/apple-icon-72x72.png') }} ">
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/favicon/apple-icon-76x76.png') }} ">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/favicon/apple-icon-114x114.png') }} ">
	<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/favicon/apple-icon-120x120.png') }} ">
	<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/favicon/apple-icon-144x144.png') }} ">
	<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/favicon/apple-icon-152x152.png') }} ">
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-icon-180x180.png') }} ">
	<link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('img/favicon/android-icon-192x192.png') }} ">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png') }} ">
	<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/favicon/favicon-96x96.png') }} ">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/favicon-16x16.png') }} ">
	<link rel="manifest" href="{{ asset('img/favicon/manifest.json') }} ">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="{{ asset('img/favicon/ms-icon-144x144.png') }}">
	<meta name="theme-color" content="#ffffff">
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
                            <li class="nav-item active"><a class="nav-link" href="{{url('/')}}">@lang('Public.Menu.Inicio')</a></li>
							{{--<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">@lang('Public.Menu.Conocimientos')</a>
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
                            <li class="nav-item"><a class="nav-link" href="{{url('contact')}}">@lang('Public.Menu.Contacto')</a></li>--}}
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                    aria-expanded="false">@lang('Public.Menu.Idioma')</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="{{url('lang/es')}}">Español</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{url('lang/en')}}">English</a></li>
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
							<h4>@lang('Public.Pie.Sigueme')</h4>
						</div>
						<div class="footer_social">
							<a href="https://facebook.com/jappweb" target="_blank"><i class="fa fa-facebook text-primary"></i></a>
							<a href="https://www.linkedin.com/in/japp1996/" target="_blank"><i class="fa fa-linkedin text-primary"></i></a>
                            <a href="https://github.com/japp1996" target="_blank"><i class="fa fa-github text-primary"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row footer_bottom justify-content-center">
				<p class="col-lg-8 col-sm-12 footer-text">
					@lang('Public.Pie.Copyright')
					</a>
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
@yield('script')
<!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            facebook: "1062552627159817", // Facebook page ID
            whatsapp: "584124674136", // WhatsApp number
            call_to_action: '{{ __('Public.Contacto.Escribeme') }}', // Call to action
            button_color: "#129BF4", // Color of button
            position: "right", // Position may be 'right' or 'left'
            order: "facebook,whatsapp", // Order of buttons
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget -->
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