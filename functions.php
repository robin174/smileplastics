<?php
/**
* smileplastics functions and definitions
* @link https://developer.wordpress.org/themes/basics/theme-functions/
* @package smileplastics
*/

/* TODO: cross-reference with SmilePl and Foundation. */
/* Set container width here? */

/* Store the theme's directory path and uri in constants */
define('THEME_DIR_PATH', get_template_directory());
define('THEME_DIR_URI', get_template_directory_uri());


/* Timestamp css files (works on js too):
https://www.youtube.com/watch?v=kHp_yz3_6rI */

/* Enqueue styles and scripts */
function smileplastics_scripts() {

    // load Bootstrap CSS v5.1
    wp_enqueue_style( 'smileplastics-bootstrap-css', THEME_DIR_URI . '/includes/css/bootstrap.min.css');

    // load website CSS, versioned
    wp_enqueue_style( 'smileplastics-css', THEME_DIR_URI . '/assets/css/style.css', [], filemtime( get_stylesheet_directory() . '/assets/css/style.css') );

	// load Bootstrap JS v5.1
	wp_enqueue_script( 'smileplastics-bootstrap-js', THEME_DIR_URI . '/includes/js/bootstrap.min.js', array('jquery') );
}
add_action( 'wp_enqueue_scripts', 'smileplastics_scripts' );


// ACF Options
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'menu_title'    => 'Additional',
        'menu_slug'     => 'additional-site-settings',
        'parent_slug'   => '',
        'capability'    => 'edit_posts',
        'icon_url'      => 'dashicons-admin-site-alt',
        'redirect'      => true
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'General Settings',
        'menu_title'    => 'General Settings',
        'parent_slug'   => 'additional-site-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Stats',
        'menu_title'    => 'Stats',
        'parent_slug'   => 'additional-site-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Chart Columns',
        'menu_title'    => 'Chart Columns',
        'parent_slug'   => 'additional-site-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Edging Diagrams',
        'menu_title'    => 'Edging Diagrams',
        'parent_slug'   => 'additional-site-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Awards',
        'menu_title'    => 'Awards',
        'parent_slug'   => 'additional-site-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Worked With',
        'menu_title'    => 'Worked With',
        'parent_slug'   => 'additional-site-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Featured In',
        'menu_title'    => 'Featured In',
        'parent_slug'   => 'additional-site-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Testimonials',
        'menu_title'    => 'Testimonials',
        'parent_slug'   => 'additional-site-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Banner Advert',
        'menu_title'    => 'Banner Advert',
        'parent_slug'   => 'additional-site-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Newsletter Content',
        'menu_title'    => 'Newsletter Content',
        'parent_slug'   => 'additional-site-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title'    => '404 Content',
        'menu_title'    => '404 Content',
        'parent_slug'   => 'additional-site-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Footer Content',
        'menu_title'    => 'Footer Content',
        'parent_slug'   => 'additional-site-settings',
    ));
}


//  Is this needed?
function pagination() {
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}
add_action('init', 'pagination');


/* Add WooCommerce theme support */
function smileplastics_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'smileplastics_add_woocommerce_support' );

/* Register menus */
if ( ! function_exists( 'smileplastics_setup' ) ) :
	function smileplastics_setup() {

    register_nav_menus( array(
        'footer-column01'  => __( 'Footer - Column 01', 'smileplastics' ),
        'footer-column02'  => __( 'Footer - Column 02', 'smileplastics' ),
    ) );

    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    // To make the theme widget aware: https://developer.wordpress.org/themes/functionality/widgets/
}
endif;

add_action( 'after_setup_theme', 'smileplastics_setup'); 

function wpa90437_media_category( $query ) {
    if ( $query->is_category('media') && $query->is_main_query() ) {
        $query->set( 'posts_per_page', 4 );
    }
}
add_action( 'pre_get_posts', 'wpa90437_media_category' );

function your_themes_pagination() {
    global $wp_query;
    echo paginate_links();
}

/* Custom Admin Menu logo */
function smileplastics_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-smileplastics-admin-dark.png);
            padding-bottom: 2px;
            -webkit-background-size: 320px 35px;
            background-size: 320px 35px;
            height: 35px;
            width: 320px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'smileplastics_login_logo' );


// Load more on Journal
function enqueue_masonry_and_load_more_scripts() {
    // Only enqueue scripts on non-WooCommerce pages
    if ( !is_woocommerce() && !is_cart() && !is_checkout() && !is_product() ) {
        // Enqueue Masonry script (included with WordPress)
        wp_enqueue_script('masonry');
        
        // Enqueue custom script for Load More functionality and Masonry initialization
        wp_enqueue_script('masonry-load-more', get_template_directory_uri() . '/assets/js/masonry-load-more.js', array('jquery', 'masonry'), null, true);
        
        // Localize script for AJAX
        wp_localize_script('masonry-load-more', 'ajax_loadmore', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'posts_per_page' => 10,  // Adjust based on how many posts you want to load
            'nonce' => wp_create_nonce('load_more_posts'),
        ));
    }
}
add_action('wp_enqueue_scripts', 'enqueue_masonry_and_load_more_scripts');

function loadmore_ajax_handler() {
    check_ajax_referer('load_more_posts', 'nonce');  // Security check

    $paged = isset($_POST['page']) ? $_POST['page'] : 1;  // Current page
    $paged++;  // Load the next page

    $query_args = array(
        'post_type' => 'post',
        'order' => 'DESC',
        'post_status' => 'publish',
        'posts_per_page' => 12,  // Same as in your script
        'paged' => $paged,
    );

    $posts_query = new WP_Query($query_args);

    if ($posts_query->have_posts()) :
        while ($posts_query->have_posts()) : $posts_query->the_post();
            get_template_part('template-parts/part-journal-test', get_post_format());  // Post template 
        endwhile;
    endif;
    
    wp_reset_postdata();
    
    die();  // Important to terminate the script for AJAX
}

add_action('wp_ajax_loadmore_posts', 'loadmore_ajax_handler');  // For logged-in users
add_action('wp_ajax_nopriv_loadmore_posts', 'loadmore_ajax_handler');  // For non-logged-in users


/* Load custom WordPress nav walker 5 */
require_once THEME_DIR_PATH . '/includes/wp-bootstrap-navwalker5.php';
