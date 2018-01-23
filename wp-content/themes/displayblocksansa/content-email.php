<?php
/**
 * @package Display Block
 */
?>

<div class="email-image" >
    <?php

    $image = get_field('email_image');

    if( !empty($image) ): ?>

    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="animated fadeIn" />

    <?php endif; ?>
</div>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

    <header class="entry-header">

      <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

    </header><!-- .entry-header -->

    <div class="entry-content">

      <h3><?php the_field('client_name'); ?></h3>

      <h4>Description</h4>
      <p><?php the_field('short_description'); ?></p>

      <h4>Problem</h4>
      <p><?php the_field('problem'); ?></p>

      <h4>Solution</h4>
      <p><?php the_field('solution'); ?></p>

    <?php
        wp_link_pages( array(
          'before' => '<div class="page-links">' . __( 'Pages:', 'displayblock' ),
          'after'  => '</div>',
        ) );
      ?>

    </div><!-- .entry-content -->

	<footer>

	</footer>
</article><!-- #post-## -->
