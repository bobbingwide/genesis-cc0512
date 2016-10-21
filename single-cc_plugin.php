<?php
/**
 * Template file for the "cc_plugin" custom post type
 *
 * We do want the sidebar
 * 
 *
 * Found out how to do this from
 * {@link http://easywebdesigntutorials.com/custom-post-types-used-in-genesis-child-themes}
 * and using
 * genesis.wp-a2z.org
 * 
 */

add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_content_sidebar' );
remove_action( 'genesis_entry_footer', 'genesis_post_meta' );
//remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
//remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );
// what else?

genesis();
