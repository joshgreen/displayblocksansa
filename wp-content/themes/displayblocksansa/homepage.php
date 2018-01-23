<?php
/**
* Template name: Home
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Display Block
 */

get_header(); ?>
  <div class="home-intro">
    <div class="home-banner">
      <h1>We’ll do your email marketing for you</h1>
      <h3>So you can get on with what matters – running your business.</h3>
      <p>Designing, previewing, testing and sending email campaigns can be time consuming and complicated. Even online tools that claim to make it easier take time to learn and mistakes can still happen. Why not let the email experts take care of all your email marketing for you. You send us what you would like to send and we do the rest.</p>
      <a href="/contact" class="button-darkblue-small">Contact us</a>
    </div> <!-- .home-intro -->
  </div> <!-- .banner -->

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">



      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'content', 'page' ); ?>

      <?php endwhile; // end of the loop. ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>