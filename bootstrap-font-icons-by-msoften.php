<?php
/*
Plugin Name: Bootstrap font icons for WordPress Plugin.
Plugin URI: https://github.com/msoften/bootstrap-font-icons-for-wordpress-by-msoften
Description: Adds Bootstrap font icons 1.8.0 to WordPress.
Version: 1.0.0
Author: msoften
Author URI: https://github.com/msoften
*/


/**
 * Enqueues the Bootstrap Font Icons stylesheet on the front-end of the site.
 *
 * @since 1.0.0
 */
function bootstrap_font_icons()
{
	wp_enqueue_style('bootstrap-font-icons-by-msoften', plugins_url('bootstrap-icons.css', __FILE__));
}

add_action('wp_enqueue_scripts', 'bootstrap_font_icons');
?>