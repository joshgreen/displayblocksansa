<?php
/**
* Template name: Contact
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Display Block
 */

get_header(); ?>
<div class="banner image cont-intro">
  <div class="max">
    <h4>Let’s talk email</h4>
    <h1>Contact</h1>
  </div>
</div>
<div class="contact">
  <div class="inner">
    <div class="form-wrapper">
      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'content', 'contact' ); ?>

      <?php endwhile; // end of the loop. ?>

    </div> <!-- .form-wrapper -->

  </div> <!-- .inner -->


    <div class="max">
        <div class="inner">
            <ul class="contact-intro">
                <li>
                    <h4>New Business</h4>
                    <div class="details">
                        <p>For all new business and general enquiries please contact our client services team.</p>
                        <p>
                            Sales<br>
                            <a href="mailto:info@displayblock.com">info@displayblock.com</a>
                        </p>
                    </div>
                </li>
                <li>
                    <h4>Visit us</h4>
                    <div class="details">
                        <p>
                            2 Sheen Road<br>
                            Richmond<br>
                            TW9 1AE<br></p>
                            <p>Tube: Richmond</p>
                    </div>
                </li>
                <li>
                    <h4>Talk to us</h4>
                    <div class="details">
                        <p>
                            0208 973 2335<br>
                            <a href="https://twitter.com/displayblock">@displayblock</a>
                        </p>
                    </div>
                </li>
            </ul>
        </div> <!-- .inner -->

    </div>
</div>

<div class="signup-form background-blue">
<a name="subscribe"></a>
    <div class="max bmar">
        <h4>Love email as much as we do?</h4>
        <h3>Subscribe to our newsletter</h3>
        <p>Obviously your email address is completely safe with us.</p>

        <form  action="https://cog.displayblock.com/ws_subscribe.php" method="POST">
            <fieldset>
                <!--s related form controls -->
                <legend>Simple Form</legend>
                <!-- defines caption text for form controls that areed by the fieldset element -->
                <ul>
                    <li>
                        <label for="firstname">First name</label>
                        <input type="text" name="firstname" placeholder="Jane"></li>
                     <li>
                        <label for="lastname">Last name</label>
                        <input type="text" name="lastname" placeholder="Smith"></li>
                    <li>
                        <label for="email">Input email</label>
                        <input type="email" name="email"  placeholder="janesmith@gmail.com"></li>
                    <li style="display: none">
                        <label for="hiddenfield"></label>
                            <input type="text" name="hiddenfield"></li>
                    <li>
                        <label for="subscribe">Subscribe</label>
                        <input type="submit" value="subscribe" class="button-white"></li>
                </ul>
            </fieldset>
        </form>
    </div>
</div>
<!-- .signup-form -->

<!-- <div class="map">
    hello world
</div> -->
<div class="contact-work-for-us">
    <div class="max">
        <div class="inner">
            <h4>Want to become and email star</h4>
            <h3>Want to work with us</h3>
            <p>
                We currently dont have any vacancies but are always on the look out for quality people. If you think you’d be a good fit please feel free to introduce yourself on our <a href="/careers">careers page</a>.</p>

                <p>We never work with recruitment agencies and we also never outsource our work.</p>
        </div> <!-- .inner -->
    </div> <!-- .max -->
</div>
<div class="background-blue">
    <div class="global-reach">
        <div class="max bmar">
            <div class="inner">
                <h3>I'm not in London, are we still a good fit?</h3>
                <p>We have clients all around the world. In fact, most of our clients have never been to our office. Over 70% of our clients come to us because their friends, business partner or customer have referred them to us - We are proud to be a trusted partner. We did however meet all our clients in person.</p>
                <p>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>