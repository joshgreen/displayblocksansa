<?php
/**
* Template name: Brands
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Display Block
 */

get_header(); ?>
<div class="site-brands">

  <!-- Page topper -->
  <div class="background-primary-grad">
    <div class="banner">
      <?php the_title( '<h1 class="center">', '</h1>' ); ?>
      <?php while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="intro thin-col"><?php the_content(); ?></div>
      </article>
      <?php endwhile; // end of the loop. ?>
    </div><!-- .banner -->
  </div>
  <!-- Page topper -->


<main>
    <div class="max">
      <ul id="BrandLogos" class="brand-items">


  <?php
      $args = array(
        'post_type' => 'brand_logos',
        'posts_per_page'         => '120'

      );
      $emaildesign = new WP_Query( $args );
      if( $emaildesign->have_posts() ) {
        while( $emaildesign->have_posts() ) {
          $emaildesign->the_post();
          ?>


            <li class="brand-single">

              <div class="brand-holder">

                <?php if( get_field('brand-logo') ): ?>

                  <img src="<?php the_field('brand-logo'); ?>" />

                <?php endif; ?>



              </div> <!-- . -->

            </li> <!-- .holder -->

          <?php
        }
      }
      else { echo 'Oh no API Integrations!!'; }
   ?>
   </ul>
   </div> <!-- .max -->
   </main> <!-- main -->
</div> <!-- .site-brands -->

<?php get_footer(); ?>