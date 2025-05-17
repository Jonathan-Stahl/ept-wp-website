<?php get_header(); ?>

<main class="category-archive">

  <h1>Category: <?php single_cat_title(); ?></h1>

  <?php 
  if ( have_posts() ) { 
  ?>
    <div class="posts-list">
      <?php 
      while ( have_posts() ) { 
        the_post(); 
      ?>
        <article class="post-item">

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
              <span>Categories: <?php the_category(', '); ?></span>
            </div>

            <p><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>

            <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
          </div>

        </article>
      <?php 
      } // end while
      ?>
    </div>

    <div class="pagination">
      <?php
      the_posts_pagination([
        'mid_size' => 2,
        'prev_text' => __('« Prev'),
        'next_text' => __('Next »'),
      ]);
      ?>
    </div>

  <?php 
  } else { 
  ?>
    <p>No posts found in this category.</p>
  <?php 
  } 
  ?>

</main>

<?php get_footer(); ?>
