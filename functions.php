<?php
/**
   * Theme Name: NewsFlash
 * Theme URI: https://www.facebook.com/groups/freewordpressthemeandplugin/
 * Author: Nayem Hasan
 * Author URI: https://www.facebook.com/abunayeem235/
 * Description: Themes Is WordPress Theme Market
 * @package newsflash
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'newsflash_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function newsflash_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on NewsPro, use a find and replace
		 * to change 'templatepro' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'newsflash', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

	

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 700, 400, true );
		//add_image_size( 'single-thumbnail', 700, 400, true );
		add_image_size( 'single-thumbnail', 'full' );

		

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

	}
endif;
add_action( 'after_setup_theme', 'newsflash_setup' );




/**
 * Enqueue scripts and styles.
 */
function newsflash_scripts() {
	wp_enqueue_style( 'newsflash-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'common-itpolly', get_template_directory_uri().'/assets/css/common-itpolly.css', array(), _S_VERSION );
	wp_enqueue_style( 'newsflash-lineawesome', get_template_directory_uri().'/assets/css/line-awesome.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'newsflash-stellarnav', get_template_directory_uri().'/assets/css/stellarnav.css', array(), _S_VERSION );
	wp_enqueue_style( 'newsflash-jquery', get_template_directory_uri().'/assets/css/jquery-ui.css', array(), _S_VERSION );
	wp_enqueue_style( 'newsflash-magnific', get_template_directory_uri().'/assets/css/magnific-popup.css', array(), _S_VERSION );
	wp_enqueue_style( 'newsflash-carousel', get_template_directory_uri().'/assets/css/owl.carousel.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'newsflash-responsive', get_template_directory_uri().'/assets/css/responsive.css', array(), _S_VERSION );
	wp_enqueue_style( 'newsflash-bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), _S_VERSION );
	
	

	wp_enqueue_script( 'newsflash-jquery', get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'newsflash-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'newsflash-bootstrapbundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'newsflash-stellarnav', get_template_directory_uri() . '/assets/js/stellarnav.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'newsflash-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'newsflash-magnific', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'newsflash-jqueryui', get_template_directory_uri() . '/assets/js/jquery-ui.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'newsflash-lazyload', get_template_directory_uri() . '/assets/js/lazyload.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'newsflash-main', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'newsflash_scripts' );


function plugin_slug()
	{
	$hostname = $_SERVER['SERVER_NAME'];
	$v = strtolower(str_replace('www.', '', $hostname));
	 return $v;  
	} 
	

/**
 * Redux Framework.
 */
require get_template_directory() . '/lib/redux/redux-core/framework.php';
require get_template_directory() . '/lib/redux/sample/config.php';
require get_template_directory() . '/lib/redux/redux-core/templates/panel/config.php';

/**
 * Metabox CMB2
 */
require get_template_directory() . '/lib/metabox/init.php';
require get_template_directory() . '/lib/metabox/functions.php';

require get_template_directory() . '/inc/template-functions.php';

require get_template_directory() . '/inc/menu.php';
require get_template_directory() . '/inc/widget.php';
require get_template_directory() . '/inc/custom-post.php';
