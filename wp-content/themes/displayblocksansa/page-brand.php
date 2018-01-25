<?php
/**
* Template name: Brand
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

      <div class="brand-items">
        <section class="brand-logo">
          <header>
            <div class="inner">
              <h2>Logo</h2>
            </div> <!-- .inner -->
          </header>
          <article>
            <div class="inner">

            </div> <!-- .inner -->
          </article>
        </section> <!-- .brand-logo -->

        <section class="brand-colours">
          <header>
            <div class="inner">
              <h2>Colours</h2>
            </div> <!-- .inner -->
          </header>
          <article>
            <div class="inner">
              <ul class="colour-grid">
                <li><div class="db-primaryblue whitetext">#1DAFEC</div><span>display block primaryblue: rgba(29, 175, 236,1.0)</span></li>
                <li><div class="db-lightblue">#CFF3FD</div><span>display block lightblue: rgba(207,243,253,1.0)</span></li>
                <li><div class="db-yellow">#FFD239</div><span>display block yellow: rgba(255, 210, 57,1.0)</span></li>
                <li><div class="db-lightyellow">#FFEBAC</div><span>display block lightyellow: rgba(255,235,172,1.0)</span></li>
                <li><div class="db-lightgreybg">#F1F4F7</div><span>display block lightgreybg: rgba(241, 244, 247,1.0)</span></li>
                <li><div class="db-lightgrey">#E0E1E1</div><span>display block lightgrey: rgba(224, 225, 225,1.0)</span></li>
                <li><div class="db-textgrey whitetext">#9A9C9E</div><span>display block textgrey: rgba(154, 156, 158,1.0)</span></li>
                <li><div class="db-texttitle whitetext">#888A8C</div><span>display block texttitle: rgba(136, 138, 140,1.0)</span></li>
                <li><div class="db-textfooter whitetext">#78797C</div><span>display block textfooter: rgba(120,121,124,1.0)</span></li>
                <li><div class="db-textbody whitetext">#657278</div><span>display block textbody: rgba(101,114,120,1.0)</span></li>
                <li><div class="db-grey4 whitetext">#5D5D5D</div><span>display block grey4: rgba(93,93,93,1.0)</span></li>
                <li><div class="db-text whitetext">#505457</div><span>display block text: rgba(61,66,69,0.9)</span></li>
                <li><div class="db-darkblue whitetext">#1F2845</div><span>display block darkblue: rgba(31, 40, 69,1.0)</span></li>
                <li><div class="db-midblue whitetext">#2F3438</div><span>display block midblue: rgba(47, 52, 56,1.0)</span></li>
                <li><div class="db-twc">#F5F5F5</div><span>display block twc: rgba(245, 245, 245,1.0)</span></li>
                <li><div class="db-red whitetext">#F85E61</div><span>display block red: rgba(248,94,97,1.0)</span></li>
                <li><div class="db-turquise">#28DFBC</div><span>display block turquise: rgba(40,223,188,1.0)</span></li>
                <li><div class="db-green1 whitetext">#81CAB8</div><span>display block green1: rgba(129,202,184,1.0)</span></li>
                <li><div class="db-green whitetext">#69A796</div><span>display block green: rgba(105,167,150,1.0)</span></li>
              </ul>
            </div> <!-- .inner -->
          </article>
        </section> <!-- .brand-colours -->



        <section class="brand-typeface">
          <header>
            <div class="inner">
              <h2>Typeface</h2>
            </div> <!-- .inner -->
          </header>
          <article>
            <div class="inner">

              <div class="typeface-examples">
                <div>
                  <span>FreightSans Pro Book</span><br>
                  <span>AaBbCcDd</span><br>
                  <span>12345678</span><br>
                  <span>ABCDEFGHIJKLMNOPQRSTUVWXYZ</span><br>
                  <span>abcdefghijklmnopqrstuvwxyz</span>
                </div>
                <div>
                  <span>FreightSans Pro Book Italic</span><br>
                  <span>AaBbCcDd</span><br>
                  <span>12345678</span><br>
                  <span>ABCDEFGHIJKLMNOPQRSTUVWXYZ</span><br>
                  <span>abcdefghijklmnopqrstuvwxyz</span>
                </div>
                <div>
                  <span>FreightSans Pro Semibold</span><br>
                  <span>AaBbCcDd</span><br>
                  <span>12345678</span><br>
                  <span>ABCDEFGHIJKLMNOPQRSTUVWXYZ</span><br>
                  <span>abcdefghijklmnopqrstuvwxyz</span>
                </div>
                <div>
                  <span>FreightSans Pro Semibold Italic</span><br>
                  <span>AaBbCcDd</span><br>
                  <span>12345678</span><br>
                  <span>ABCDEFGHIJKLMNOPQRSTUVWXYZ</span><br>
                  <span>abcdefghijklmnopqrstuvwxyz</span>
                </div>
                <div>
                  <span>FreightSans Pro Black</span><br>
                  <span>AaBbCcDd</span><br>
                  <span>12345678</span><br>
                  <span>ABCDEFGHIJKLMNOPQRSTUVWXYZ</span><br>
                  <span>abcdefghijklmnopqrstuvwxyz</span>
                </div>
                <div>
                  <span>FreightSans Pro Black Italic</span><br>
                  <span>AaBbCcDd</span><br>
                  <span>12345678</span><br>
                  <span>ABCDEFGHIJKLMNOPQRSTUVWXYZ</span><br>
                  <span>abcdefghijklmnopqrstuvwxyz</span>
                </div>
              </div>

            </div> <!-- .inner -->
          </article>
        </section> <!-- .brand-typeface -->

        <section class="brand-typography">
          <header>
            <div class="inner">
              <h2>Typography</h2>
            </div> <!-- .inner -->
          </header>
          <article>
            <div class="inner">

              <div class="typography-headings">
                <div><h1>Header h1</h1> <span>font-size: 66px, font-weight: 700, letter-spacing: 0px, line-height: 72.6px;</span></div>
                <div><h2>Header h2</h2> <span>font-size: 58.3px, font-weight: 700, letter-spacing: 0px, line-height: 64.1333px;</span></div>
                <div><h3>Header h3</h3> <span>font-size: 51.7px, font-weight: 700, letter-spacing: 0px, line-height: 56.8667px;</span></div>
                <div><h4>Header h4</h4> <span>font-size: 24.2px, font-weight: 600, letter-spacing: 0px, line-height: 26.6167px;</span></div>
                <div><h5>Header h5</h5> <span>font-size: 22px, font-weight: 700, letter-spacing: 0.8px, line-height: 24.2px;</span></div>
                <div><h6>Header h6</h6> <span>font-size: 17.6px, font-weight: 700, letter-spacing: 0px, line-height: 19.3667px;</span></div>
              </div>

              <div class="typography-bodycopy">
                Hi World

                Ok I think this is working now

                great this works
              </div>

            </div> <!-- .inner -->
          </article>
        </section> <!-- .brand-typography -->

        <section class="brand-formatting">
          <header>
            <div class="inner">
              <h2>Formatting</h2>
            </div> <!-- .inner -->
          </header>
          <article>
            <div class="inner">

            </div> <!-- .inner -->
          </article>
        </section> <!-- .brand-formatting -->

      </div> <!-- .brand-items -->
    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>