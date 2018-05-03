<!doctype html>
<!--[if lt IE 7]>
	<html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7">
<![endif]-->
<!--[if (IE 7)&!(IEMobile)]>
	<html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8">
<![endif]-->
<!--[if (IE 8)&!(IEMobile)]>
	<html <?php language_attributes(); ?> class="no-js lt-ie9">
<![endif]-->
<!--[if gt IE 8]>
	<html <?php language_attributes(); ?> class="no-js">
<![endif]-->

	<head>
		<script src="https://use.fontawesome.com/917e05ee15.js"></script>
		<title><?php wp_title(''); ?></title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
		<meta name="theme-color" content="#121212">
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<?php if (get_field('google_fonts', 'option')) : ?><?php the_field('google_fonts', 'option'); ?><?php endif; ?>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
		<div id="container">
			<header class="header" itemscope itemtype="http://schema.org/WPHeader">
				<div id="top-header" class="container-fluid margin-0">
					<div class="row d-flex align-items-center height-100">
						<div class="icons col-sm-6 col-md-3 col-lg-3 d-none d-lg-flex">
							<?php  if( have_rows('social_media_accounts', 'option') ): ?>
							 	<?php while ( have_rows('social_media_accounts', 'option') ) : the_row(); ?>
							    <a target="_blank" href="<?php the_sub_field('social_media_account_url'); ?>">
										<i class="fa <?php the_sub_field('social_media_account_icon'); ?>"></i>
									</a>
							    <?php endwhile; ?>
							<?php endif; ?>
						</div>
						<div class="top-nav col-sm-12 col-md-12 col-lg-9 d-flex ">
							<nav class="col-12 col-sm-12 col-md-12 col-lg-12 padding-0 center-on-mobile row margin-0 justify-content-sm-around justify-content-md-end">
								<div class="col-xs-6 d-flex align-items-center number">
									<i class="d-none d-sm-block text-right fa fa-phone"></i>&nbsp;<?php the_field('contact_phone', 'option'); ?>
								</div>
								<div class="col-xs-6 d-flex align-items-center email">
									<i class="d-none d-sm-block text-right fa fa-envelope"></i>&nbsp;<?php the_field('contact_email', 'option'); ?>
								</div>
								<?php wp_nav_menu(array(
									'container' => false,
									'container_class' => 'top-menu',
									'menu' => __( 'The Top Menu', 'bonestheme' ),
									'menu_class' => 'nav top-nav float-right d-none d-md-flex',
									'theme_location' => 'top-nav',
									'before' => '',
									'after' => '',
									'link_before' => '',
									'link_after' => '',
									'depth' => 0,
									'fallback_cb' => ''
								)); ?>
							</nav>
						</div>
					</div>
				</div>

				<div id="inner-header" class="container-fluid">
					<nav class="navbar navbar-expand-lg navbar-light bg-faded">
						<!-- <div class="d-flex justify-content-between align-items-center"> -->
							<a id="logo" class="navbar-brand" href="<?php echo home_url(); ?>" itemscope itemtype="http://schema.org/Organization" rel="nofollow">
								<?php $logo_light = get_field('logo_light','option'); ?>
								<?php //if( !empty($logo_light) ): ?>
									<img class="not-scrolled" alt="East Coast Soul Logo" src="<?php echo get_template_directory_uri(); ?>/library/images/ecs-logo-horizontal-white.png" alt="<?php echo $logo_light['alt']; ?>" />
								<?php //endif; ?>
								<?php $logo_dark = get_field('logo_dark','option'); ?>
								<?php //if( !empty($logo_dark) ): ?>
									<img class="scrolled" alt="East Coast Soul Logo" src="<?php echo get_template_directory_uri(); ?>/library/images/ecs-logo-horizontal.png" alt="<?php echo $logo_dark['alt']; ?>" />
								<?php //endif; ?>
							</a>
							<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
						<!-- </div> -->
						<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
							<div class="navbar-nav">
								<?php wp_nav_menu(array(
									'container' => false,
									'container_class' => 'menu',
									'menu' => __( 'The Main Menu', 'bonestheme' ),
									'menu_class' => 'nav',
									'theme_location' => 'main-nav',
									'before' => '',
									'after' => '',
									'link_before' => '',
									'link_after' => '',
									'depth' => 0,
									'fallback_cb' => ''
								)); ?>
							</div>
						</div>
					</nav>
				</div>
			</header>
