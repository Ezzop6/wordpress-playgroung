<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<div id="root"></div>

<body <?php body_class("flex flex-col min-h-screen"); ?>>
  <header class="header-container">

    <?php the_custom_logo() ?>

    <?php get_template_part('components/search-bar') ?>

    <?php wp_nav_menu(array(
      'theme_location' => 'primary',
      'container' => false,
      'menu_class' => '',
      'walker' => new Tailwind_Nav_Walker(),
      'submenu_class' => 'group-hover:block absolute',
      'li_class' => 'relative group',
      'a_class' => 'btn',
    )); ?>

  </header>
