<?php
/**
 * @package FlashProxy
 * @version 0.01
 */
/*
Plugin Name: FlashProxy
Plugin URI: http://wordpress.org/extend/plugins/FlashProxy/
Description: This plugin converts viewers of the webpage into TOR proxies.
Author: Marina Brown
Version: 0.01
Author URI: http://e271.net/~marina
*/

// This just echoes the chosen line, we'll position it later
function print_flashproxy() {
	echo '<iframe src="//crypto.stanford.edu/flashproxy/embed.html?cookierequired" width="80" height="15" frameborder="0" scrolling="no"></iframe>';
}

// Add print_flashproxy() to wp_footer
add_action( 'wp_footer', 'print_flashproxy' );

// We need some CSS to position the paragraph
function flashproxy_css() {
	// This makes sure that the positioning is also good for right-to-left languages
	$x = is_rtl() ? 'left' : 'right';

	echo "
	<style type='text/css'>
	#dolly {
		float: $x;
		padding-$x: 15px;
		padding-top: 5px;		
		margin: 0;
		font-size: 11px;
	}
	</style>
	";
}

add_action( 'wp_footer', 'flashproxy_css' );

?>
