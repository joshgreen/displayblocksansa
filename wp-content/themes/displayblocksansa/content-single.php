<?php
/**
 * @package Display Block
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	    if (has_post_thumbnail()) {
	        echo '<div class="single-post-thumbnail clear">';
	        echo the_post_thumbnail('large-thumb');
	        echo '</div>';
	    }
	?>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php displayblock_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'displayblock' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-contact">
		<a href="mailto:info@displayblock.com" class="email-us-button"><img src="<?php bloginfo('template_url'); ?>/images/email-1.png" alt=""></a>
		<h3>Need help with your email marketing?<br>Contact us</h3>

		<p>We work with business and high street brands to provide the best email marketing services available. We are a full service agency and cover everything from strategy and design all the way through to campaign deployment and email sending. If you would like us to help your company with email marketing please <a href="mailto:info@displayblock.com">contact us</a>.</p>

		<?php edit_post_link( __( 'Edit', 'displayblock' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
