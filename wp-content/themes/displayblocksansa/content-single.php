<?php
/**
 * @package Display Block
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="inner">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

			<div class="entry-meta">
				<?php displayblock_posted_on(); ?>
			</div><!-- .entry-meta -->
		</div> <!-- .inner -->
	</header><!-- .entry-header -->

	<div class="entry-image">
		<div class="inner">
			<?php
				    if (has_post_thumbnail()) {
				        echo '<div class="single-post-thumbnail clear">';
				        echo the_post_thumbnail('large-thumb');
				        echo '</div>';
				    }
				?>
		</div> <!-- .inner -->
	</div> <!-- .entry-image -->

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

	<footer class="entry-contact">
		<div class="inner">
			<?php edit_post_link( __( 'Edit', 'displayblock' ), '<span class="edit-link">', '</span>' ); ?>
		</div> <!-- .inner -->
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
