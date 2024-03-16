<?php
class Tailwind_Nav_Walker extends Walker_Nav_Menu {
  public function start_lvl(&$output, $depth = 0, $args = null) {
    // Převedení stringu na třídy
    $class_names = isset($args->submenu_class) ? $args->submenu_class : '';
    $output .= "<ul class=\"" . esc_attr($class_names) . "\">";
  }

  public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
    $url = !empty($item->url) ? $item->url : '';

    // Zpracování stringu pro třídy <li>
    $li_class_names = isset($args->li_class) ? $args->li_class : '';
    $output .= "<li class=\"" . esc_attr($li_class_names) . "\">";

    // Zpracování stringu pro třídy <a>
    $a_class_names = isset($args->a_class) ? $args->a_class : '';
    $output .= '<a href="' . $url . '" class="' . esc_attr($a_class_names) . '">';
    $output .= $item->title;
    $output .= '</a>';
  }
}
