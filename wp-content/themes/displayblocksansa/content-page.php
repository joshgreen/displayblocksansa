<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Display Block
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="inner">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div> <!-- .inner -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="inner">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'displayblock' ),
					'after'  => '</div>',
				) );
			?>
		</div> <!-- .inner -->
	</div><!-- .entry-content -->

</article><!-- #post-## -->
