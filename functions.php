<?php
// turn off automatic development updates
define( 'WP_AUTO_UPDATE_CORE', false );

// Add support for full and wide align images.
add_theme_support( 'align-wide' );


define('CJ_THEME_DIR', dirname(__FILE__) . DIRECTORY_SEPARATOR);
define('CJ_THEME_VERSION', time());

# Enqueue Custom Scripts
require_once( __DIR__ . '/inc/enqueue-scripts.php');

# THEME CAPS
// require_once( __DIR__ . '/inc/theme-caps.php');

# HELPER FUNCTIONS
require_once( __DIR__ . '/inc/helpers.php');

# ACF GLOBAL MODULES

# ACF OPTIONS PAGES
// require_once( __DIR__ . '/inc/acf-global-modules.php');
require_once( __DIR__ . '/inc/acf-options-pages.php');

# SITE ADJUSTMENTS
require_once( __DIR__ . '/inc/config/nav.php');
// require_once( __DIR__ . '/inc/config/register-blocks.php');
require_once( __DIR__ . '/inc/config/register-colors.php');
require_once( __DIR__ . '/inc/config/register-menus.php');
// require_once( __DIR__ . '/inc/config/register-sidebar.php');

# SHORTCODES
// require_once( __DIR__ . '/inc/shortcodes/attorneys.php');
// require_once( __DIR__ . '/inc/shortcodes/testimonials-slider.php');
// require_once( __DIR__ . '/inc/shortcodes/verdicts-slider.php');
require_once( __DIR__ . '/inc/shortcodes/cjedit.php');
require_once( __DIR__ . '/inc/shortcodes/cta-form.php');
// require_once( __DIR__ . '/inc/shortcodes/latest-posts.php');
require_once( __DIR__ . '/inc/shortcodes/list-child-pages.php');
require_once( __DIR__ . '/inc/shortcodes/phone.php');
// require_once( __DIR__ . '/inc/shortcodes/video.php');
// require_once( __DIR__ . '/inc/shortcodes/vzaar.php');

# CUSTOM POST TYPES
// require_once( __DIR__ . '/inc/cpt/verdicts.php');
// require_once( __DIR__ . '/inc/cpt/testimonials.php');
// require_once( __DIR__ . '/inc/cpt/staff.php');

?>
