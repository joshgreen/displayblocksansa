<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Display Block
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<header class="entry-header">
		<div class="twc-top">

		</div>

		<div class="banner twc">
		    <h1>
		        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		    </h1>
		</div>

	</header><!-- .entry-header -->

<div class="max">
	<div class="casestudy-content">
		<div class="entry-content" >
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'displayblock' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
	</div>	<!-- .casestudy-content	 -->
</div> <!-- .max -->

</article><!-- #post-## -->
