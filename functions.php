<?php
function portfolio_theme_setup() {
  add_theme_support('title-tag');
  add_theme_support('menus');
}
add_action('after_setup_theme', 'portfolio_theme_setup');

function portfolio_theme_scripts() {
  wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.css');
  wp_enqueue_style('card-animation', get_template_directory_uri() . '/assets/css/card-animation.css');
  wp_enqueue_style('project-animation', get_template_directory_uri() . '/assets/css/project-animation.css');
  wp_enqueue_script('main-script', get_template_directory_uri() . '/skrypt.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'portfolio_theme_scripts');
