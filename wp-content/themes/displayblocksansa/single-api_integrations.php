<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Display Block
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

    <div class="inner">
      <?php displayblock_post_nav(); ?>
    </div> <!-- .inner -->


		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>