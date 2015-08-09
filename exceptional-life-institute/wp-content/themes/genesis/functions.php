<?php
/*
 WARNING: This file is part of the core Genesis Framework. DO NOT edit
 this file under any circumstances. Please do all modifications
 in the form of a child theme.
 */

/**
 * This file calls the init.php file, but only
 * if the child theme hasn't called it first.
 *
 * This method allows the child theme to load
 * the framework so it can use the framework
 * components immediately.
 *
 * This file is a core Genesis file and should not be edited.
 *
 * @category Genesis
 * @package  Templates
 * @author   StudioPress
 * @license  GPL-2.0+
 * @link     http://my.studiopress.com/themes/genesis
 */

require_once( dirname( __FILE__ ) . '/lib/init.php' );

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
