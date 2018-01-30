<?php
/**
 * @package Display Block
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php
            if (has_post_thumbnail()) {
                echo '<div class="blog-preview-image">';
                echo '<a href="' . get_permalink() . '" title="' . __('Read ', 'displayblock') . get_the_title() . '" rel="bookmark">';
                echo the_post_thumbnail('super-thumb');
                echo '</a>';
                echo '</div>';
            }
        ?>


    <header class="entry-header">

        <?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

        <?php if ( 'post' == get_post_type() ) : ?>
        <div class="entry-meta">
            <?php displayblock_posted_on(); ?>
        </div><!-- .entry-meta -->
        <?php endif; ?>

    </header><!-- .entry-header -->

    <div class="entry-content">

        <?php the_excerpt(); ?>

    </div><!-- .entry-content -->

    <div class="continue-reading">

        <?php echo '<a href="' . get_permalink() . '" title="' . __('Continue Reading ', 'displayblock') . get_the_title() . '" rel="bookmark">Read more <span class="entypo">&#59226;</span></a>'; ?>

    </div> <!-- .continue-reading -->

    <footer class="entry-footer">

        <?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
            <?php
                /* translators: used between list items, there is a space after the comma */
                $categories_list = get_the_category_list( __( ', ', 'displayblock' ) );
                if ( $categories_list && displayblock_categorized_blog() ) :
            ?>
            <span class="cat-links">
                <?php printf( __( '<span class="entypo">&#59148;</span> %1$s', 'displayblock' ), $categories_list ); ?>
            </span>
            <?php endif; // End if categories ?>

        <?php endif; // End if 'post' == get_post_type() ?>
      <div>
        <?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
        <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'displayblock' ), __( '1 Comment', 'displayblock' ), __( '% Comments', 'displayblock' ) ); ?></span>
        <?php endif; ?>

        <?php edit_post_link( __( 'Edit', 'displayblock' ), '<span class="edit-link">', '</span>' ); ?>
        </div>
    </footer><!-- .entry-footer -->

</article><!-- #post-## -->
