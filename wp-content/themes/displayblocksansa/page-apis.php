<?php
/**
* Template name: APIs
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

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'content', 'page' ); ?>

      <?php endwhile; // end of the loop. ?>

        <div class="inner">
          <ul id="ApiItems" class="api-items">


      <?php
          $args = array(
            'post_type' => 'api_integrations',
            'posts_per_page'         => '40'

          );
          $apiintegrations = new WP_Query( $args );
          if( $apiintegrations->have_posts() ) {
            while( $apiintegrations->have_posts() ) {
              $apiintegrations->the_post();
              ?>


                <li class="api-single">
                  <a href="<?php echo get_permalink();  ?>" class="api-link">
                    <div class="api-holder">

                      <div  class="api-logo" style="background-color:<?php the_field('api_logo-bg'); ?>">
                        <?php if( get_field('api_logo') ): ?>

                          <img src="<?php the_field('api_logo'); ?>" />

                        <?php endif; ?>
                      </div>

                      <div class="api-description">
                        <h4><?php the_field('api_title'); ?></h4>

                        <p><?php the_field('api_short_description'); ?></p>
                        <?php
                          if( get_field('api_via') ) {
                            echo '<p class="zapier">via <span class="screen-reader-text">zapier</span><span class="zap-logo"></span></p>';
                            };
                        ?>
                        <p>Read more</p>
                      </div> <!-- .api-description -->

                    </div><!-- .api-holder -->
                  </a>
                </li> <!-- .api-single -->

              <?php
            }
          }
          else { echo 'Oh no API Integrations!'; }
       ?>
       </ul>
       </div> <!-- .inner -->

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>