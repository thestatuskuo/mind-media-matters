<?php
/**
 * Requires (pulls in) the initializing functions of Dynamik
 * which are found in the /lib/init.php file.
 *
 * @package Dynamik
 */
 
/**
 * Include Genesis theme files
 */
require_once( get_template_directory() . '/lib/init.php' );

/**
 * Include Dynamik theme files
 */
require_once( get_stylesheet_directory() . '/lib/init.php' );

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
//* Customize the entire footer
remove_action( 'genesis_footer', 'genesis_do_footer' );
add_action( 'genesis_footer', 'sp_custom_footer' );
function sp_custom_footer() {
	?>
	<p>&copy; Copyright 2015 <a href="http://exceptionallifeinstitute.com/">Exceptional Life Institute</a> &middot; All Rights Reserved</p>
	<?php
}
?>
