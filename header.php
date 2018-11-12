<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
	<?php wp_head(); ?>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('url'); ?>/wp-content/themes/theme-ezpk/css/reset.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('url'); ?>/wp-content/themes/theme-ezpk/css/styles.css" />
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans:800,900|Open+Sans:400,700" rel="stylesheet"> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/themes/theme-ezpk/js/doubletaptogo.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/themes/theme-ezpk/js/csth-scripts-min.js"></script>
</head>

<body <?php body_class(); ?>>
	<div id="wrapper" class="hfeed">
	<header id="header" role="banner">
		<nav id="menu" role="navigation">
			<a href="#menu" class="burger" title="Show Navigation">Menu</a>
    	<a href="#" class="burger" title="Hide Navigation">Menu</a>
			<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
		</nav>
		<section id="branding">
			<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('url'); ?>/wp-content/themes/theme-ezpk/img/ez-pack-logo.png" alt="E-Z Pack Trucks Logo"></a>
		</section>
		<div class="csthLink">
			<a href="<?php bloginfo('url'); ?>/?page_id=32"><img class="csthLink__img" src="<?php bloginfo('url'); ?>/wp-content/themes/theme-ezpk/img/csth_pgTrn_ezpk.png" alt="CSTH Company"></a>
		</div>
	</header>
	
	<div id="container">