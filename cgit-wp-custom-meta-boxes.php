<?php

/*

Plugin Name: Castlegate IT WP Custom Meta Boxes
Plugin URI: http://github.com/castlegateit/cgit-wp-custom-meta-boxes
Description: Plugin wrapper for Human Made Custom Meta Boxes.
Version: 1.0
Author: Castlegate IT
Author URI: http://www.castlegateit.co.uk/
License: MIT

*/

/**
 * Activation hook
 *
 * Check that the custom meta boxes plugin is installed before activation.
 */
function activate()
{
    if (!is_plugin_active('custom-meta-boxes/custom-meta-boxes.php')) {

        $message = 'This plugin requires the <code>custom meta boxes</code> ';
        $message.= ' plugin. Please ';
        $message.= 'ensure you\'ve installed it in the correct location: <code>';
        $message.= 'plugins/custom-meta-boxes</code><br /><br />When ';
        $message.= 'download via GitHub\'s web interface, the installation ';
        $message.= 'directory may be <code>plugins/Custom-Meta-Boxes-master';
        $message.=  '</code>. Be sure to remove <code>master</code> from the ';
        $message.= 'directory and convert to lower case.<br /><br />Download ';
        $message.= 'from <a target="_blank" href="https://github.com/humanmade';
        $message.= '/Custom-Meta-Boxes">GitHub</a>';
        wp_die($message);
    }
}
register_activation_hook(__FILE__, 'activate');

/**
 * Include the custom meta boxes plugin
 */
if (file_exists('custom-meta-boxes/custom-meta-boxes.php')) {
    require_once('custom-meta-boxes/custom-meta-boxes.php');
}

/**
 * Get field value
 *
 * Provides a convenient way of accessing CMB field values, based on the
 * Advanced Custom Fields. Uses the current post ID by default (if available);
 * returns FALSE if post ID is not set.
 */
function get_field ($field, $post_id = FALSE, $single = TRUE) {

    if ( ! $post_id ) {

        global $post;

        if ( isset($post) ) {
            $post_id = $post->ID;
        } else {
            return FALSE;
        }

    }

    return get_post_meta($post_id, $field, $single);

}

/**
 * Print field value
 */
function the_field ($field, $post_id = FALSE, $single = TRUE) {
    echo get_field($field, $post_id, $single);
}
