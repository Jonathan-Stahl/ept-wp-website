<?php get_header(); ?>

<main class="contact-page container">
  <section class="contact-intro">
    <h1 class="contact-intro-h1">Contact Us</h1>
    <p>Have a question, comment, or project idea? We'd love to hear from you. Fill out the form below and we'll get back to you as soon as we can.</p>
  </section>

  <section class="contact-form-section">
    <form class="contact-form" action="#" method="post">
      <div class="form-group">
        <label for="name">Your Name</label>
        <input type="text" id="name" name="name" required />
      </div>

      <div class="form-group">
        <label for="email">Your Email</label>
        <input type="email" id="email" name="email" required />
      </div>

      <div class="form-group">
        <label for="message">Your Message</label>
        <textarea id="message" name="message" rows="6" required></textarea>
      </div>

      <button type="submit" class="submit-btn">Send Message</button>
    </form>
  </section>
  <section class="find-us-section">
  <h2>Find Us Here</h2>
  <div class="locations-grid">
    <div class="location-card">
      <h3>Sydney Office</h3>
      <p>123 Harbour Street, Sydney NSW 2000</p>
      <iframe 
        src="https://www.google.com/maps?q=Sydney+Opera+House&output=embed"
        width="100%" height="200" style="border:0;" allowfullscreen loading="lazy"></iframe>
    </div>

    <div class="location-card">
      <h3>Melbourne Office</h3>
      <p>456 Collins Street, Melbourne VIC 3000</p>
      <iframe 
        src="https://www.google.com/maps?q=Flinders+Street+Station+Melbourne&output=embed"
        width="100%" height="200" style="border:0;" allowfullscreen loading="lazy"></iframe>
    </div>

    <div class="location-card">
      <h3>Brisbane Office</h3>
      <p>789 Queen Street, Brisbane QLD 4000</p>
      <iframe 
        src="https://www.google.com/maps?q=South+Bank+Brisbane&output=embed"
        width="100%" height="200" style="border:0;" allowfullscreen loading="lazy"></iframe>
    </div>
  </div>
</section>

</main>

<?php get_footer(); ?>
