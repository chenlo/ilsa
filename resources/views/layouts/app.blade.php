
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
		
		<!-- Base meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=0.80">
		<link rel="shortcut icon" href="{{{ asset('images/favicon.ico') }}}">

		 <!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<!-- Descriptive meta -->
		<title>Ingeniería de Lenguajes Software y Aplicaciones - Grupo Investigación ILSA</title>
		<meta name="title" content="max 65 character title">
		<meta name="description" content="max 165 character description">
		<meta name="keywords" content="comma, separated, list">
		<meta name="author" content="author name">

		<!-- CSS assets -->
		<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">

		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
		<link href="{{ asset('css/banners.css') }}" rel="stylesheet">
		<link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
		<link href="{{ asset('css/jquery.modal.min.css') }}" rel="stylesheet">
		
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->

	</head>

	<body>

		<!-- Main navigation element for site, html5 elements used to improve rendering on assistive devices -->
		<nav class="navbar navbar-default navbar-fixed-top navbar-white">
			<div class="top-header">
				<div class="container">
					
					<!-- Skip to content link allows users rendering the site on a screen reader to skip past navigational elements -->
					<div class="menu-block pull-left no-pad hidden-xs">
						<a href="#main_content" class="btn btn-link scroller"><em class="fa fa-level-down" aria-hidden="true"></em> Ir al contenido &nbsp;</a>
					</div>
					
					<!-- Secondary navigation and login dropdown -->
					<div class="menu-block pull-right no-pad">
						<ul>
							<!-- Example secondary links -->
							<li><a href="#" target="blank" aria-label="Navigate to Facebook"><em class="fa fa-facebook top-social-icon" aria-hidden="true"></em></a>
							<li><a href="#" target="blank" aria-label="Navigate to Twitter"><em class="fa fa-twitter top-social-icon" aria-hidden="true"></em></a></li>
							<li><a href="#" target="blank" aria-label="Navigate to YouTube"><em class="fa fa-youtube top-social-icon" aria-hidden="true"></em></a></li>
							<li><a href="{{ url('admin/login') }}" target="blank" aria-label="Navigate to YouTube"><em class="fa fa-lock" aria-hidden="true"></em></a></li>
				        </ul>
					</div>

				</div>
			</div>

			<div class="container">
				
				<!-- Mobile hamburger style menu -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top_main_navigation" aria-expanded="false">
						<span class="sr-only">Navegación</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="{{ url('/') }}">
						<img src="{{ asset('storage/'.setting('site.logo')) }}" alt="Volver a la página de presentación" />
					</a>
				</div>

				<!-- Main site header -->
				<div class="collapse navbar-collapse" id="top_main_navigation">
					<ul class="nav navbar-nav">
						<li><a href="{{ url('/') }}">Presentación</a></li>
						<li><a href="{{ url('/miembros') }}">Miembros</a></li>
						<li><a href="{{ url('/proyectos') }}">Proyectos</a></li>
						<li><a href="{{ url('/desarrollos') }}">Desarrollos</a></li>
						<li><a href="{{ url('/publicaciones') }}">Publicaciones</a></li>
					</ul>

				</div>
			</div>
		</nav>

		@yield('content')

		<!-- Footer element -->
		<footer>
			<div class="container">
				<div class="row footer-one">
					<div class="col-md-7 hidden-sm hidden-xs">
						<address>
							<strong>Grupo de Ingeniería de Lenguajes Software y Aplicaciones</strong><br />
							Universidad Complutense de Madrid<br />
							Dirección<br />
							Madrid<br />
						</address>
					</div>
					<div class="col-md-5 text-right social mobile-left">
						Síguenos en:
						<a href="#" target="blank" aria-label="Navigate to Facebook"><em class="fa fa-facebook" aria-hidden="true"></em></a>
						<a href="#" target="blank" aria-label="Navigate to Twitter"><em class="fa fa-twitter" aria-hidden="true"></em></a>
						<a href="#" target="blank" aria-label="Navigate to YouTube"><em class="fa fa-youtube" aria-hidden="true"></em></a>
						<a href="#" target="blank" aria-label="Navigate to Pinterest"><em class="fa fa-pinterest" aria-hidden="true"></em></a>
						<a href="#" target="blank" aria-label="Navigate to LinkedIn"><em class="fa fa-linkedin" aria-hidden="true"></em></a>
						<a href="#" target="blank" aria-label="Navigate to Instagram"><em class="fa fa-intagram" aria-hidden="true"></em></a>
						<span class="spacer" aria-hidden="true"> | </span>
						<a href="#" target="blank" aria-label="Navigate to iPhone App"><em class="fa fa-apple" aria-hidden="true"></em></a>
						<a href="#" target="blank" aria-label="Navigate to Android App"><em class="fa fa-android" aria-hidden="true"></em></a>
						<hr>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<p>
							&copy; <?php echo date("Y"); ?> <strong>Ingeniería de Lenguajes Software y Aplicaciones</strong>. All Rights Reserved
						</p>
					</div>
				</div>
			</div>
		</footer>

		<!-- JS assets -->
		<script src="{{ asset('js/jquery.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/jquery.smooth-scroll.min.js') }}"></script>
		<script src="{{ asset('js/jquery.vide.min.js') }}"></script>
		<script src="{{ asset('js/jquery.bgswitcher.js') }}"></script>
		<script src="{{ asset('js/jquery.modal.min.js') }}"></script>
		<script src="{{ asset('js/app.js') }}"></script>

	</body>

</html>
