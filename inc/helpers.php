<?php
// function to truncate text strings, namely post titles
function shorten($string, $len) {
	$short_string = substr($string, 0, $len);
	if (strlen($short_string) < strlen($string))
		$short_string .= '...';
	return $short_string;
}

// Convert anchor to something machine readable
function machine_readable($value) {
	$value = strtolower($value);
	$value = preg_replace("/[\s_]/", "-", $value);
	$value = preg_replace("/[.,]/", "", $value);
	$value = preg_replace('/["]/', "", $value); 
	return $value;
}

add_theme_support( 'post-thumbnails' ); 

// Get Google Map API Key and add here.
function my_acf_google_map_api( $api ){
	
	// $api['key'] = 'aIzaSycsMpUcFrXDbK8n2TFlEvD6IizfIxy0Tik';
	
	return $api;
	
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');


// Localize script variables
function js_variables(){ ?>
	<script type="text/javascript">
		var templateUrl = "<?php echo get_bloginfo('stylesheet_directory'); ?>";
	</script><?php
}
add_action ( 'wp_head', 'js_variables' );


// Add support for full and wide align images.
add_theme_support( 'align-wide' );

// Add reusable blocks as sidebar link in admin panel
add_action( 'admin_menu', 'linked_url' );
function linked_url() {
add_menu_page( 'linked_url', 'Reusable Blocks', 'read', 'edit.php?post_type=wp_block', '', 'dashicons-editor-table', 22 );
}

// Display First Paragraph of Post if not SEO Desc
// This entry throws a warning in WP. Find Some other way to do thisqw
// function cja_first_paragraph() {
// 	$first_paragraph_str = wpautop(get_the_content());
// 	$first_paragraph_str = substr($first_paragraph_str, 0, strpos($first_paragraph_str, '</p>') + 4);
// 	$first_paragraph_str = strip_tags($first_paragraph_str, '<a><strong><em>');
// 	return  $first_paragraph_str ;
// }

// add_action( 'rest_api_init', 'create_api_posts_meta_field' );

// function text_area_shortcode($value, $post_id, $field) {
//   if (is_admin()) {
//     return $value;
//   }

//   return do_shortcode($value);
// }
// add_filter('acf/load_value/type=textarea', 'text_area_shortcode', 10, 3);