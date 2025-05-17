<?php get_header(); ?>

<main class="homepage">

  <!-- Hero -->
  <header class="hero-header">
  <div class="hero-overlay">
    <h1>Welcome to Our Website</h1>
    <p>Your one-stop destination for creativity, stories, and inspiration.</p>
  </div>
</header>

  <!-- About Preview -->
  <section class="about-preview">
    <h2>About Me</h2>
    <p class="skinnier">I'm a passionate and detail-oriented designer with a love for creating intuitive, visually engaging websites. I enjoy turning ideas into interactive digital experiences that are both functional and beautiful. With a strong focus on user experience, I strive to design with purpose, clarity, and creativity in every project I take on.</p>
    <a href="<?php echo site_url('/about'); ?>" class="btn small">Read More</a>
  </section>

  <!-- Gallery Preview -->
  <section class="home-gallery-preview">
    <h2>Gallery Highlights</h2>
    <div class="home-gallery-grid">
      <?php
        $images = get_posts([
          'post_type' => 'attachment',
          'post_mime_type' => 'image',
          'posts_per_page' => 4,
          'post_status' => 'inherit',
        ]);
        foreach ($images as $img) :
          $img_url = wp_get_attachment_image_url($img->ID, 'medium');
      ?>
        <img src="<?php echo esc_url($img_url); ?>" alt="">
      <?php endforeach; ?>
    </div>
    <a href="<?php echo site_url('/gallery'); ?>" class="btn small">View Full Gallery</a>
  </section>

  <!-- Blog Preview -->
  <section class="blog-preview">
    <h2>Latest Blog Posts</h2>
    <div class="blog-grid">
      <?php
        $latest_posts = new WP_Query([
          'post_type' => 'post',
          'posts_per_page' => 3,
        ]);
        while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
          <article class="blog-card">
            <h3><?php the_title(); ?></h3>
            <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn tiny">Read More</a>
          </article>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>
    <a href="<?php echo site_url('/blog'); ?>" class="btn small">See All Posts</a>
  </section>

  <!-- Contact CTA -->
  <section class="contact-cta">
    <h2>Let’s Connect</h2>
    <p>Have questions or want to work together?</p>
    <a href="<?php echo site_url('/contact'); ?>" class="btn">Contact Me</a>
  </section>

</main>

<?php get_footer(); ?>
