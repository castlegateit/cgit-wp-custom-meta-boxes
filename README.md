# Castlegate IT WP Custom Meta Boxes #

A plugin wrapper for [Human Made Custom Meta Boxes](https://github.com/humanmade/Custom-Meta-Boxes), which provides a simple framework for adding custom fields to WordPress. It provides two convenient functions to access field values:

## Installation

[Human Made Custom Meta Boxes](https://github.com/humanmade/Custom-Meta-Boxes) must be installed prior to installing this plugin. Downloading Custom Meta Boxes directly from GitHub may result in the plugin being installed to `plugins/Custom-Meta-Boxes-master`. In order for this plugin to activate correctly, Custom Meta Boxes must be installed
at `plugins/custom-meta-boxes`.

## Usage

*   `get_field($field, $post_id, $single)` returns the value of `$field` for the page or post with the ID `$post_id`. If no ID is specified, the current post ID is used. If `$single` is true, the function returns a single value; if it is false, the function returns an array of values.
*   `the_field($field, $post_id, $single)` prints the value of `$field`, using the same parameters as `get_field()`.

Please refer to the [original documentation](https://github.com/humanmade/Custom-Meta-Boxes/wiki) for information about defining and using fields.
