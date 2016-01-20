<?php
/**
 * @package theme-loader
 */
/*
Plugin Name: Dynamical Theme Loader
Plugin URI:
Description:
Version: 1.0
Author: Miles
Author URI:
*/

function change_theme()
{
    	return get_query_var('theme', 'skt-white');
}

add_filter('template', 'change_theme');
add_filter('option_template', 'change_theme');
add_filter('option_stylesheet', 'change_theme');

?>