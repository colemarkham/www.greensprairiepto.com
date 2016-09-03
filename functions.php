<?php
/**
 * Migration functions and definitions.
 *
 * Sets up the theme and provides some helper functions, which are used
 * in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook.
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 */


/**
 * Sets up theme defaults and registers the various WordPress features that
 * the Migration theme supports.
 *
 * @uses add_editor_style() To add a Visual Editor stylesheet.
 * @uses add_theme_support() To add support for post thumbnails
 * @uses register_nav_menu() To add support for navigation menus.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 */
function migration_setup() {

	// This theme styles the visual editor with editor-style.css to give it some niceties.
	add_editor_style();

	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Primary Menu', 'migration' ) );
	register_nav_menu( 'sidebar', __( 'Sidebar Menu', 'migration' ) );

	// This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 500, 9999 ); // Unlimited height, soft crop
	
	// Declare support for woocommerce
	add_theme_support( 'woocommerce' );

	// Let WP handle titles
	add_theme_support( 'title-tag' );
	
}
add_action( 'after_setup_theme', 'migration_setup' );

/**
 * Enqueues scripts and styles for front-end.
 */
function migration_scripts_styles() {
	global $wp_styles;

	/*
	 * Loads our main stylesheet.
	 */
	wp_enqueue_style( 'migration-style', get_stylesheet_uri() );

	/*
	 * Optional: Loads the Internet Explorer specific stylesheet.
	 */
	//wp_enqueue_style( 'migration-ie', get_template_directory_uri() . '/css/ie.css', array( 'migration-style' ), '20121010' );
	//$wp_styles->add_data( 'migration-ie', 'conditional', 'lt IE 9' );
}
add_action( 'wp_enqueue_scripts', 'migration_scripts_styles' );


// register custom post type 'my_custom_post_type'
add_action( 'init', 'create_custom_post_types' );
function create_custom_post_types() {
	register_post_type( 'feature',
			array(
					'labels' => array( 'name' => __( 'Features' ), 'singular_name' => __('Feature') ),
					'supports' => array('title','thumbnail'),
					'public' => true
			)
			);
}


add_filter( 'rwmb_meta_boxes', 'custom_meta_boxes' );
function custom_meta_boxes( $meta_boxes ) {
	$meta_boxes[] = array(
			'title'      => __( 'Feature Content' ),
			'post_types' => 'feature',
			'fields'     => array(
					array(
							'id'   => 'subtitle',
							'name' => __( 'Subtitle' ),
							'type' => 'text',
					),
					array(
							'id'      => 'page',
							'name'    => __( 'Page' ),
							'type'    => 'post',
							'post_type'   => 'page',
							'field_type'  => 'select_advanced',
					),
					array(
							'id'   => 'message',
							'name' => __( 'Message' ),
							'type' => 'text',
					),
					array(
							'id'   => 'button-text',
							'name' => __( 'Button Text' ),
							'type' => 'text',
							'std' => __( 'Learn more' ),
					),
			),
	);
	return $meta_boxes;
}
