<?php
/**
* Template name: Email-designs
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
<div class="image portfolio-hero">
    <div class="grad">
        <div class="icons">

        </div>
    </div>
</div>


<div class="max">


  <div class="inner">
    <div class="entry-content">

     <h1 class="center">Email Designs</h1>

    <?php while ( have_posts() ) : the_post(); ?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php the_content(); ?>
</article>
<?php endwhile; // end of the loop. ?>
  </div><!-- .entry-content -->
  </div>


          <div role="main">
          <ul id="emailItems" class="email-design">


  <?php
      $args = array(
        'post_type' => 'emaildesign',
        'posts_per_page'         => '40'

      );
      $emaildesign = new WP_Query( $args );
      if( $emaildesign->have_posts() ) {
        while( $emaildesign->have_posts() ) {
          $emaildesign->the_post();
          ?>


            <li class="holder">
              <div class="email-design-main">
              <?php

              $image = get_field('email_image');

                if( !empty($image) ): ?>

              <a href="<?php echo $image['url']; ?>">

                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="animated fadeIn" />

              <?php endif; ?>
              </a>



            </div> <!-- .email-design-main -->
            </li> <!-- .holder -->

          <?php
        }
      }
      else { echo 'Oh no Email designs!'; }
   ?>
   </ul>
   </div> <!-- .main -->
</div> <!-- .max -->

<?php get_footer(); ?>