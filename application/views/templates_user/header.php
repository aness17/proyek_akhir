<!DOCTYPE html>
<html lang="en">

<head>
	<base href="<?php echo base_url(); ?>">
	<meta charset="UTF-8">
	<title>Ekspedisi</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- google fonts -->

	<!-- Css link -->
	<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets_user/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets_user/css/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets_user/css/owl.transitions.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets_user/css/animate.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets_user/css/lightbox.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets_user/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets_user/css/preloader.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets_user/css/image.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets_user/css/icon.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets_user/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets_user/css/responsive.css">
	<script src="<?php echo base_url() ?>assets_user/js/jquery-1.11.3.min.js"></script>

	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
	<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
	<!-- Leaflet Draw -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js"></script>
	<script src="plugin/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
	<link rel="stylesheet" href="plugin/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">

	<script type="text/javascript" src="src/L.Control.ZoomBar.js"></script>
	<script type="text/javascript" src="plugin/dist/Leaflet.Coordinates-0.1.5.min.js"></script>
	<link rel="stylesheet" href="plugin/dist/Leaflet.Coordinates-0.1.5.css" />
	<link rel="stylesheet" href="plugin/dist/L.Control.Locate.min.css" />
	<script src="plugin/src/L.Control.Locate.js"></script>
	<script src="plugin/src/leaflet-compass.js"></script>
	<!-- <script src='plugin/Leaflet.LocationShare.js'></script> -->
	<link rel="stylesheet" href="plugin/src/leaflet-compass.css" />
	<script src="plugin/L.Control.Window.js"></script>
	<link rel="stylesheet" href="plugin/L.Control.Window.css" />
	<script src="plugin/dist/Control.FullScreen.js"></script>
	<link rel="stylesheet" href="plugin/dist/Control.FullScreen.css" />
	<script src="plugin/src/Control.GlobeMiniMap.js"></script>
	<link rel="stylesheet" href="plugin/dist/Control.MiniMap.min.css" />
	<script src="plugin/dist/Control.MiniMap.min.js" type="text/javascript"></script>
	<!-- <link rel="stylesheet" type="text/css" href="src/leaflet.css"/> -->
	<link rel="stylesheet" type="text/css" href="src/L.Control.ZoomBar.css" />
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<script src="plugin/angular.min.js"></script>
	<link rel="stylesheet" href="plugin/css/styledLayerControl.css" />
	<script src="plugin/src/styledLayerControl.js"></script>
	<link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
	<script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
</head>

<body id="top">
	<header id="navigation" class="navbar-fixed-top animated-header">
		<div class="container">
			<div class="navbar-header">
				<!-- responsive nav button -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- /responsive nav button -->

				<!-- logo -->
				<h1 class="navbar-brand">
					<a href="#body"><img src="<?php echo base_url() ?>assets_user/img/logo.png" height="40" width="164" alt=""></a>
				</h1>
				<!-- /logo -->
			</div>

			<!-- main nav -->
			<nav class="collapse navbar-collapse navbar-right" role="navigation">
				<ul id="nav" class="nav navbar-nav menu">
					<li><a href="<?php echo base_url() ?>user/beranda">Beranda</a></li>
					<li><a href="<?php echo base_url() ?>user/sebaran">Sebaran</a></li>
					<li><a href="<?php echo base_url() ?>user/pencarian">Pencarian</a></li>
				</ul>
			</nav>
			<!-- /main nav -->

		</div>
	</header>


	<div class="wrapper">
		<section id="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="block">
							<h1>Cari dan Temukan dengan Mudah Jasa Ekspedisi di Sekitarmu</h1>
							<h2>Kamu dapat menemukannya dengan mudah hanya dengan tombol dibawah</h2>
							<div class="buttons">
								<a href="<?php echo base_url() ?>user/pencarian" class="btn btn-learn">Cari</a>
								<a href="<?php echo base_url() ?>user/sebaran" class="btn btn-learn">Lihat</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="scrolldown">
				<a id="scroll" href="#features" class="scroll"></a>
			</div>
		</section>