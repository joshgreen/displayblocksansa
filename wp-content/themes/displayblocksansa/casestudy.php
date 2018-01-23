<?php
/**
 * Template name: Case Study
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Display Block
 */

get_header(); ?>

	<div id="primary">
		<main role="main" class="case-study">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'casestudy' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
