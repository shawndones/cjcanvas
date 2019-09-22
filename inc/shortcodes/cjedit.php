<?php
function cjedit_func( $atts ) {
	extract( shortcode_atts( array(
		'id' => '0',
		'detail' => 'all',
	), $atts ) );

	$id = "{$id}";
	$detail = "{$detail}";

	if (! $id) {
		return "No article specified.";
	}
	
	return file_get_contents("http://www.cjadvertising.com/cjedit/output.php?id=$id&detail=$detail");

}
add_shortcode( 'cjedit', 'cjedit_func' );