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
