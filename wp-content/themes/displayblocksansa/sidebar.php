<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Display Block
 */
?>
<div id="secondary" class="sidebar widget-area" role="complementary">
  <div class="side-inner">

    <aside id="search" class="widget widget_search">
      <?php get_search_form(); ?></aside>

    <aside class="signup-form background-blue">
      <h4>Love email as much as we do?</h4>
      <h3>Subscribe to our newsletter</h3>

      <form action="https://cog.displayblock.com/ws_subscribe.php"  method="POST">
        <fieldset>
          <!--s related form controls -->
          <legend>Simple Form</legend>
          <!-- defines caption text for form controls that areed by the fieldset element -->
          <ul>
            <li>
              <label for="firstname">First name</label>
              <input type="text" name="firstname" id="firstname" placeholder="Jane"></li>
            <li>
              <label for="lastname">Last name</label>
              <input type="text" name="lastname" id="lastname" placeholder="Smith"></li>
            <li>
              <label for="email">Email</label>
              <input type="email" name="email" id="email"  placeholder="janesmith@gmail.com"></li>
            <li style="display: none">
              <label for="hiddenfield"></label>
                <input type="text" name="hiddenfield"></li>
            <li>
              <label for="subscribe">Subscribe</label>
              <input type="submit" value="subscribe" class="button-white" id="subbutton" ></li>
          </ul>
        </fieldset>
      </form>
      <!-- .signup-form -->
      </aside>
      <div style="padding-top: 30px">
            <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
      </div>


    <?php endif; // end sidebar widget area ?></div>
</div>
<!-- #secondary -->