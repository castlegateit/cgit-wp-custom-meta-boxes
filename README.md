# Castlegate IT WP Custom Meta Boxes #

A plugin providing two convenient functions to access custom field values:

*   `get_field($field, $post_id, $single)` returns the value of `$field` for the page or post with the ID `$post_id`. If no ID is specified, the current post ID is used. If `$single` is true, the function returns a single value; if it is false, the function returns an array of values.
*   `the_field($field, $post_id, $single)` prints the value of `$field`, using the same parameters as `get_field()`.

The plugin should work with standard custom fields and [Human Made Custom Meta Boxes](https://github.com/humanmade/Custom-Meta-Boxes). Please refer to the [original documentation](https://github.com/humanmade/Custom-Meta-Boxes/wiki) for information about defining and using fields.
