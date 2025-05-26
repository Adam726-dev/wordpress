<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <nav>
    <h2>Portfolio</h2>
    <?php wp_nav_menu(['theme_location' => 'main-menu']); ?>
    <button onclick="alert('Klik')">Contact Me</button>
    <div id="progress" role="progressbar" aria-label="progress"></div>
    <div class="hamburger" onclick="toggleMenu()">☰</div>
  </nav>
