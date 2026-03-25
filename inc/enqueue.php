<?php
/**
 * Enqueue scripts and styles
 *
 * @package aristella-zermatt
 */

function aristella_theme_enqueue_styles() {

	$the_theme     = wp_get_theme();
	$theme_version = $the_theme->get( 'Version' );

	// Register and enqueue main stylesheet with inline font faces
	wp_register_style( 'theme-styles', get_stylesheet_directory_uri() . '/dist/css/main.css', array(), $theme_version );
	wp_add_inline_style( 'theme-styles', aristella_get_font_face_styles() );
	wp_enqueue_style( 'theme-styles' );

	// Scripts — jQuery loaded automatically via dependency declaration
	wp_enqueue_script( 'theme-scripts', get_stylesheet_directory_uri() . '/dist/js/main.js', array( 'jquery' ), $theme_version, true );

	// Google Maps — only on contact page and zimmer single
	if ( is_page_template( 'page-templates/page-contact.php' ) || is_singular( 'zimmer' ) ) :
		wp_enqueue_script( 'google-map-settings', get_stylesheet_directory_uri() . '/assets/js/google-maps.js', array( 'jquery' ), $theme_version, true );
		wp_enqueue_script( 'google-map-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBAZN5TfX1aWmjodZ4e_6sOcaJV4D59jfo&callback=initMap', array(), null, true );
		wp_script_add_data( 'google-map-api', 'strategy', 'async' );
	endif;
}

add_action( 'wp_enqueue_scripts', 'aristella_theme_enqueue_styles' );

// MyLocalina — only on restaurant and home page templates
function add_mylocalina_script() {
	if ( is_page_template( array( 'page-templates/page-restaurant.php', 'page-templates/page-home.php' ) ) ) {
		wp_enqueue_script( 'mylocalina-script', 'https://www.mylocalina.ch/script/widget.js', array(), false, true );
	}
}

add_action( 'wp_enqueue_scripts', 'add_mylocalina_script' );

// Dequeue unnecessary frontend styles
add_action( 'wp_enqueue_scripts', function() {
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
	wp_dequeue_style( 'global-styles' );
	wp_dequeue_style( 'post-types-order' );
}, 100 );

// Preload first hero slider image on front page for LCP
add_action( 'wp_head', function() {
	if ( ! is_front_page() ) return;
	$slider = get_field( 'hero_hero_slider', get_option( 'page_on_front' ) );
	if ( empty( $slider ) ) return;
	$first_image_url = wp_get_attachment_image_url( $slider[0], 'full' );
	if ( $first_image_url ) {
		echo '<link rel="preload" as="image" href="' . esc_url( $first_image_url ) . '" fetchpriority="high">' . "\n";
	}
}, 1 );
