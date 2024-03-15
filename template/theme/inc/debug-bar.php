<?php
function add_template_info($admin_bar) {
  global $template;
  $basename = basename($template);
  $page_type  = wpse8170_loop();
  $admin_bar->add_menu(array(
    'id'    => 'template-info',
    'title' => "<p class='custom-admin-info'>Template: $basename | Page Type: $page_type</p>",
    'href'  => '#',
    'meta'  => array(
      'title' => __('Template Info'),
    ),
  ));
}
function wpse8170_loop() { // WTF is this? https://wordpress.stackexchange.com/questions/83887/return-current-page-type
  global $wp_query;
  $loop = 'not found other type';

  if ($wp_query->is_page) {
    $loop = is_front_page() ? 'front-page' : 'page';
  } elseif ($wp_query->is_home) {
    $loop = 'home';
  } elseif ($wp_query->is_single) {
    $loop = ($wp_query->is_attachment) ? 'attachment' : 'single';
  } elseif ($wp_query->is_category) {
    $loop = 'category';
  } elseif ($wp_query->is_tag) {
    $loop = 'tag';
  } elseif ($wp_query->is_tax) {
    $loop = 'tax';
  } elseif ($wp_query->is_archive) {
    if ($wp_query->is_day) {
      $loop = 'day';
    } elseif ($wp_query->is_month) {
      $loop = 'month';
    } elseif ($wp_query->is_year) {
      $loop = 'year';
    } elseif ($wp_query->is_author) {
      $loop = 'author';
    } else {
      $loop = 'archive';
    }
  } elseif ($wp_query->is_search) {
    $loop = 'search';
  } elseif ($wp_query->is_404) {
    $loop = 'not found 404';
  }

  return $loop;
}
