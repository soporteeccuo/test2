<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html lang="es"> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="<?php echo $description; ?>" />
		<meta name="keywords" content="<?php echo $keywords; ?>" />
		<meta name="Author" content="Eccuo Ingeniería Informática" />
		<link rel="shortcut icon" href="<?php if($rutapadre){echo $rutapadre;} ?>assets/images/favicon.png" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<link href="<?php if($rutapadre){echo $rutapadre;} ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

		<!-- REVOLUTION SLIDER -->
		<link href="<?php if($rutapadre){echo $rutapadre;} ?>assets/plugins/slider.revolution/css/extralayers.css" rel="stylesheet" type="text/css" />
		<link href="<?php if($rutapadre){echo $rutapadre;} ?>assets/plugins/slider.revolution/css/settings.css" rel="stylesheet" type="text/css" />

		<!-- THEME CSS -->
		<link href="<?php if($rutapadre){echo $rutapadre;} ?>assets/css/essentials.css" rel="stylesheet" type="text/css" />
		<link href="<?php if($rutapadre){echo $rutapadre;} ?>assets/css/layout.css" rel="stylesheet" type="text/css" />

		<!-- PAGE LEVEL SCRIPTS -->
		<link href="<?php if($rutapadre){echo $rutapadre;} ?>assets/css/header-1.css" rel="stylesheet" type="text/css" />
		<link href="<?php if($rutapadre){echo $rutapadre;} ?>assets/css/color_scheme/brown.css" rel="stylesheet" type="text/css" id="color_scheme" />
	</head>

	<!--
		AVAILABLE BODY CLASSES:
		
		smoothscroll 			= create a browser smooth scroll
		enable-animation		= enable WOW animations

		bg-grey					= grey background
		grain-grey				= grey grain background
		grain-blue				= blue grain background
		grain-green				= green grain background
		grain-blue				= blue grain background
		grain-orange			= orange grain background
		grain-yellow			= yellow grain background
		
		boxed 					= boxed layout
		pattern1 ... patern11	= pattern background
		menu-vertical-hide		= hidden, open on click
		
		BACKGROUND IMAGE [together with .boxed class]
		data-background="assets/images/boxed_background/1.jpg"
	-->
	<body class="smoothscroll enable-animation">

		<!-- wrapper -->
		<div id="wrapper">

			<!-- Top Bar -->
			<div id="topBar">

				<div class="container">

					<!-- right -->
					<div class="social-icons pull-right hidden-xs">
						<a href="#" class="social-icon social-icon-sm social-icon-transparent social-facebook" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Facebook">
							<i class="icon-facebook"></i>
							<i class="icon-facebook"></i>
						</a>
						<a href="#" class="social-icon social-icon-sm social-icon-transparent social-twitter" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Twitter">
							<i class="icon-twitter"></i>
							<i class="icon-twitter"></i>
						</a>
						<a href="#" class="social-icon social-icon-sm social-icon-transparent social-gplus" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Google Plus">
							<i class="icon-gplus"></i>
							<i class="icon-gplus"></i>
						</a>
						<a href="#" class="social-icon social-icon-sm social-icon-transparent social-linkedin" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Linkedin">
							<i class="icon-linkedin"></i>
							<i class="icon-linkedin"></i>
						</a>
						<a href="#" class="social-icon social-icon-sm social-icon-transparent social-flickr" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Flickr">
							<i class="icon-flickr"></i>
							<i class="icon-flickr"></i>
						</a>
					</div>

				</div>


				<div class="border-top block clearfix">
					<div class="container">

						<!-- Logo -->
						<a class="logo has-banner pull-left text-center-md" href="../">
							<img src="<?php if($rutapadre){echo $rutapadre;} ?>assets/images/cots/cots.png" alt="" />
						</a>

						<a class="pull-right telefono-header size-25" href="tel:957491653">
							<i class="fa fa-phone"></i> 957 491 653
						</a>
					</div>
				</div>

			</div>
			<!-- /Top Bar -->


			<!-- 
				AVAILABLE HEADER CLASSES

				Default nav height: 96px
				.header-md 		= 70px nav height
				.header-sm 		= 60px nav height

				.noborder 		= remove bottom border (only with transparent use)
				.transparent	= transparent header
				.translucent	= translucent header
				.sticky			= sticky header
				.static			= static header
				.dark			= dark header
				.bottom			= header on bottom
				
				shadow-before-1 = shadow 1 header top
				shadow-after-1 	= shadow 1 header bottom
				shadow-before-2 = shadow 2 header top
				shadow-after-2 	= shadow 2 header bottom
				shadow-before-3 = shadow 3 header top
				shadow-after-3 	= shadow 3 header bottom

				.clearfix		= required for mobile menu, do not remove!

				Example Usage:  class="clearfix sticky header-sm transparent noborder"
			-->
			<div id="header" class="sticky header-sm clearfix background-header">

				<!-- TOP NAV -->
				<header id="topNav">
					<div class="container">

						<!-- Mobile Menu Button -->
						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
							<i class="fa fa-bars"></i>
						</button>

						<!-- 
							Top Nav 
							
							AVAILABLE CLASSES:
							submenu-dark = dark sub menu
						-->
						<div class="navbar-collapse pull-left nav-main-collapse collapse nopadding-left nopadding-right">
							<nav class="nav-main">

								<!--
									NOTE
									
									For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
									Direct Link Example: 

									<li>
										<a href="#">HOME</a>
									</li>
								-->
								<ul id="topMain" class="nav nav-pills nav-main">
									<li class="dropdown"><!-- HOME -->
										<a class="dropdown-toggle" href="<?php if($rutapadre){echo $rutapadre;} ?>../">
											INICIO
										</a>
									</li>
									<li class="dropdown"><!-- HOME -->
										<a class="dropdown-toggle" href="<?php if($rutapadre){echo $rutapadre;} ?>firma.php">
											FIRMA
										</a>
									</li>
									<li class="dropdown"><!-- HOME -->
										<a class="dropdown-toggle" href="#">
											ÁREAS DE PRÁCTICA
										</a>
										<ul class="dropdown-menu">
											<li class="dropdown">
												<a class="dropdown-toggle" href="<?php if($rutapadre){echo $rutapadre;} ?>servicios/derecho-civil.php">
													Derecho civil
												</a>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="<?php if($rutapadre){echo $rutapadre;} ?>servicios/derecho-inmobiliario.php">
													Derecho inmobiliario
												</a>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="<?php if($rutapadre){echo $rutapadre;} ?>servicios/derecho-mercantil.php">
													Derecho mercantil
												</a>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="<?php if($rutapadre){echo $rutapadre;} ?>servicios/derecho-bancario-financiero.php">
													Derecho bancario y financiero
												</a>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="<?php if($rutapadre){echo $rutapadre;} ?>servicios/derecho-concursal.php">
													Derecho concursal
												</a>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="<?php if($rutapadre){echo $rutapadre;} ?>servicios/derecho-propiedad-industrial-intelectual.php">
													Derecho de propiedad industrial e intelectual
												</a>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="<?php if($rutapadre){echo $rutapadre;} ?>servicios/derecho-administrativo.php">
													Derecho administrativo
												</a>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="<?php if($rutapadre){echo $rutapadre;} ?>servicios/derecho-urbanistico-medioambiental.php">
													Derecho urbanistico y medioambiental
												</a>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="<?php if($rutapadre){echo $rutapadre;} ?>servicios/derecho-telecomunicaciones.php">
													Derecho de las telecomunicaciones
												</a>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="<?php if($rutapadre){echo $rutapadre;} ?>servicios/derecho-penal.php">
													Derecho penal
												</a>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="<?php if($rutapadre){echo $rutapadre;} ?>servicios/derecho-laboral.php">
													Derecho laboral
												</a>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="<?php if($rutapadre){echo $rutapadre;} ?>servicios/derecho-procesal.php">
													Derecho procesal
												</a>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="<?php if($rutapadre){echo $rutapadre;} ?>servicios/asesoramiento.php">
													Asesoramiento fiscal, de auditoria y contabilidad
												</a>
											</li>
										</UL>
									</li>
									<li class="dropdown"><!-- HOME -->
										<a class="dropdown-toggle" href="<?php if($rutapadre){echo $rutapadre;} ?>equipo.php">
											EQUIPO
										</a>
									</li>
									<li class="dropdown"><!-- HOME -->
										<a class="dropdown-toggle" href="<?php if($rutapadre){echo $rutapadre;} ?>noticias.php">
											NOTICIAS
										</a>
									</li>
									<li class="dropdown"><!-- HOME -->
										<a class="dropdown-toggle" href="#" target="_blank">
											BLOG
										</a>
									</li>
									<li class="dropdown"><!-- HOME -->
										<a class="dropdown-toggle" href="<?php if($rutapadre){echo $rutapadre;} ?>contacto.php">
											CONTACTO
										</a>
									</li>
								</ul>

							</nav>
						</div>

					</div>
				</header>
				<!-- /Top Nav -->

			</div>