<?php
/**
 * Beatsmandu-shop functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Beatsmandu-shop
 */

if ( ! function_exists( 'beatsmandu_shop_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function beatsmandu_shop_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Beatsmandu-shop, use a find and replace
		 * to change 'beatsmandu-shop' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'beatsmandu-shop', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// Custom Image Sizes.
		add_image_size( 'beatsmandu-shop-thumb-750-300', 750, 300, true ); // crop.
		add_image_size( 'beatsmandu-shop-featured-900-600', 900, 600, true ); // crop.
		add_image_size( 'beatsmandu-shop-cover-image', 1200, 9999 );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary'     => esc_html__( 'Primary', 'beatsmandu-shop' ),
				'footer-menu' => esc_html__( 'Footer Menu', 'beatsmandu-shop' ),
				'social'      => esc_html__( 'Social Menu', 'beatsmandu-shop' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		/**
		 * Add support for core custom header feature.
		 *
		 * @link https://developer.wordpress.org/reference/functions/add_theme_support/#custom-header
		 */
		$defaults = array(
			'default-image' => '',
			'header-text'   => false,
			'width'         => 1900,
			'height'        => 1200,
			'flex-height'   => true,
		);
		add_theme_support( 'custom-header', $defaults );

		/**
		 * Add support for core custom background feature.
		 *
		 * @link https://codex.wordpress.org/Custom_Backgrounds
		 */
		$defaults = array(
			'default-color' => 'ffffff',
			'default-image' => '',
		);
		add_theme_support( 'custom-background', $defaults );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 80,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'beatsmandu_shop_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function beatsmandu_shop_content_width() {
	// This variable is intended to be overruled from themes.
	$GLOBALS['content_width'] = apply_filters( 'beatsmandu_shop_content_width', 640 );
}
add_action( 'after_setup_theme', 'beatsmandu_shop_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function beatsmandu_shop_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'beatsmandu-shop' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'beatsmandu-shop' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>',
		)
	);

	for ( $i = 1; $i <= 3; $i++ ) {
		register_sidebar(
			array(
				/* translators: %d: footer widget number. */
				'name'          => sprintf( esc_html__( 'Footer Widgets %d', 'beatsmandu-shop' ), $i ),
				'id'            => 'footer-' . $i,
				'description'   => esc_html__( 'Add widgets here.', 'beatsmandu-shop' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
	}
}
add_action( 'widgets_init', 'beatsmandu_shop_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function beatsmandu_shop_scripts() {

	// Bootstrap reboot styles.
	wp_enqueue_style( 'beatsmandu-shop-bootstrap-reboot', get_template_directory_uri() . '/vendor/bootstrap-src/css/bootstrap-reboot.min.css', array( 'beatsmandu-shop-style' ), '4.1.2' );

	// Bootstrap styles.
	wp_enqueue_style( 'beatsmandu-shop-bootstrap', get_template_directory_uri() . '/vendor/bootstrap-src/css/bootstrap.min.css', array( 'beatsmandu-shop-style' ), '4.1.2' );

	// Theme styles.
	wp_enqueue_style( 'beatsmandu-shop-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

	// Loading main stylesheet.
	wp_enqueue_style( 'main-css', get_theme_file_uri( '/assets/css/main.css' ), array( 'beatsmandu-shop-style' ), wp_get_theme()->get( 'Version' ) );

	// Loading mediascreen stylesheet.
	wp_enqueue_style( 'mediascreen-css', get_theme_file_uri( '/assets/css/mediascreen.css' ), array( 'beatsmandu-shop-style' ), wp_get_theme()->get( 'Version' ) );

	// Add font-awesome fonts, used in the main stylesheet.
	wp_enqueue_style( 'beatsmandu-shop-font-awesome', get_theme_file_uri( '/assets/font-awesome-5.7.2/css/all.css' ), array( 'beatsmandu-shop-style' ), '5.7.2' );

	// Bootstrap core JavaScript: jQuery first, then Popper.js, then Bootstrap JS.
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'beatsmandu-shop-popper', get_template_directory_uri() . '/vendor/bootstrap-src/js/popper.min.js', array(), '1.14.3', true );
	wp_enqueue_script( 'beatsmandu-shop-bootstrap', get_template_directory_uri() . '/vendor/bootstrap-src/js/bootstrap.min.js', array(), '4.1.2', true );

	// Theme added JavaScript: Added by Developers.
	wp_enqueue_script( 'beatsmandu-shop-basic', get_template_directory_uri() . '/assets/js/basic.js', array(), wp_get_theme()->get( 'Version' ), true );

	// Loading slick-slide js.
	wp_enqueue_script( 'slick-js', get_theme_file_uri( '/assets/js/slick.js' ), array(), '1.0.0', true );

	// Font Montserrat (Google Font)
	wp_enqueue_style( 'beatsmandu-shop-custom-google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700,800,900&display=swap', false );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'beatsmandu_shop_scripts' );

/**
 * Add extra items in menu
 *
 * @since 1.0.0
 *
 * @param array $items item to b added.
 * @param object $args args object.
 */

function beatsmandu_shop_add_menu_item( $items, $args ) {
	if ( class_exists( 'Easy_Digital_Downloads' ) ) {
		if ( 'primary' === $args->theme_location ) {
			$class = '';
			if ( is_page( 'my-account' ) ) {
				$class = 'current-menu-item';
			}
			if ( is_user_logged_in() ) {
				$items .= '<li class= "menu-item ' . $class . '"><a class="nav-link" href = ' . home_url() . '/my-account>My Account</a></li>';
			} else {
				$items .= '<li class= "menu-item ' . $class . '"><a class="nav-link" href = ' . home_url() . '/my-account>Log In</a></li>';
			}
		}
	}
	return $items;
}
	add_filter( 'wp_nav_menu_items', 'beatsmandu_shop_add_menu_item', 10, 2 );

/**
 * Load theme required files.
 */
require get_template_directory() . '/inc/init.php';

function beatsmandu_shop_add_classes_on_link_attributes( $classes ) {
	$classes['class'] = 'nav-link';
	return $classes;
}
add_filter( 'nav_menu_link_attributes', 'beatsmandu_shop_add_classes_on_link_attributes' );

/** Post Widget with images **/
require get_template_directory() . '/inc/post_widget.php';



