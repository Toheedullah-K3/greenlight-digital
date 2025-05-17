<?php
/*
Template Name: Landing Page
*/
get_header(); ?>

<section class="hero-section">
  <div class="hero-content">
    <h1><?php the_field('hero_title'); ?></h1>
    <p class="hero-subtitle"><?php the_field('hero_subtitle'); ?></p>
    <p class="hero-description"><?php the_field('hero_description'); ?></p>
    <p class="talk-to-us"><?php the_field('talk_to_us_line'); ?></p>
    
    <div class="hero-buttons">
      <?php if (get_field('hero_button_url')) : ?>
        <a href="<?php the_field('hero_button_url'); ?>" class="btn btn-primary">
          <?php the_field('hero_button'); ?>
        </a>
      <?php endif; ?>
      <a href="#contact" class="btn btn-secondary">
        <?php the_field('contact_button'); ?>
      </a>
    </div>
  </div>

  <div class="hero-image">
    <?php 
      $image = get_field('hero_image');
      if ($image): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
    <?php endif; ?>
  </div>
</section>


<section class="our-websites">
  <div class="websites-header">
    <h2>Our Websites</h2>
    <a href="#contact" class="btn btn-primary websites-btn">
        <?php the_field('more_websites'); ?>
    </a>
  </div>
  <div class="websites-list">
    <?php if (have_rows('our_websites')) : ?>
      <?php while (have_rows('our_websites')) : the_row(); 
        $image = get_sub_field('website_image');
        $title = get_sub_field('website_title');
        $category = get_sub_field('website_category');
        $link = get_sub_field('website_link');
      ?>
        <a href="<?php echo esc_url($link); ?>" class="website-card" target="_blank" rel="noopener">
          <?php if ($image) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
          <?php endif; ?>
          <h3><?php echo esc_html($title); ?></h3>
          <p><?php echo esc_html($category); ?></p>
        </a>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>


<section class="how-section">
  <div class="how-container">
    
    <!-- Left Column -->
    <div class="how-left">
    <div class="how-left-bg"></div>
      <?php 
        $left_img = get_field('how_left_image');
        if ($left_img): ?>
          <img src="<?php echo esc_url($left_img['url']); ?>" alt="<?php echo esc_attr($left_img['alt']); ?>">
      <?php endif; ?>
    </div>

    <!-- Right Column -->
    <div class="how-right">
      <h2><?php the_field('how_it_works_title'); ?></h2>
      <h3><?php the_field('how_it_works_subtitle'); ?></h3>

      <div class="how-right-content">
        <?php 
        $step_img = get_field('how_step_image');
        if ($step_img): ?>
          <img class="step-image" src="<?php echo esc_url($step_img['url']); ?>" alt="<?php echo esc_attr($step_img['alt']); ?>">
      <?php endif; ?>

      <div class="step-points">
        <?php if (have_rows('how_steps')): ?>
          <?php while (have_rows('how_steps')): the_row(); ?>
            <div class="step-item">
              <h4><?php the_sub_field('steps_title'); ?></h4>
              <p><?php the_sub_field('steps_description'); ?></p>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
    <a href="#" class="btn"><?php the_field('how_cta_button'); ?></a>

      
    </div>

  </div>
</section>

<section class="find-more-section">
  <div class="solid-background"></div>

  <?php 
    $image = get_field('find_more_image');
    if ($image): ?>
      <img class="background-image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
  <?php endif; ?>
  
  <div class="find-more-container">
    <div class="find-more-right">
      <h2><?php the_field('find_more_total'); ?></h2>
      <div class="description">
        <?php the_field('find_more_description'); ?>
      </div>
      <a href="#" class="btn"><?php the_field('find_more_button'); ?></a>
      <a href="#" class="find-more-secondary-btn"><?php the_field('how_cta_button'); ?></a>
    </div>
  </div>
</section>


<section class="what-to-expect">
  <h3 class="what-to-expect-main-title">HERE’S WHAT TO EXPECT:</h3>

  <?php if( have_rows('what-to-expect') ): ?>
    <?php while( have_rows('what-to-expect') ): the_row(); 
      $icon = get_sub_field('what-to-expect-img');
      $title = get_sub_field('what_to_expect_title');
      $description = get_sub_field('what_to_expect_description');
    ?>
      <div class="expect-box">
        <div class="icon">
          <?php if ($icon): ?>
            <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>">
          <?php endif; ?>
        </div>
        <div class="text">
          <h4><?php echo esc_html($title); ?></h4>
          <p><?php echo esc_html($description); ?></p>
        </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</section>


<section class="founder-section">
  <div class="founder-container">
    
    <div class="founder-image">
      <?php 
        $image = get_field('founder_image'); 
        if ($image): ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
      <?php endif; ?>
    </div>

    <div class="founder-content">
      <?php if ($tag = get_field('founder-tag')): ?>
        <span class="founder-tag"><?php echo esc_html($tag); ?></span>
      <?php endif; ?>

      <?php if ($heading = get_field('founder_heading')): ?>
        <h2><?php echo esc_html($heading); ?></h2>
      <?php endif; ?>

      <?php if ($text = get_field('founder_text')): ?>
        <div class="founder-text"><?php echo $text; ?></div>
      <?php endif; ?>

      <div class="founder-details">
        <div>
          <?php if ($name = get_field('founder_name')): ?>
        <div class="founder-name"><?php echo esc_html($name); ?></div>
      <?php endif; ?>

      <?php if ($details = get_field('founder_details')): ?>
        <div class="founder_details"><?php echo esc_html($details); ?></div>
      <?php endif; ?>
        </div>

      <?php if ($button = get_field('founder_button')): ?>
        <a href="#" class="founder-btn"><?php echo esc_html($button); ?></a>
      <?php endif; ?>
      </div>
    </div>
    
  </div>
</section>



<section class="giving-back-section">
  <div class="container">
    <div>
      <div class="giving-back-header">
      <h2><?php the_field('giving_back_section_title'); ?></h2>
      <p><?php the_field('giving_back_section_desc'); ?></p>
      <?php 
        $button_text = get_field('giving_back_button_text');
        $button_link = get_field('giving_back_button_link');
        if ($button_text): ?>
          <a href="<?php echo esc_url($button_link); ?>" class="giving-back-btn">
            <?php echo esc_html($button_text); ?>
          </a>
      <?php endif; ?>
    </div>

    <div class="giving-back-items">
      <?php if (have_rows('giving_back_items')): ?>
        <?php while (have_rows('giving_back_items')): the_row(); 
          $image = get_sub_field('giving_back_image');
          $title = get_sub_field('item_title');
          $desc = get_sub_field('item_description');
        ?>
          <div class="giving-back-card">
            <?php if ($image): ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
            <h4><?php echo esc_html($title); ?></h4>
            <p><?php echo esc_html($desc); ?></p>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>
