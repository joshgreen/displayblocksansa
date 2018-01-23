<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Display Block
 */
?>
<p id="back-top"><a href="#top">Back to Top</a></p>
  </div><!-- #content -->

  <footer id="colophon" class="site-footer" role="contentinfo">
    <div class="footer-inner">
      <div class="foot-branding">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <img src="<?php bloginfo('template_url'); ?>/images/logo-wh.svg" alt="<?php bloginfo( 'name' ); ?>" class="">
        </a>
      </div>
    </div>
    <div class="footer-inner">
      <div class="f-info">
        <section>
          <h4 class="widget-title">Site</h4>
          <?php wp_nav_menu( array( 'theme_location' => 'secondary-menu' ) ); ?>
        </section>
      </div>
      <div class="f-info">
        <section>
          <h4>Join our mailing list</h4>
          <p>We don’t spam. It’s a weekly email about everything email marketing.</p>
          <div class="footer-signup">
            <form action="">
              <label class="footer-signup-label" for="email-address">Join our mailing list</label>
              <input class="footer-signup-input" name="email" placeholder="Email address" id="email-address" type="email">
              <button type="submit" class="footer-signup-submit">Join our list</button>
            </form>
          </div>
        </section>

        <section>
          <h4>New business</h4>
          <p>We send emails for all types of companies. If you're interested in full service or self service email marketing please feel free to contact us.</p>
        </section>

        <?php if (!dynamic_sidebar('Footer1')) :?> <?php endif;?>
      </div>
      <div class="f-info">
        <section>
          <h4>Vist us</h4>
          <p>We have offices in London and Edinburgh. Feel free to arrange a meeting with us to discuss your email marketing needs.</p>
          <h5>London</h5>
          <p>
            2 Sheen Road<br>
            Richmond<br>
            London<br>
            TW9 1AE
          </p>
          <h5>Edinburgh</h5>
          <p>
            36 Dublin Street<br>
            Edinburgh<br>
            EH3 6LZ
          </p>
        </section>
        <?php if (!dynamic_sidebar('Footer2')) :?> <?php endif;?>
      </div>
      <div class="f-info">
        <section>
          <h4>Company</h4>
          <ul>
            <li><a href="">About us</a></li>
            <li><a href="">Careers</a></li>
            <li><a href="">Our process</a></li>
            <li><a href="">Brand</a></li>
            <li><a href="">Cookie Policy</a></li>
            <li><a href="">Privacy Policy</a></li>
            <li><a href="">Terms of Service</a></li>
          </ul>
        </section>

        <section>
          <h4>Social</h4>
          <ul>
            <li>Twitter</li>
            <li>Linkedin</li>
            <li>Facebook</li>
          </ul>
        </section>

        <?php if (!dynamic_sidebar('Footer3')) :?> <?php endif;?>
      </div>
      <div class="f-info">
        <div class="footer-posts">
          <h4>From the Blog</h4>
          <?php $latest = new WP_Query( array( 'posts_per_page' => 2 ));
          if( $latest->have_posts() ) : ?>
          <ul id="recent">
           <?php while( $latest->have_posts() ) : $latest->the_post(); ?>
              <li>
              <?php if ( has_post_thumbnail()) : ?>
               <?php the_post_thumbnail(array(80,80), array('class' => 'icon80')); ?>
              <?php endif; ?>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </li>
           <?php endwhile; ?>
          </ul>
          <?php endif; wp_reset_postdata(); ?>
        </div>
      </div>


    </div> <!-- .inner -->

    <div class="site-info">
      <div class="">
        &copy;2011 - <?php echo date("Y"); echo " "; bloginfo('name'); ?> Ltd. All Rights Reserved. <br>
        Made in the <span class="uk">UK</span>
      </div>
    </div><!-- .site-info -->

  </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!--GA-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51176884-1', 'displayblock.com');
  ga('send', 'pageview');

</script>
</body>
</html>