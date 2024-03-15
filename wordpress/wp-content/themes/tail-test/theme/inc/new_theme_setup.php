<?php

/**
 * Add theme support
 */
function new_theme_setup() {
  add_theme_support('html5', array('search-form'));
  add_theme_support('menus');
  add_theme_support('custom-background');
  add_theme_support('custom-header');
  add_theme_support('post-thumbnails');
  add_theme_support('post-formats', array(
    'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'
  ));
  register_nav_menus(array(
    'primary' => 'Primary Menu',
    'footer' => 'Footer Menu',
  ));
}
