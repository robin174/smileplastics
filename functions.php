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
        'page_title'    => 'Footer Content',
        'menu_title'    => 'Footer Content',
        'parent_slug'   => 'additional-site-settings',
    ));
}

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

/* Load custom WordPress nav walker 4 */
// require_once THEME_DIR_PATH . '/includes/wp-bootstrap-navwalker4.php';

/* Load custom WordPress nav walker 5 */
require_once THEME_DIR_PATH . '/includes/wp-bootstrap-navwalker5.php';

