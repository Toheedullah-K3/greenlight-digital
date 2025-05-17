<!-- Custom Footer Section Start -->
<section class="custom-footer-section">
  <div class="footer-container">

    <!-- Left Side -->
    <div class="footer-left">
      <h2><?php the_field('footer_heading', 'option'); ?></h2>
      <div class="footer-description">
        <?php the_field('footer_description', 'option'); ?>
      </div>

      <div class="footer-contact-info">
  <p>
    <i class="fas fa-envelope"></i>
    <a href="mailto:<?php echo esc_attr(get_field('footer_email', 'option')); ?>">
      <?php echo esc_html(get_field('footer_email', 'option')); ?>
    </a>
  </p>

  <p>
    <i class="fas fa-phone-alt"></i> 
    <a href="tel:<?php echo esc_attr(get_field('footer_phone', 'option')); ?>">
      <?php echo esc_html(get_field('footer_phone', 'option')); ?>
    </a>
  </p>

  <p>
    <i class="fas fa-map-marker-alt"></i>
    <?php echo nl2br(esc_html(get_field('footer_address', 'option'))); ?>
  </p>
</div>


      <?php if( have_rows('footer_social_icons', 'option') ): ?>
  <div class="footer-social-icons">
    <?php while( have_rows('footer_social_icons', 'option') ): the_row(); 
      $icon_image = get_sub_field('icon_image'); // image array
      $social_link = get_sub_field('icon_link'); // URL
    ?>
      <?php if( $icon_image ): ?>
        <a href="<?php echo esc_url($social_link); ?>" target="_blank" rel="noopener noreferrer" class="social-icon">
          <img src="<?php echo esc_url($icon_image['url']); ?>" alt="<?php echo esc_attr($icon_image['alt']); ?>" />
        </a>
      <?php endif; ?>
    <?php endwhile; ?>
  </div>
<?php endif; ?>

    </div>

    <!-- Right Side: Contact Form -->
    <div class="footer-right">
      <form class="footer-form">
        <div class="form-left">
          <label>Name <span class= "label-mark">*</span></label>

          <input type="text" required>

          <label>Email <span class= "label-mark">*</span></label>
          <input type="email" required>

          <label>Telephone <span class= "label-mark">*</span></label>
          <input type="text" required>
        </div>
        <div class="form-right">
          <label>Message <span class= "label-mark">*</span></label>
          <textarea rows="6" required></textarea>
          <button class="form-submit-btn" type="submit">Submit</button>
        </div>
      </form>
    </div>

  </div>
</section>
<!-- Custom Footer Section End -->
