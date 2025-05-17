<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="main-header">
  <div class="header-container">
    <!-- Logo -->
    <div class="logo">
      <?php 
        $logo = get_field('header_logo', 'option');
        if ($logo): ?>
          <a href="<?php echo esc_url(home_url()); ?>">
            <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>">
          </a>
      <?php endif; ?>
    </div>

    <!-- Navigation -->
    <nav class="main-nav">
      <?php
        wp_nav_menu(array(
          'theme_location' => 'primary',
          'menu_class' => 'nav-links',
          'container' => false
        ));
      ?>

    </nav>

    <!-- Button -->
    <div class="header-btn">
      <a href="<?php the_field('header_button_url', 'option'); ?>" class="btn btn-primary">
        <?php the_field('header_button_text', 'option'); ?>
      </a>
    </div>
 
    <!-- Mobile Toggle -->
    <div class="menu-toggle" id="menu-toggle">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
</header>
