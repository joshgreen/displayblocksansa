<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Display Block
 */

get_header(); ?>
<div class="powder">

  <div class="email-design-single">
    <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'content', 'email' ); ?>

    <?php endwhile; // end of the loop. ?>
  </div>
  <div class="banner">
    <a href="/email-designs" class="button-blue">Back to Email Designs</a>
  </div>

</div> <!-- .powder -->
<?php get_footer(); ?>