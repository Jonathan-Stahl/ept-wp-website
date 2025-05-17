<footer class="site-footer">
  <div class="container">
    <div class="footer-left">
      <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
    </div>
    
    <div class="footer-middle">
      <nav class="footer-nav">
        <?php
          wp_nav_menu([
            'theme_location' => 'footer-menu',
            'menu_class' => 'footer-links',
          ]);
        ?>
      </nav>
    </div>
    
    <div class="footer-social">
      <a href="https://facebook.com" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
      <a href="https://twitter.com" target="_blank" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
      <a href="https://instagram.com" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
      <a href="https://linkedin.com" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
