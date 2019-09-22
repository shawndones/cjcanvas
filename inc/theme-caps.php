<?php

// allow Editor role to access options - primarily for WordPress SEO and menu editing
function add_theme_caps() {
	$role = get_role( 'editor' );
	$role->add_cap( 'edit_files' );
	$role->add_cap( 'edit_theme_options' );
	$role->add_cap( 'manage_options' );
}
add_action( 'admin_init', 'add_theme_caps');