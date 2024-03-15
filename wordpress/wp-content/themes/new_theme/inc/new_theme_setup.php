<?php

/**
 * Add theme support
 */
function new_theme_setup() {
  add_theme_support('html5', array('search-form'));
  add_theme_support('menus');
  add_theme_support('custom-header');
  add_theme_support('post-thumbnails');
  add_theme_support('post-formats', array(
    'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'
  ));
  add_theme_support('custom-logo', array(
    'height'      => 100,
    'width'       => 200,
    'flex-height' => true,
    'flex-width'  => true,
  ));
  register_nav_menus(array(
    'primary' => 'Primary Menu',
    'footer' => 'Footer Menu',
  ));
  new_theme_register_background_images();
}
function new_theme_register_background_images() {
  function mytheme_customize_register($wp_customize) {
    $wp_customize->add_section('mytheme_background_images', array(
      'title'    => __('Background images', 'mytheme'),
      'priority' => 30,
    ));

    $wp_customize->add_setting('mytheme_background_image_left', array(
      'default'   => '',
      'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mytheme_background_image_left', array(
      'label'    => __('Left image', 'mytheme'),
      'section'  => 'mytheme_background_images',
      'settings' => 'mytheme_background_image_left',
    )));

    $wp_customize->add_setting('mytheme_background_image_right', array(
      'default'   => '',
      'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mytheme_background_image_right', array(
      'label'    => __('Right image', 'mytheme'),
      'section'  => 'mytheme_background_images',
      'settings' => 'mytheme_background_image_right',
    )));
  }
  add_action('customize_register', 'mytheme_customize_register');
  function mytheme_background_images_style() {
    $left_image = get_theme_mod('mytheme_background_image_left');
    $right_image = get_theme_mod('mytheme_background_image_right');
?>
    <style type="text/css">
      body::before,
      body::after {
        content: "";
        position: fixed;
        background-size: contain;
        background-repeat: no-repeat;
        width: 50%;
        height: 100%;
        top: 0;
        z-index: -1;
      }

      body::before {
        background-image: url('<?php echo esc_url($left_image); ?>');
        left: 0;
      }

      body::after {
        background-image: url('<?php echo esc_url($right_image); ?>');
        transform: translateX(145%);
      }
    </style>
<?php
  }
  add_action('wp_head', 'mytheme_background_images_style');
}
