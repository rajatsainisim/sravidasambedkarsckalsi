<!DOCTYPE html>
<html class="wide" lang="en">

<head>
	<title><?php echo get_bloginfo( 'name' ); ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width height=device-height initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" 	href="//fonts.googleapis.com/css?family=Roboto:400%7CUbuntu:300,400,500,600,700">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/fonts.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/style.css">
	<style>
		.ie-panel {
			display: none;
			background: #212121;
			padding: 10px 0;
			box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
			clear: both;
			text-align: center;
			position: relative;
			z-index: 1;
		}

		html.ie-10 .ie-panel,
		html.lt-ie-10 .ie-panel {
			display: block;
		}
	</style>
    <?php wp_head(); ?>
</head>

<body <?php //body_class(); ?>>
<?php //wp_body_open(); ?>
	<div class="ie-panel">
		<a href="#"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820"
				alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a>
	</div>
	<div class="preloader">
		<div class="preloader-body">
			<div class="preloader-item">
				<svg width="40" height="40" viewbox="0 0 40 40">
					<polygon class="rect" points="0 0 0 40 40 40 40 0"></polygon>
				</svg>
			</div>
		</div>
	</div>
	<div class="page">
		<!-- Page Header-->
		<header class="section page-header jumbotron-creative">
			<!-- RD Navbar-->
			<div class="rd-navbar-wrap">
				<nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
					data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed"
					data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed"
					data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static"
					data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static"
					data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px"
					data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
					<div class="rd-navbar-main-outer">
						<div class="rd-navbar-main">
							<!-- RD Navbar Panel-->
							<div class="rd-navbar-panel">
								<!-- RD Navbar Toggle-->
								<button class="rd-navbar-toggle"
									data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
								<!-- RD Navbar Brand-->
								<div class="rd-navbar-brand">
									<!--Brand--><a class="brand" href="index.html">
										<!-- <img class="brand-logo-light" src="" alt="" width="50"
											height="26" /> -->
											<?php the_custom_logo();?>
									</a>
								</div>
							</div>
							<div class="rd-navbar-main-element">
								<div class="rd-navbar-nav-wrap">
									<?php dynamic_sidebar('header');?>
								</div>
							</div>

						</div>
					</div>
				</nav>
			</div>
	