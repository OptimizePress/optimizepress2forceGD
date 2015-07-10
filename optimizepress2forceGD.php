<?php

/*
Plugin Name: OptimizePress 2 force GD
Plugin URI: http://www.optimizepress.com
Description: This plugin forces GD extension for image manipulation, usefull when content templates reset returns 500 Internal Server Errors
Version: 1.0
Author: Zvonko Biskup
Author URI: http://www.optimizepress.com
*/

function op_image_editor_default_to_gd( $editors ) {
        $gd_editor = 'WP_Image_Editor_GD';

        $editors = array_diff( $editors, array( $gd_editor ) );
        array_unshift( $editors, $gd_editor );

        return $editors;
}
add_filter( 'wp_image_editors', 'op_image_editor_default_to_gd' );