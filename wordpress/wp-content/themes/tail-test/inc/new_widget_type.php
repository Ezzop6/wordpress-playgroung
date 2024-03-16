<?php

/**
 * Register a new sidebar widget
 */
function new_sidebar_widget() {
  register_sidebar(
    array(
      'name'  => 'Sidebar',
      'id'  => 'sidebar',
      'class'  => 'custom sidebar',
      'description' => 'Standard Sidebar v2',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h1 class="widget-title">',
      'after_title'   => '</h1>',
    )
  );
}

function new_contact_widget() {
  register_sidebar(
    array(
      'name'  => 'footer-contact',
      'id'  => 'footer-contact',
      'class'  => 'custom contact',
      'description' => 'Contact Sidebar',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h1 class="widget-title">',
      'after_title'   => '</h1>',
    )
  );
}
