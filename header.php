<!doctype html>
<!-- START HTML OPEN -->
<!--[if IE 6]> <html class="no-js ie ie6 lt-ie7 lt-ie8 lt-ie9" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="no-js ie ie7 lt-ie8 lt-ie9" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie ie8 lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9]> <html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]> <html class="no-js ie" lang="en"> <![endif]-->
<!--[if !(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<!-- END HTML OPEN -->

<head>

	<title>
	<?php wp_title(''); ?>
	</title>

	<!-- META -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- FAVICON -->
	<link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php bloginfo('template_directory');?>/favicon.ico" type="image/x-icon">

	<!-- IMPORT FONTS -->


	<!-- RSS/PINGBACKS -->
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf( __( '%s latest posts', 'your-theme' ), wp_specialchars(get_bloginfo('name'), 1 ) ); ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'your-theme' ), wp_specialchars(get_bloginfo('name'), 1 ) ); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />



	<?php wp_head(); ?>


</head>
<?php
$template_class = "";
if (is_front_page()) {
	$template_class .= " page--home";
} elseif(is_category()) {
	$template_class .= " page--category";
} elseif(is_single() || is_home()) {
	$template_class .= " page--blog";
} else {
	$template_class .= " page--sub";
}
?>

<body <?php $page_slug = 'page-'.$post->post_name; body_class("page blog $template_class $page_slug"); ?>>
<?php // echo $after_body_tag_scripts; ?>
	<?php if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) { gtm4wp_the_gtm_tag(); } ?>
	<!-- START CHROME FRAME -->
	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
	chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
	<!-- END CHROME FRAME -->
	<?php // include('svg-defs.svg'); ?>

	
		  <header role="banner" class="c-header">
			<div class="c-header__inner l-frame">
				
					<?php // get_template_part( 'template-parts/search-form', 'none' );  ?>

					<!-- Logo -->
					<!-- <a href="/" class="c-logo-link c-header__logo"><img class="c-logo c-logo-link__img" src="<?php // bloginfo('template_directory');?>/img/logo.png" alt="<?php // bloginfo('name'); ?>" /></a>	 -->
					<a href="/" class="c-logo-link c-header__logo"><?php include(CJ_THEME_DIR . "/img/logo.svg"); ?></a>	

					
			
					<a href="#mobile-nav" class="nav-toggle nav-toggle-menu"><i class="icon-menu"></i></a>
					<nav id="nav" role="navigation" class="c-primary-nav" aria-label="Main Navigation">
						<?php 
						wp_nav_menu( array(
							'theme_location' => 'primary-nav', 
							'container' => false, 
							'sort_column'    => 'menu_order',
							'fallback_cb'    => 'default_menu',
							'menu_class' => 'c-primary-nav__list sf-menu'
							// 'walker' => new WPSE_78121_Sublevel_Walker
							)); ?>
					</nav>
					
					<div class="c-block-cta">
					<!-- Phone Icon -->
						<p class="c-block-cta__text">Free Consultations 24/7</p>
						<a class="c-block-cta__phone-link" href="tel:<?php echo do_shortcode('[phone]'); ?>"><span class="tel"><?php echo do_shortcode('[phone]'); ?></span><i class="icon-phone"><?php include(CJ_THEME_DIR . "/icons/phone.svg"); ?></i></a>
					</div>
		  </header><!-- .header -->
	<main role="main" class="mod_scale_fluid">