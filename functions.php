<?php
//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'cookie-cat' );
define( 'CHILD_THEME_URL', 'http://www.bobbingwide.com/oik-themes/genesis-cc0512' );
define( 'CHILD_THEME_VERSION', '1.1.2' );

//* Enqueue Google Fonts
add_action( 'wp_enqueue_scripts', 'genesis_sample_google_fonts' );
function genesis_sample_google_fonts() {

	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Lato:300,400,700', array(), CHILD_THEME_VERSION );

}

//* Add HTML5 markup structure
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Add support for custom background
add_theme_support( 'custom-background' );

//* Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );

//* Enable Genesis Accessibility Components
// See https://my.studiopress.com/documentation/snippets/accessibility/enable-accessibility-features/
add_theme_support( 'genesis-accessibility', array(
	'404-page',
	'drop-down-menu',
	'headings',
	'rems',
	'search-form',
	'skip-links',
) );

//add_filter( 'genesis_footer_creds_text', "cookie_cat_footer_creds_text" );
add_filter( 'genesis_pre_get_option_footer_text', 'cookie_cat_footer_creds_text' );


function cookie_cat_footer_creds_text( $text ) {
  $text = "[bw_copyright] <br />[bw_wpadmin]"; 
  return( $text );
}
