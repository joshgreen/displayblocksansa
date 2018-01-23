<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Display Block
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'displayblock' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p>
						<img src="<?php bloginfo('template_url'); ?>/images/404.png" alt="<?php bloginfo( 'name' ); ?>">
					</p>
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'displayblock' ); ?></p>

					<?php get_search_form(); ?>

					<?php
						/* translators: %1$s: smiley */
						$archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'displayblock' ), convert_smilies( ':)' ) ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>