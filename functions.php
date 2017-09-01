<?php

if ( ! function_exists( 'base_theme_setup' ) ) :
function base_theme_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'base_theme' ),
	) );

	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'base_theme_setup' );

function base_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'base_theme_content_width', 1200 );
}
add_action( 'after_setup_theme', 'base_theme_content_width', 0 );


function base_theme_widgets_init() {
	register_sidebar( array(
		'name'          => 'Primary Sidebar',
		'id'            => 'primary-sidebar',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'base_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function base_theme_scripts() {
	$version = '20170901';
	$url = get_site_url();

	wp_enqueue_style( 'base_theme-style', get_template_directory_uri() . '/css/style.css', array(), $version );

	if ( strpos( $url, '.dev' ) !== false && file_exists( get_template_directory() . '/hot' ) ) {
		wp_enqueue_script( 'base_theme-main', '//localhost:8080/js/build/main.js', array( 'jquery' ), $version, true );
	} else {
		wp_enqueue_script( 'base_theme-main', get_template_directory_uri() . '/js/build/main.js', array( 'jquery' ), $version, true );
	}
}
add_action( 'wp_enqueue_scripts', 'base_theme_scripts' );

/**
 * Bootstrap menu walker
 */
require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
