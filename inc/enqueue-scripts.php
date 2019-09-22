<?php

add_action( 'wp_enqueue_scripts', 'cj_enqueue_scripts' );
function cj_enqueue_scripts(){

	$dir =  get_bloginfo('stylesheet_directory');

	# enqueue jquery
	wp_enqueue_script('jquery', $dir . '/js/libs/jquery-3.3.1.min.js');

	# enqueue custom scripts
	wp_enqueue_script('preloads', $dir . '/js/preloads.js', '', CJ_THEME_VERSION );
	wp_enqueue_script('plugins', $dir . '/js/plugins.js', array('jquery'),  CJ_THEME_VERSION, true);
	wp_enqueue_script('scripts', $dir . '/js/scripts.js', array('jquery'),  CJ_THEME_VERSION, true);
	// wp_enqueue_script('form', $dir . '/js/form.js', array('jquery'),  CJ_THEME_VERSION, true);
	// wp_enqueue_script('recaptcha', 'https://www.google.com/recaptcha/api.js', array('jquery'),  CJ_THEME_VERSION, true);
	// wp_enqueue_script('tracking', $dir . '/js/tracking.js', array('jquery'),  CJ_THEME_VERSION, true);

	if ( is_singular() ) {
		wp_enqueue_script( 'comment-reply' );
	}

	# enqueue custom styles
	// wp_enqueue_style( 'font_roboto', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap', array(), CJ_THEME_VERSION );
	wp_enqueue_style( 'style', $dir . '/style.css', array(), CJ_THEME_VERSION );
	// wp_enqueue_style( 'vzaar', $dir . '/css/vzaar.css', array(), CJ_THEME_VERSION );


}
// add async and defer attributes to enqueued scripts
// function google_recaptcha_load_tag($tag, $handle) {
	
// 	if ($handle === 'recaptcha') {
// 		if (false === stripos($tag, 'async')) {
// 			$tag = str_replace(' src', ' async="async" src', $tag);
// 		}
// 		if (false === stripos($tag, 'defer')) {
// 			$tag = str_replace('<script ', '<script defer ', $tag);
// 		}
// 	}
	
// 	return $tag;
	
// }
// add_filter('script_loader_tag', 'google_recaptcha_load_tag', 10, 2);
// // Update CSS within in Admin
// function admin_style() {
//   wp_enqueue_style('admin-styles', get_template_directory_uri().'/admin.css');
// }
// add_action('admin_enqueue_scripts', 'admin_style');



