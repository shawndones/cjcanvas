<?php
function cja_start_superfish() { ?>
	
	<script type="text/javascript">
		jQuery( function( $ ) {
			$( document ).ready( function() {
				$('ul.sf-menu').supersubs( {
					minWidth   : 16, // minimum width of sub-menus in em units
					maxWidth   : 40, // maximum width of sub-menus in em units
					extraWidth : 1   // extra width can ensure lines don't sometimes turn over
				} ).superfish();
			} );
		} );
	</script>

<?php }

add_action( 'wp_footer', 'cja_start_superfish' );


function add_class_main_nav_anchors( $atts, $item, $args ) {
  if( ($args->theme_location == 'primary-nav') ) {
    $atts['class'] = "c-primary-nav__link";
  }
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_class_main_nav_anchors', 10, 4 );


function add_class_footer_nav_anchors( $atts, $item, $args ) {
  if( ($args->theme_location == 'footer-nav') ) {
    $atts['class'] = "c-footer-nav__link";
  }
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_class_footer_nav_anchors', 10, 4 );

// Prevent Description textarea from striping html tags
// remove_filter( 'nav_menu_description', 'strip_tags' );

// function my_plugin_wp_setup_nav_menu_item( $menu_item ) {
//     if ( isset( $menu_item->post_type ) ) {
//         if ( 'nav_menu_item' == $menu_item->post_type ) {
//             $menu_item->description = apply_filters( 'nav_menu_description', $menu_item->post_content );
//         }
//     }
//     return $menu_item;
// }

// add_filter( 'wp_setup_nav_menu_item', 'my_plugin_wp_setup_nav_menu_item' );

// Get menu description as global variable
// function add_menu_description( $item_output, $item, $depth, $args ) {
//   global $cj_nav_item_description;
//   $cj_nav_item_description = "<div class='menu-item-description col-md-4'>" . $item->description . "</div>";
//   return $item_output;
// }
// add_filter( 'walker_nav_menu_start_el', 'add_menu_description', 10, 4);

// Add a wrapper around sublevel menu items
class WPSE_78121_Sublevel_Walker extends Walker_Nav_Menu
{
    function start_lvl( &$output, $depth = 0, $args = array() ) {
      global $cj_nav_item_description;
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class='sf-mega'>\n";
    }
    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }
}
