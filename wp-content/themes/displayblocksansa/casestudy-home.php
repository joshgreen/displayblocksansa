
<?php
/**
* Template Name: Casestudyhome
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Display Block
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'content', 'page' ); ?>

            <?php
                $children = wp_list_pages('title_li=&child_of='.$post-> ID.'&echo=0');
                    if ($children) { ?>
                        <ul>
                            <?php echo $children; ?>
                        </ul>
                <?php }
            ?>

            <?php endwhile; // end of the loop. ?></main>
        <!-- #main --> </div>
    <!-- #primary -->

    <?php get_footer(); ?>