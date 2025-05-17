<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
  <div class="container">
    <h1 class="logo">
      <a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
    </h1>
    <nav class="site-nav">
      <?php
        wp_nav_menu([
          'theme_location' => 'main-menu',
          'menu_class' => 'nav-links'
        ]);
      ?>
    </nav>
  </div>
</header>
