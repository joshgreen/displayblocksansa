<?php
/**
* Template name: about-us
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Display Block
 */

get_header(); ?>
<div class="about-us">


    <header class="entry-header">
      <div class="inner">
        <h1 class="entry-title">About Us</h1>
      </div>
    </header>
<section class="about-us-intro">
    <div class="about-us-office">
      <img src="<?php bloginfo('template_url'); ?>/images/about-us-office.png" alt="Our nice office :)" width="" height="">
    </div>

    <div class="inner">
      <p>
        We’re a small but elite team made up of email industry veterans sending out emails since 1999. We specialise in bespoke email design, coding and sending. We offer a wide range of email broadcasting services from self-service to fully managed email campaign management. We’re a friendly bunch and always happy to talk email. If you’re interested in working with us feel free to pop along to Richmond and we’ll be happy to meet with you.
      </p>
    </div>


  </section>
  <section class="displayblock-staff">
    <div class="inner">
      <div class="banner">
        <h1>Our team</h1>
      </div>
      <ul class="staff-list">
        <li class="staff-member">
          <div class="staff-text">
          <h4 class="job-title">
            CEO
          </h4>
          <h3 class="staff-name">
            Mike Parry
          </h3>
          <p>
            has over 25 years of sales and marketing experience and founded e2 Communications, the first email marketing company in the UK, in 1999. He has been an influential figure in the industry ever since, speaking at events such as TFM&A, Internet World, eCommerce Expo, Ad:Tech, Savoy Breakfast Seminars, BAFTA Seminars, and Email Stadium Tours, He co-authored The Essential Email Guide and The Big Book of Email Marketing.
          </p>
        </div>
        <div class="staff-pic">
          <img src="<?php bloginfo('template_url'); ?>/images/about-us-mike.png" alt="Mike Parry profile picture" width="" height="">
        </div>
        </li>
        <li class="staff-member">
          <div class="staff-text">
            <h4 class="job-title">
              COO
            </h4>
            <h3 class="staff-name">
              Tony Macpherson
            </h3>
            <p>
              has over 30 years in sales, marketing and financial services, joining Mike in 2000 at e2 Communications and the two have worked together to build three
  successful UK email marketing companies. He has also spoken at industry events and co-authored The Essential Email Guide and The Big Book of Email Marketing.
            </p>
          </div>
          <div class="staff-pic">
            <img src="<?php bloginfo('template_url'); ?>/images/about-us-tony.png" alt="Tony Macpherson profile picture" width="" height="">
          </div>
        </li>
        <li class="staff-member">
          <div class="staff-text">
            <h4 class="job-title">
              CTO

            </h4>
            <h3 class="staff-name">
              Mel Jewell
            </h3>
            <p>
              graduated from Surrey University with a degree in Computing and IT and has a long history in working with and building databases. Mel specialises in all things
  data as well as analytics and marketing technology. She runs our data team and works with our clients on implementing email automation and data strategies.
            </p>
          </div>
          <div class="staff-pic">
            <img src="<?php bloginfo('template_url'); ?>/images/about-us-mel.png" alt="Mel Jewell profile picture" width="" height="">
          </div>
        </li>
        <li class="staff-member">
          <div class="staff-text">
            <h4 class="job-title">
              Creative Director
            </h4>
            <h3 class="staff-name">
              Josh Green
            </h3>
            <p>
              has vast experience in email marketing and has been at the forefront of responsive and spongy email design and coding. His understanding of how design and coding mesh together to create the best user experience is unparalleled. He brings this knowledge and a passion for getting it right to absolutely everything he does.
            </p>
          </div>
          <div class="staff-pic">
            <img src="<?php bloginfo('template_url'); ?>/images/about-us-josh.png" alt="Josh Green profile picture" width="" height="">
          </div>
        </li>
        <li class="staff-member">
          <div class="staff-text">
            <h4 class="job-title">
              Senior Email Developer
            </h4>
            <h3 class="staff-name">
              Adrian Young
            </h3>
            <p>
              Lacinia purus euismod tempor feugiat lectus lobortis enim conubia ultricies tristique aptent congue aenean urna rhoncus phasellus turpis class vulputate vestibulum bibendum scelerisque gravida. Lacinia purus euismod tempor feugiat lectus lobortis enim.
            </p>
          </div>
          <div class="staff-pic">
            <img src="<?php bloginfo('template_url'); ?>/images/about-us-adrian-young.png" alt="Adrian Young profile picture" width="" height="">
          </div>
        </li>

      </ul>
    </div>
  </section>
  <section class="about-us-outro">
    <div class="inner">
      <div class="banner">
        <h1>We have offices in London and Edinburgh </h1>
      </div>
      <p>
        We have always been based in Richmond upon Thames in South West London. If you fancy, a chat about email or how we could help you send the best possible emails to your customers, feel free to stop by. If you’re further North the guys in Edinburgh will be happy to talk to you about email.
      </p>
    </div>
    <div class="office-pics">
      <img src="<?php bloginfo('template_url'); ?>/images/about-us-richmond.png" alt="Lovely Richmond waterfront" width="" height="">
      <img src="<?php bloginfo('template_url'); ?>/images/edinburgh.jpg" alt="A view of Edinburgh out to Fife" width="" height="">
    </div>
    <div class="banner">
        <h1>Work with us</h1>
    </div>
    <div class="inner">
      <p>
       We never deal with recruitment agencies. Check out our <a href="/careers/">careers page</a> for vacancies.
      </p>
    </div>

  </section>
</div>


<?php get_footer(); ?>