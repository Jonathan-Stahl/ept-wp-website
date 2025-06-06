<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body <?php body_class(); ?>>

  <header>
    <h1><?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description'); ?></p>
  </header>

  <main>
    <?php
      if (have_posts()) :
        while (have_posts()) : the_post();
          the_title('<h2>', '</h2>');
          the_content();
        endwhile;
      else :
        echo '<p>No content found</p>';
      endif;
    ?>
  </main>

  <footer>
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
  </footer>

</body>