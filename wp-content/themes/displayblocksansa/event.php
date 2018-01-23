<?php
/**
* Template name: Event
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Display Block
 */

get_header(); ?>
<div class="banner image event-opening">
    <div class="grad">
        <div class="icons">
            <h1>Responsive Email Design Evening</h1>
            <p>
                <span class="small">London, uk</span>
                <br>
                High Road House, Chiswick
                <br>
                <span class="big">11 September</span>
            </p>

            <a href="<?php bloginfo('template_url'); ?>/event-signup" class="button-blue">Attend evening</a>
        </div>
    </div>
</div>

<nav class="event-navigation">
    <div class="inner">
        <ul id="event-nav">
            <li class="current">
                <a href="#section-1">About</a>
            </li>
            <li>
                <a href="#section-2">speaker</a>
            </li>
            <li>
                <a href="#section-3">agenda</a>
            </li>
            <li>
                <a href="#section-4">Venue info</a>
            </li>
        </ul>
    </div>
</nav>
<div id="section-1" class="event-intro bbar">
    <div class="max">
        <div class="inner">
            <h1>Responsive Email Design Evening</h1>
            <p>
                The incredibly experienced and talented display block email design and coding team will be hosting another of their series of informal but informative evenings on responsive email design at High Road House in Chiswick W4. At this event you will be able to mingle with the display block experts including top designer Josh Green, leading industry coder and spokesperson Alex Ilhan, technical email expert Adrian Nabarro and email marketing experts Mike Parry and Tony MacPherson.
            </p>
        </div>
    </div>
</div>
<div id="section-2" class="event-speakers bbar">
    <div class="max">
        <div class="inner">
            <h1>Speaker</h1>
            <h3>Alex is an Email Developer with a very keen interest in emails and email marketing. Experienced in building emails to render across all platforms on a multitude of devices.</h3>
            <ul>
                <li>
                    <div class="speaker">
                        <img src="<?php bloginfo('template_url'); ?>/images/alex.jpeg" alt="">
                        <div class="speaker-description">
                            <span class="name">Alex Ilhan</span>
                            <span class="title">Email Developer at display block</span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="section-3" class="event-agenda bbar">
    <div class="max">
        <div class="inner">
            <h1>Evening Agenda</h1>
            <h3>
                This is an informal evening where we share with you how to go about getting started with responsive email design. The presentations will not be super technical and will be easily understandable by anyone who works in marketing or needs email marketing as part of their job.
            </h3>
            <ul class="agenda">
                <li>
                    <h3>
                        Thursday 11 September<br>
                        High Road House Chiswick, London W4
                    </h3>
                </li>
                <li>
                    <div class="time">6:30-7:00pm</div>
                    <div class="activity">
                        <h5>
                            Drinks reception, networking and nibbles
                        </h5>
                    </div>
                </li>
                <li>
                    <div class="time">7:00-7:30pm</div>
                    <div class="activity">
                        <h5>
                            Presentation on responsive email design
                        </h5>
                    </div>
                </li>
                 <li>
                    <div class="time">7:30-7:45pm</div>
                    <div class="activity">
                        <h5>Q&A</h5>
                    </div>
                </li>
                <li>
                    <div class="time">7:45 onwards</div>
                    <div class="activity">
                        <h5>
                            Drinks, networking and finger food
                        </h5>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="section-4" class="event-venue-info bmar">
    <div class="max">
        <div class="inner">
            <h1>Venue Info</h1>
            <h3>High Road House, Chiswick, London W4 1PR</h3>
            <p>
                High Road House is situated on Chiswick High Road, with its entrance to the right of the popular High Road Brasserie. Opened in 2006, High Road House is part of the Soho House private members clubs. Our event will be held in the playpen and <a href="https://house.highroadhouse.co.uk/downstairs">playground of the House</a>
            </p>
            <p class="center"><a href="<?php bloginfo('template_url'); ?>/event-signup" class="button-grey">Attend evening</a></p>

        </div>
    </div>
</div>

<?php get_footer(); ?>