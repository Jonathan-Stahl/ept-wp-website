<?php
/* Template Name: Gallery Page */

get_header(); ?>
 <h1 class="gallery-h1"><?php the_title(); ?></h1>
<div class="gallery-container container">

  <div class="gallery-grid">
    <?php
    // Get the latest 20 image attachments
    $args = [
      'post_type'      => 'attachment',
      'post_mime_type' => 'image',
      'post_status'    => 'inherit',
      'posts_per_page' => 20,
    ];

    $images = new WP_Query($args);

    if ( $images->have_posts() ) :
      while ( $images->have_posts() ) : $images->the_post();
        $img_url = wp_get_attachment_image_url(get_the_ID(), 'large');
        $alt = get_post_meta(get_the_ID(), '_wp_attachment_image_alt', true);
        ?>
        <div class="gallery-item">
          <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($alt); ?>" />
        </div>
      <?php endwhile;
      wp_reset_postdata();
    else :
      echo '<p>No images found.</p>';
    endif;
    ?>
  </div>
</div>

<?php get_footer(); ?>