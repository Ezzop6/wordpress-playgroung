<?php

/**
 * Enqueue theme css and js
 */
function new_theme_css_js_imports() {
  wp_enqueue_style('build_css_files', get_template_directory_uri() . '/dist/style.css', array(), '1.0.0', 'all');
  wp_enqueue_script('build_js_files', get_template_directory_uri() . '/dist/bundle.js', array(), '1.0.0', true);
}
