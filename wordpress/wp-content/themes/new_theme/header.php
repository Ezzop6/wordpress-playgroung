<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<div id="root"></div>

<body <?php body_class(); ?>>
  <div class="main-menu-container">

    <?php if (function_exists('the_custom_logo')) {
      the_custom_logo();
    } ?>

    <?php wp_nav_menu(array(
      'theme_location' => 'primary',
      'container' => false,
      'menu_class' => 'main-menu',
    )); ?>
  </div>
