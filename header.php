<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?php wp_title(); ?> | <?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <div class="header-container">
    <div class="logo">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo du site.png" alt="Culture Connect Logo">
    </div>
    <nav>
      <ul>
        <li><a href="http://localhost:8888/wordpress-3/events/">Events</a>
        <li><a href="http://localhost:8888/wordpress-3/faq-page/">FAQ</a>
        <li><a href="http://localhost:8888/wordpress-3/about-us/">About Us</a>
      </ul>
    </nav>
  </div>
</header>
