<?php
/**
 * Setup theme
 */
function aristella_theme_setup() {

	register_nav_menus(
		array(
			'main'                    => __( 'Main Menu', 'aristella' ),
			'copyright'               => __( 'Copryright Menu', 'aristella' ),
		)
	);

	add_theme_support( 'menus' );

	add_theme_support( 'custom-logo' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

	add_post_type_support( 'page', 'excerpt' );

}

add_action( 'after_setup_theme', 'aristella_theme_setup' );

/**
 * Register our sidebars and widgetized areas.
 */
function aristella_theme_footer_widgets_init() {

	register_sidebar(
		array(
			'name'          => 'Footer',
			'id'            => 'footer',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		),
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

if ( ! function_exists( 'aristella_get_font_face_styles' ) ) :

	/**
	 * Get font face styles.
	 * Called by functions dig_theme_enqueue_styles() and twentytwentytwo_editor_styles() above.
	 */
	function aristella_get_font_face_styles() {

		return "
			
			/* Univers LT Std */
			@font-face {
				font-family: 'Univers LT Std';
				src: url('/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd.woff2') format('woff2'),
					url('/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd.woff') format('woff');
				font-weight: normal;
				font-style: normal;
			}

			/* Univers LT Std Obl */
			@font-face {
				font-family: 'Univers LT Std Obl';
				src: url('/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-Obl.woff2') format('woff2'),
					url('/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-Obl.woff') format('woff');
				src: url('/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-Obl.eot');
				src: url('/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-Obl.eot?#iefix') format('embedded-opentype'),
					url('/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-Obl.ttf') format('truetype'),
					url('/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-Obl.svg#UniversLTStd-Obl') format('svg');
				font-weight: normal;
				font-style: italic;
			}

			/* Univers LT Std Cn */
			@font-face {
				font-family: 'Univers LT Std Cn';
				src: url('/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-Cn.woff2') format('woff2'),
					url('/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-Cn.woff') format('woff');
				src: url('/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-Cn.eot');
				src: url('/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-Cn.eot?#iefix') format('embedded-opentype'),
					url('/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-Cn.ttf') format('truetype'),
					url('/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-Cn.svg#UniversLTStd-Cn') format('svg');
				font-weight: normal;
				font-style: normal;
			}

			/* Univers LT Std CnObl */
			@font-face {
				font-family: 'Univers LT Std CnObl';
				src: url('/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-CnObl.woff2') format('woff2'),
					url('/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-CnObl.woff') format('woff');
				font-weight: normal;
				font-style: italic;
			}

			/* Univers LT Std Black */
			@font-face {
				font-family: 'Univers LT Std Black';
				src: url('/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-Black.woff2') format('woff2'),
					url('/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-Black.woff') format('woff');
				font-weight: 900;
				font-style: normal;
			}

			/* Univers LT Std Bold */
			@font-face {
				font-family: 'Univers LT Std Bold';
				src: url('/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-Bold.woff2') format('woff2'),
					url('/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-Bold.woff') format('woff');
				font-weight: bold;
				font-style: normal;
			}

			/* Univers LT Std Bold Cn */
			@font-face {
				font-family: 'Univers LT Std Bold Cn';
				font-weight: bold;
				font-style: normal;
				src: url('/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-BoldCn.woff2') format('woff2'),
					url('/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-BoldCn.woff') format('woff'),
					url('/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-BoldCn.eot') format('embedded-opentype'),
					url('/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-BoldCn.ttf') format('truetype'),
					url('/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-BoldCn.svg#UniversLTStd-BoldCn') format('svg');
			}

			/* Univers LT Light */
			@font-face {
				font-family: 'Univers LT Std Light';
				src: url('/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-Light.woff2') format('woff2'),
					url('/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-Light.woff') format('woff');
				font-weight: 300;
				font-style: normal;
			}

			/* Univers LT Light Obl */
			@font-face {
				font-family: 'Univers LT Std Light Obl';
				src: url('/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-LightObl.woff2') format('woff2'),
					url('/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-LightObl.woff') format('woff');
				font-weight: 300;
				font-style: italic;
			}

			/* Univers LT Light Cn */
			@font-face {
				font-family: 'Univers LT Light Cn';
				src: url('/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-LightCn.woff2') format('woff2'),
					url('/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-LightCn.woff') format('woff');
				font-weight: 300;
				font-style: normal;
			}

			/* Univers LT Std Light CnObl */
			@font-face {
				font-family: 'Univers LT Std Light CnObl';
				src: url('/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-LightCnObl.woff2') format('woff2'),
					url('/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-LightCnObl.woff') format('woff');
				src: url('/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-LightCnObl.eot');
				src: url('/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-LightCnObl.eot?#iefix') format('embedded-opentype'),
					url('/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-LightCnObl.ttf') format('truetype'),
					url('/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-LightCnObl.svg#UniversLTStd-LightCnObl') format('svg');
				font-weight: 300;
				font-style: italic;
			}

			/* Univers LT Std Light Ultra */
			@font-face {
				font-family: 'Univers LT Std Light Ultra';
				src: url('/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-LightUltraCn.woff2') format('woff2'),
					url('/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-LightUltraCn.woff') format('woff');
				src: url('/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-LightUltraCn.eot');
				src: url('/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-LightUltraCn.eot?#iefix') format('embedded-opentype'),
					url('/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-LightUltraCn.ttf') format('truetype'),
					url('/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-LightUltraCn.svg#UniversLTStd-LightUltraCn') format('svg');
				font-weight: 300;
			}

			/* Icomoon */
			@font-face {
				font-family: 'icomoon';
				src:  url('/wp-content/themes/aristella-zermatt/assets/fonts/icomoon.eot?fmmubg');
				src:  url('/wp-content/themes/aristella-zermatt/assets/fonts/icomoon.eot?fmmubg#iefix') format('embedded-opentype'),
					url('/wp-content/themes/aristella-zermatt/assets/fonts/icomoon.ttf?fmmubg') format('truetype'),
					url('/wp-content/themes/aristella-zermatt/assets/fonts/icomoon.woff?fmmubg') format('woff'),
					url('/wp-content/themes/aristella-zermatt/assets/fonts/icomoon.svg?fmmubg#icomoon') format('svg');
				font-weight: normal;
				font-style: normal;
			}

		";

	}

endif;



/**
 * Add custom classes to posts body
 */
function custom_body_classes( $classes ) {
	if ( is_single() ) {
		global $post;
		foreach ( ( get_the_category( $post->ID ) ) as $category ) {
			$classes[] = $category->category_nicename;
		}
	}
	return $classes;
}
add_filter( 'body_class', 'custom_body_classes' );


/**
 * Enqueue styles and scripts
 */
function aristella_theme_enqueue_styles() {

	//Get the theme data
	$the_theme     = wp_get_theme(); 
	$theme_version = $the_theme->get( 'Version' );

	// Register Theme main style.
	wp_register_style( 'theme-styles', get_template_directory_uri() . '/dist/css/main.css', array(), $theme_version );

	// Add styles inline.
	wp_add_inline_style( 'theme-styles', aristella_get_font_face_styles() );

	// Enqueue theme stylesheet.
	wp_enqueue_style( 'theme-styles' );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'theme-scripts', get_stylesheet_directory_uri() . '/dist/js/main.js', array( 'jquery' ), $theme_version, false );

	/*if ( is_home() ) :
		wp_enqueue_script( 'blog-ajax', get_template_directory_uri() . '/dist/js/blog-ajax.js', array( 'jquery' ), $theme_version, true );
		wp_localize_script( 'blog-ajax', 'blog_ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
	endif;*/
}

add_action( 'wp_enqueue_scripts', 'aristella_theme_enqueue_styles' );

// Remove <p> from Contact Form 7
add_filter( 'wpcf7_autop_or_not', '__return_false' );


/**
 * Remove the "Archives:" from a custom post type archive page title.
 */
function aristella_theme_remove_archive_prefix( $title ) {
	if ( is_post_type_archive( 'category' ) ) :
		$title = post_type_archive_title( '', false );
	elseif ( is_post_type_archive( 'tag' ) ) :
		$title = post_type_archive_title( '', false );
	endif;
	return $title;
}

add_filter( 'get_the_archive_title', 'aristella_theme_remove_archive_prefix' );

// Theme custom template tags.
require get_template_directory() . '/inc/theme-template-tags.php';

// The theme admin settings
require get_template_directory() . '/inc/theme-admin-settings.php';
