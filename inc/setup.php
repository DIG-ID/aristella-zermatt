<?php
/**
 * Theme setup: supports, menus, sidebars, and misc filters
 *
 * @package aristella-zermatt
 */

function aristella_theme_setup() {

	register_nav_menus(
		array(
			'main'        => __( 'Main Menu', 'aristella' ),
			'main_mobile' => __( 'Main Menu - Mobile', 'aristella' ),
			'restaurant'  => __( 'Restaurant Menu', 'aristella' ),
			'copyright'   => __( 'Copyright Menu', 'aristella' ),
		)
	);

	add_theme_support( 'custom-logo' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

	add_post_type_support( 'page', 'excerpt' );
}

add_action( 'after_setup_theme', 'aristella_theme_setup' );

// Sidebars
function aristella_theme_footer_widgets_init() {

	register_sidebar(
		array(
			'name'          => 'Footer',
			'id'            => 'footer',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => 'Header Language Switcher',
			'id'            => 'header_ls',
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
}

add_action( 'widgets_init', 'aristella_theme_footer_widgets_init' );

// Add post category classes to body
function custom_body_classes( $classes ) {
	if ( is_single() ) {
		global $post;
		foreach ( get_the_category( $post->ID ) as $category ) {
			$classes[] = $category->category_nicename;
		}
	}
	return $classes;
}

add_filter( 'body_class', 'custom_body_classes' );

// Remove "Archives:" prefix from archive page titles
function aristella_theme_remove_archive_prefix( $title ) {
	if ( is_category() ) :
		$title = single_cat_title( '', false );
	elseif ( is_tag() ) :
		$title = single_tag_title( '', false );
	endif;
	return $title;
}

add_filter( 'get_the_archive_title', 'aristella_theme_remove_archive_prefix' );

// Google Maps ACF API key
function aristella_theme_google_map_init() {
	if ( is_admin() ) :
		acf_update_setting( 'google_api_key', 'AIzaSyBAZN5TfX1aWmjodZ4e_6sOcaJV4D59jfo' );
	endif;
}

add_action( 'acf/init', 'aristella_theme_google_map_init' );
