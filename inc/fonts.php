<?php
/**
 * Font face declarations and preloads
 *
 * @package aristella-zermatt
 */

if ( ! function_exists( 'aristella_get_font_face_styles' ) ) :

	function aristella_get_font_face_styles() {

		return "

			/* Univers LT Std */
			@font-face {
				font-family: 'Univers LT Std';
				src: url('https://www.aristella-zermatt.ch/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd.woff2') format('woff2'),
					url('https://www.aristella-zermatt.ch/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd.woff') format('woff');
				font-weight: normal;
				font-style: normal;
				font-display: swap;
			}

			/* Univers LT Std Obl */
			@font-face {
				font-family: 'Univers LT Std Obl';
				src: url('https://www.aristella-zermatt.ch/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-Obl.woff2') format('woff2'),
					url('https://www.aristella-zermatt.ch/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-Obl.woff') format('woff');
				font-weight: normal;
				font-style: italic;
				font-display: swap;
			}

			/* Univers LT Std Cn */
			@font-face {
				font-family: 'Univers LT Std Cn';
				src: url('https://www.aristella-zermatt.ch/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-Cn.woff2') format('woff2'),
					url('https://www.aristella-zermatt.ch/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-Cn.woff') format('woff');
				font-weight: normal;
				font-style: normal;
				font-display: swap;
			}

			/* Univers LT Std CnObl */
			@font-face {
				font-family: 'Univers LT Std CnObl';
				src: url('https://www.aristella-zermatt.ch/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-CnObl.woff2') format('woff2'),
					url('https://www.aristella-zermatt.ch/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-CnObl.woff') format('woff');
				font-weight: normal;
				font-style: italic;
				font-display: swap;
			}

			/* Univers LT Std Black */
			@font-face {
				font-family: 'Univers LT Std Black';
				src: url('https://www.aristella-zermatt.ch/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-Black.woff2') format('woff2'),
					url('https://www.aristella-zermatt.ch/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-Black.woff') format('woff');
				font-weight: 900;
				font-style: normal;
				font-display: swap;
			}

			/* Univers LT Std Bold */
			@font-face {
				font-family: 'Univers LT Std Bold';
				src: url('https://www.aristella-zermatt.ch/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-Bold.woff2') format('woff2'),
					url('https://www.aristella-zermatt.ch/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-Bold.woff') format('woff');
				font-weight: bold;
				font-style: normal;
				font-display: swap;
			}

			/* Univers LT Std Bold Cn */
			@font-face {
				font-family: 'Univers LT Std Bold Cn';
				font-weight: bold;
				font-style: normal;
				font-display: swap;
				src: url('https://www.aristella-zermatt.ch/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-BoldCn.woff2') format('woff2'),
					url('https://www.aristella-zermatt.ch/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-BoldCn.woff') format('woff');
			}

			/* Univers LT Light */
			@font-face {
				font-family: 'Univers LT Std Light';
				src: url('https://www.aristella-zermatt.ch/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-Light.woff2') format('woff2'),
					url('https://www.aristella-zermatt.ch/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-Light.woff') format('woff');
				font-weight: 300;
				font-style: normal;
				font-display: swap;
			}

			/* Univers LT Light Obl */
			@font-face {
				font-family: 'Univers LT Std Light Obl';
				src: url('https://www.aristella-zermatt.ch/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-LightObl.woff2') format('woff2'),
					url('https://www.aristella-zermatt.ch/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-LightObl.woff') format('woff');
				font-weight: 300;
				font-style: italic;
				font-display: swap;
			}

			/* Univers LT Light Cn */
			@font-face {
				font-family: 'Univers LT Light Cn';
				src: url('https://www.aristella-zermatt.ch/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-LightCn.woff2') format('woff2'),
					url('https://www.aristella-zermatt.ch/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-LightCn.woff') format('woff');
				font-weight: 300;
				font-style: normal;
				font-display: swap;
			}

			/* Univers LT Std Light CnObl */
			@font-face {
				font-family: 'Univers LT Std Light CnObl';
				src: url('https://www.aristella-zermatt.ch/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-LightCnObl.woff2') format('woff2'),
					url('https://www.aristella-zermatt.ch/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-LightCnObl.woff') format('woff');
				font-weight: 300;
				font-style: italic;
				font-display: swap;
			}

			/* Univers LT Std Light Ultra */
			@font-face {
				font-family: 'Univers LT Std Light Ultra';
				src: url('https://www.aristella-zermatt.ch/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-LightUltraCn.woff2') format('woff2'),
					url('https://www.aristella-zermatt.ch/wp-content/themes/aristella-zermatt/assets/fonts/UniversLTStd-LightUltraCn.woff') format('woff');
				font-weight: 300;
				font-display: swap;
			}

			/* Icomoon */
			@font-face {
				font-family: 'icomoon';
				src: url('https://www.aristella-zermatt.ch/wp-content/themes/aristella-zermatt/assets/fonts/icomoon.woff?fmmubg') format('woff');
				font-weight: normal;
				font-style: normal;
				font-display: swap;
			}

		";

	}

endif;

// Preload critical fonts (body + title) to reduce critical path latency
add_action( 'wp_head', function() {
	$fonts_uri = get_template_directory_uri() . '/assets/fonts';
	echo '<link rel="preload" as="font" type="font/woff2" crossorigin href="' . $fonts_uri . '/UniversLTStd-Cn.woff2">' . "\n";
	echo '<link rel="preload" as="font" type="font/woff2" crossorigin href="' . $fonts_uri . '/UniversLTStd-BoldCn.woff2">' . "\n";
}, 1 );
