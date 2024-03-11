<?php

/**
 * Register a custom post type called $name.
 * @param string $name
 * @param int $menu_position
 */
function new_post_type(
  string $name,
  int $menu_position = 4
) {
  $labels = array(
    'name' => $name,
    'singular_name' => $name,
    'add_new' => "Add New $name",
    'add_new_item' => "Add New $name",
    'edit_item' => "Edit $name",
    'new_item' => "New $name",
    'view_item' => "View $name",
    'search_items' => "Search $name",
    'not_found' => "No $name found",
    'not_found_in_trash' => "No $name found in Trash",
    'parent_item_colon' => "Parent $name",
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'has_archive' => true,
    'publicly_queryable' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'show_in_rest' => true,
    'supports' => array(
      'title',
      'editor',
      'excerpt',
      'thumbnail',
      'custom-fields',
    ),
    'taxonomies' => array('category', 'post_tag'),
    'menu_position' => $menu_position,
    'exclude_from_search' => false
  );
  $slug = strtolower(str_replace(' ', '-', $name));
  register_post_type($slug, $args);
}
