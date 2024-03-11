<?php
require_once get_template_directory() . '/inc/new_post_type.php';
require_once get_template_directory() . '/inc/new_widget_type.php';
require_once get_template_directory() . '/inc/new_theme_setup.php';
require_once get_template_directory() . '/inc/new_theme_css_js_imports.php';
require_once get_template_directory() . '/inc/unsorted_scripts.php';

add_filter('the_generator', function () {
  wp_head_remove_version();
});

add_action('wp_enqueue_scripts', function () {
  new_theme_css_js_imports();
});

add_action('after_setup_theme', function () {
  new_theme_setup();
});

add_action('widgets_init', function () {
  new_sidebar_widget();
});

add_action('init', function () {
  new_post_type('Portfolio');
});
