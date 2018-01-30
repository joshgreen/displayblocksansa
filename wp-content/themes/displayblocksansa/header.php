<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Display Block
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php if (function_exists('is_tag') && is_tag()) {echo 'Tag Archive for &quot;'.$tag.'&quot; - ';} elseif (is_archive()) {wp_title('|', true, 'right'); echo '| Archive';} elseif (is_search()) {echo 'Search for &quot;'.wp_specialchars($s).'&quot; - ';} elseif (is_page_template( 'homepage.php' ) ) {echo  bloginfo('name');} elseif (is_home()) {echo ('display block | Blog');} elseif (!(is_404()) && (is_single()) || (is_page())) {wp_title('|', true, 'right');} elseif (is_404()) {echo 'Not Found - display block';}?></title>

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="<?php echo esc_url( home_url( '/' ) ); ?>site-images/favicon.ico">
<link rel="apple-touch-icon" href="<?php echo esc_url( home_url( '/' ) ); ?>site-images/apple-touch-icon-precomposed.png">


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site wrapper">
    <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'displayblock' ); ?></a>

    <header id="masthead" class="site-header" role="banner">
      <div id="siteNotification" class="site-notification">
        <!-- <span>We’re looking for a junior designer to join our team <a href="" class="button-blue-small">View job description</a> <span class="note bluetext">( you need to ❤️ Email )</span></span> -->
        <span>Come join us for marketing meet & greet <a href="" class="button-blue-small">Attend event</a> <span class="note bluetext">( learn all about modern email )</span></span>
      </div>

      <div class="max">
        <div class="lay-head">
          <div class="site-branding">
            <h1 id="maintitle" class="site-title">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"  alt="<?php bloginfo( 'name' ); ?>">
                  <img src="<?php bloginfo('template_url'); ?>/images/logo.svg" alt="">
                  <div class="note bluetext">
                    We’re an Email Marketing Agency
                  </div>
                  <?php if ( is_home() || is_front_page() ) : ?><span class="pointmark"></span><?php endif ?>
              </a></h1>



          </div> <!-- .site-branding -->

          <nav id="site-navigation" class="site-navigation" role="navigation">
            <button class="menu-toggle"><span></span></button>
            <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
          </nav> <!-- #site-navigation -->
        </div> <!-- .lay-head -->

      </div>



    </header><!-- #masthead -->

    <div id="content" class="site-content">

