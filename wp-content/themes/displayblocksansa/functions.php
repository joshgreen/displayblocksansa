<?php
/**
 * Display Block functions and definitions
 *
 * @package Display Block
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
    $content_width = 670; /* pixels */
}

if ( ! function_exists( 'displayblock_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function displayblock_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on Display Block, use a find and replace
     * to change 'displayblock' to the name of your theme in all the template files
     */
    load_theme_textdomain( 'displayblock', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
     */
    add_theme_support( 'post-thumbnails' );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'displayblock' ),
        'secondary-menu' => __( 'Secondary Menu' )
    ) );

    // Enable support for Post Formats.
    add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

    // // Setup the WordPress core custom background feature.
    // add_theme_support( 'custom-background', apply_filters( 'displayblock_custom_background_args', array(
    //     'default-color' => 'ffffff',
    //     'default-image' => '',
    // ) ) );

    // Enable support for HTML5 markup.
    add_theme_support( 'html5', array(
        'comment-list',
        'search-form',
        'comment-form',
        'gallery',
        'caption',
    ) );
}
endif; // displayblock_setup
add_action( 'after_setup_theme', 'displayblock_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function displayblock_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'displayblock' ),
        'id'            => 'sidebar-1',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );
     register_sidebar( array(
        'name'          => __( 'Footer1', 'displayblock' ),
        'id'            => 'footer-text-1',
        'description'   => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
     register_sidebar( array(
        'name'          => __( 'Footer2', 'displayblock' ),
        'id'            => 'footer-text-2',
        'description'   => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
     register_sidebar( array(
        'name'          => __( 'Footer3', 'displayblock' ),
        'id'            => 'footer-text-3',
        'description'   => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );


}
add_action( 'widgets_init', 'displayblock_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function displayblock_scripts() {
    //CSS
    wp_enqueue_style( 'displayblock-style', get_stylesheet_uri() );



    //Js
    wp_enqueue_script( 'displayblock-flexslidermin', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array(), '', true );

    wp_enqueue_script( 'displayblock-slider', get_template_directory_uri() . '/js/slider.js', array(), '', true );

    wp_enqueue_script( 'displayblock-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '', true );

    wp_enqueue_script( 'prism-js', get_template_directory_uri() . '/js/prism.js', array(), '', true );

    wp_enqueue_script( 'magnific-popup-js', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), '', true );

    wp_enqueue_script( 'displayblock-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '', true );


    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    if ( is_page( 'Event' ) ) {
        wp_enqueue_script( 'onepagenavjs', get_template_directory_uri() . '/js/onepagenav.js', array('jquery'), '', true );
    }

    wp_enqueue_script( 'displayblock-my', get_template_directory_uri() . '/js/my.js', array('jquery'), '', true );

    wp_enqueue_script( 'servicesjs', get_template_directory_uri() . '/js/service.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'displayblock_scripts' );



function prefix_add_footer_styles() {
     wp_enqueue_style( 'prism-css', get_template_directory_uri() . '/css/prism.css', array(), '', 'screen' );

    wp_enqueue_style( 'magnific-popup-css', get_template_directory_uri() . '/css/magnific-popup.css', array(), '', 'screen' );
};
add_action( 'get_footer', 'prefix_add_footer_styles' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';



// TypeKit Fonts Dev Site
/*
 * @since Theme 1.0
*/
function theme_typekit() {
    wp_enqueue_script( 'theme_typekit', '//use.typekit.net/xpw8pjg.js');
}
add_action( 'wp_enqueue_scripts', 'theme_typekit' );

function theme_typekit_inline() {
  if ( wp_script_is( 'theme_typekit', 'done' ) ) { ?>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<?php }
}
add_action( 'wp_head', 'theme_typekit_inline' );

// TypeKit Fonts Live Site
/*
 * @since Theme 1.0


function theme_typekit() {
    wp_enqueue_script( 'theme_typekit', '//use.typekit.net/mck4ijj.js');
}
add_action( 'wp_enqueue_scripts', 'theme_typekit' );

function theme_typekit_inline() {
  if ( wp_script_is( 'theme_typekit', 'done' ) ) { ?>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<?php }
}
add_action( 'wp_head', 'theme_typekit_inline' );
*/


add_theme_support( 'post-thumbnails' );
add_image_size('large-thumb', 1060, 650, true);
add_image_size('super-thumb', 2080, auto, true);
add_image_size('related-thumb', 214, 214, true);



function custom_excerpt_length( $length ) {
    return 120;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


function mytheme_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    extract($args, EXTR_SKIP);

    if ( 'div' == $args['style'] ) {
        $tag = 'div';
        $add_below = 'comment';
    } else {
        $tag = 'li';
        $add_below = 'div-comment';
    }
?>
        <<?php echo $tag; ?> id="comment-<?php comment_ID(); ?>" <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?>>
            <article id="div-comment-<?php comment_ID(); ?>" class="comment-body">
                <footer class="comment-meta">
                    <div class="comment-author vcard">
                        <div class="comment-pic">
                            <?php if ( 0 != $args['avatar_size'] ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
                        </div>
                        <div class="commentor-details">
                            <?php printf( __( '%s <em class="says">says</em>' ), sprintf( '<b class="fn">%s</b>', get_comment_author() ) ); ?>
                            <div class="commentor-time">
                                 <div class="comment-metadata">
                                    <a href="<?php echo esc_url( get_comment_link( $comment->comment_ID, $args ) ); ?>">
                                        <time datetime="<?php comment_time( 'c' ); ?>">
                                            <?php printf( _x( '%1$s <br> %2$s', '1: date, 2: time' ), get_comment_date(), get_comment_time() ); ?>
                                        </time>
                                    </a>
                                    <?php edit_comment_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); ?>
                                </div><!-- .comment-metadata -->

                                <?php if ( '0' == $comment->comment_approved ) : ?>
                                <p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></p>
                                <?php endif; ?>
                            </div>  <!-- .commentor-time -->
                        </div>
                    </div><!-- .comment-author -->

                </footer><!-- .comment-meta -->

                <div class="comment-content">
                    <?php comment_text(); ?>
                </div><!-- .comment-content -->

                <div class="reply">
                    <?php comment_reply_link( array_merge( $args, array( 'add_below' => 'div-comment', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
                </div><!-- .reply -->
            </article><!-- .comment-body -->
<?php
    }


// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
       global $post;
    return '&hellip;';
}
add_filter('excerpt_more', 'new_excerpt_more');




function image_tag_class($class) {
    $class .= ' my-custom-class';
    return $class;
}
add_filter('get_image_tag_class', 'image_tag_class' );



// Add BlogPopUp class to images inserted in post content
function give_linked_images_class($html, $id, $caption, $title, $align, $url, $size, $alt = '' ){
  $classes = 'BlogPopUp'; // separated by spaces, e.g. 'img image-link'

  // check if there are already classes assigned to the anchor
  if ( preg_match('/<a.*? class=".*?">/', $html) ) {
    $html = preg_replace('/(<a.*? class=".*?)(".*?>)/', '$1 ' . $classes . '$2', $html);
  } else {
    $html = preg_replace('/(<a.*?)>/', '$1 class="' . $classes . '" >', $html);
  }
  return $html;
}
add_filter('image_send_to_editor','give_linked_images_class',10,8);


// open graph
function get_excerpt_by_id($post_id){
$the_post = get_post($post_id); //Gets post ID
$the_excerpt = $the_post->post_content; //Gets post_content to be used as a basis for the excerpt
$excerpt_length = 35; //Sets excerpt length by word count
$the_excerpt = strip_tags(strip_shortcodes($the_excerpt)); //Strips tags and images
$words = explode(' ', $the_excerpt, $excerpt_length + 1);
if(count($words) > $excerpt_length) :
array_pop($words);
array_push($words, '…');
$the_excerpt = implode(' ', $words);
endif;
$the_excerpt = $the_excerpt;
return $the_excerpt;
}



//Adding the Open Graph in the Language Attributes
function add_opengraph_doctype( $output ) {
        return $output . ' xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"';
    }
add_filter('language_attributes', 'add_opengraph_doctype');

//Lets add Open Graph Meta Info
function insert_fb_in_head() {
    global $post;
    if ( !is_singular()) //if it is not a post or a page
        return;
        echo '<meta property="fb:admins" content="1234457622781006"/>';
        echo '<meta property="og:title" content="' . get_the_title() . '"/>';
        echo '<meta property="og:type" content="article"/>';
        echo '<meta property="og:url" content="' . get_permalink() . '"/>';
        echo '<meta property="og:site_name" content="display block"/>';
    if(!has_post_thumbnail( $post->ID )) { //the post does not have featured image, use a default image
        $default_image="http://www.displayblock.com/wp-content/themes/displayblocktheme/apple-touch-icon-precomposed.png"; //replace this with a default image on your server or an image in your media library
        echo '<meta property="og:image" content="' . $default_image . '"/>';
    }
    else{
        $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
        echo '<meta property="og:image" content="' . esc_attr( $thumbnail_src[0] ) . '"/>';
    }
    echo "
";
}
add_action( 'wp_head', 'insert_fb_in_head', 5 );




// Delay posting to my RSS feeds for 60 minutes
function Delay_RSS_After_Publish($where) {
  global $wpdb;

  if (is_feed()) {
    $now = gmdate('Y-m-d H:i:s');
    $wait = '60';
    $device = 'MINUTE';
    $where.=" AND TIMESTAMPDIFF($device, $wpdb->posts.post_date_gmt, '$now') > $wait ";
  }
  return $where;
}

add_filter('posts_where', 'Delay_RSS_After_Publish');

