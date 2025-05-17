<?php
get_header();
?>

<div class="blog-container">
  <h1>Blog</h1>

  <?php
  $categories = get_categories([
    'orderby' => 'name',
    'order'   => 'ASC',
  ]);

  foreach ($categories as $category) :
    $args = [
      'category_name' => $category->slug,
      'posts_per_page' => -1,
    ];
    $posts = new WP_Query($args);
    if ($posts->have_posts()) :
  ?>

    <section class="blog-category">
      <h2><?php echo esc_html($category->name); ?></h2>
      <div class="blog-grid">
        <?php while ($posts->have_posts()) : $posts->the_post(); ?>
          <article class="blog-card">
          <?php if ( has_post_thumbnail() ) { ?>
            <a href="<?php the_permalink(); ?>" class="post-thumb-link">
              <?php the_post_thumbnail('medium'); ?>
            </a>
          <?php } ?>

          <div class="post-text">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

            <div class="post-meta">
              <span><?php echo get_the_date(); ?></span> |
              <span><?php the_author(); ?></span> |
            </div>
            <!-- Image placeholder for now -->
            <!-- You can add the_post_thumbnail() later -->
            <a href="<?php the_permalink(); ?>" class="read-more-btn">Read More</a>

          </article>
        <?php endwhile; ?>
      </div>
    </section>

  <?php
    endif;
    wp_reset_postdata();
  endforeach;
  ?>
</div>

<?php
get_footer();
