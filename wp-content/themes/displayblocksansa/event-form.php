<?php
/**
* Template name: Event-form
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Display Block
 */

get_header(); ?>
<div class="banner image event-form-banner">
    <div class="grad">
        <div class="icons">
        </div>
    </div>
</div>
<div class="event-form">
<div class="max  bmar">
    <div class="inner">

        <p>Please complete the form below to register for our responsive email design evening.</p>

<p>Venue: High Road House, Chiswick, London, W4 1PR<br>
    Date: Thursday 11 September, 6:30pm.</p>

        <form action="http://cog.displayblock.com/event_register.php" method="POST" id="event-form">
            <fieldset>
            <legend>Email design Workshop signup</legend>

                <label for="firstname">First name*</label>
                <input type="text" name="firstname" placeholder="John" required autofocus>

                <label for="lastname">Last name*</label>
                <input type="text" name="lastname" placeholder="Snow" required>

                <label for="company">Company</label>
                <input type="text" name="company" placeholder="Company">

                <label for="telephone">Phone</label>
                <input type="number" name="telephone" placeholder="0208 123 45678" maxlenght="13">

                <label for="email">Email*</label>
                <input type="email" name="email" placeholder="john.snow@thewall.com" required>


                <input type="submit" value="Register" class="button-white"></li>

            </fieldset>
        </form>
        <p>
            Places are limited and registrations will be taken on a first come first served basis.
        </p>
    </div>
</div>
</div>

<?php get_footer(); ?>