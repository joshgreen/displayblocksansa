<?php
/**
* Template name: FAQ
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site will use a
* different template.
*
* @package Display Block
*/
get_header(); ?>
  <div class="max">
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
<div class="inner">

  <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'content', 'page' ); ?>

      <?php endwhile; // end of the loop. ?>
</div>


    </main><!-- #main -->
  </div><!-- #primary -->
  </div>
<?php get_footer(); ?>