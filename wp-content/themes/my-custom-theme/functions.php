<?php
// Enqueue the main stylesheet
function mytheme_enqueue_styles() {
  wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');

// Register navigation menus
function mytheme_register_menus() {
  register_nav_menus([
    'main-menu' => 'Main Navigation',
    'footer-menu' => 'Footer Menu',
  ]);
}
add_action('after_setup_theme', 'mytheme_register_menus');

function add_footer_menu_class($args) {
  if ($args['theme_location'] == 'footer-menu') {
      $args['menu_class'] = 'footer-links';
  }
  return $args;
}
add_filter('wp_nav_menu_args', 'add_footer_menu_class');
