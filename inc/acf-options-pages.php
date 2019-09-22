<?php 
// Create ACF Options Page
if( function_exists('acf_add_options_page') ) {

	$option = array(
		'page_title' => 'Options',
    'menu_title' => 'Options',
		'post_id' => 'options'
			);
	acf_add_options_page($option);

	// STAFF OPTIONS
	// $staff_options = array(
	// 	'page_title' => 'Staff Options',
	// 	'menu_title' => 'Staff Options',
	// 	'post_id' => 'staff'
	// 	);
	// acf_add_options_page($staff_options);
	
	// GLOBAL MODULES
	// $global_modules = array(
	// 	'page_title' => 'Global Modules',
  //   'menu_title' => 'Global Modules',
	// 	'post_id' => 'global-modules',
	// 	'icon_url' => 'dashicons-layout'
	// 		);
	// acf_add_options_page($global_modules);

}