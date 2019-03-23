<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes"/>
  <meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
  <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() . '/img/favicon.ico' ); ?>" type="image/x-icon">
  <link rel="icon" href="<?php echo esc_url( get_template_directory_uri() . '/img/favicon.ico' ); ?>" type="image/x-icon">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> id="top">
<div class="wrapper">
  <header class="header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <?php if ( has_custom_logo() ) {
            the_custom_logo();
          } else { ?>
            <a class="logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">
              <img class="logo-img" src="<?php echo esc_url( get_template_directory_uri() . '/img/logo.png' ); ?>" alt="<?php bloginfo('name'); ?>">
            </a>
          <?php } ?>
          <span class="header-details is-left"><?php _e('Официальный дистрибьютор<br>в Казахстане', 'brainworks'); ?></span>
        </div>
        <div class="col-xs-12 col-sm-6 text-right">
          <img class="header-abet" src="<?php echo esc_url(get_template_directory_uri() . '/img/abet-laminati.png')?>" alt="<?php _e('Abet laminati. Unlimited selection'); ?>">
          <span class="header-details is-right"><?php _e('Производитель<br>HPL панелей<br>в Италии<br>основан в 1957 г.', 'brainworks'); ?></span>
        </div>
      </div>
    </div>
  </header>
  <nav class="main-nav">
    <div class="container">
      <?php wp_nav_menu( array(
        'theme_location' => 'main-nav',
        'menu'           => '',
        'container'      => false,
        'menu_class'     => 'menu-container',
        'echo'           => true,
        'fallback_cb'    => 'wp_page_menu',
        'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'depth'          => 3
      ) ); ?>
    </div>
  </nav>

  <div class="page-wrapper">

