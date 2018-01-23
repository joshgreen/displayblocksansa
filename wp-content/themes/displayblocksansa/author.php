<?php
/**
 * The template for displaying Author Archive pages.
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
<div class="powder">
  <div class="max bmar">
    <div class="blogpage group">


      <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">


      <div class="author-card">
          <div class="author-text">
            <h1 class="page-title author"><?php printf( __( 'Author: %s', 'displayblock' ), '<span class="vcard">
            ' . get_the_author() . '
          </span>
          ' ); ?></h1>
            <p><?php the_author_meta( 'user_description' ); ?></p>
          </div>
            <div id="author-avatar" class="author-avatar"><br />
                <?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'displayblock_author_bio_avatar_size', 60 ) ); ?><br />
            </div><!-- #author-avatar -->
        </div>




        <?php if ( have_posts() ) : ?>

        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>

        <?php
                        /* Include the Post-Format-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         */
                        get_template_part( 'content', get_post_format() );
                    ?>

        <?php endwhile; ?>

        <?php displayblock_paging_nav(); ?>

        <?php else : ?>

        <?php get_template_part( 'content', 'none' ); ?>

        <?php endif; ?></main>
      <!-- #main --> </div>
    <!-- #primary -->

    <?php get_sidebar(); ?></div>
  <!-- .blogpage -->
</div>

</div>
<!-- .powder -->

<?php get_footer(); ?>