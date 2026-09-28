<?php
/**
 * SimpleBooking widget (Syncro Box v4).
 *
 * The widget is only loaded on pages that actually render the box:
 * az_simplebooking_box() prints the container and flags the request, and the
 * loader is printed once in the footer.
 *
 * @package aristella-zermatt
 */

/**
 * The Simple Booking hotel id.
 */
if ( ! defined( 'AZ_SIMPLEBOOKING_ID' ) ) :
	define( 'AZ_SIMPLEBOOKING_ID', '4128' );
endif;

/**
 * The site's own GA4 measurement id (from the GTM-TQFHKLT container).
 *
 * Without it the widget falls back to Simple Booking's own GA4 ids, never
 * reads our client/session and the booking engine URL comes out with no _gl.
 */
if ( ! defined( 'AZ_SIMPLEBOOKING_GA4_ID' ) ) :
	define( 'AZ_SIMPLEBOOKING_GA4_ID', 'G-V9DWWVCDLH' );
endif;

/**
 * Current WPML language code (de, en, fr).
 *
 * @return string
 */
function az_simplebooking_site_lang() {
	$site_lang = null;

	if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE ) {
		$site_lang = ICL_LANGUAGE_CODE;
	}

	if ( ! $site_lang && has_filter( 'wpml_current_language' ) ) {
		$site_lang = apply_filters( 'wpml_current_language', null );
	}

	return $site_lang ? $site_lang : 'de';
}

/**
 * Container id per language - the styles in _simple-booking.sass rely on these.
 *
 * @return string
 */
function az_simplebooking_container_id() {
	$container_map = [
		'en' => 'sb-container-2',
		'fr' => 'sb-container-3',
	];

	return $container_map[ az_simplebooking_site_lang() ] ?? 'sb-container';
}

/**
 * Build the Syncro Box configuration.
 *
 * @return array
 */
function az_simplebooking_config() {

	$map = [
		'de' => 'DE',
		'en' => 'EN',
		'fr' => 'FR',
	];

	$config = [
		'MainContainerId'   => az_simplebooking_container_id(),
		'CodLang'           => $map[ az_simplebooking_site_lang() ] ?? 'DE',
		'Currency'          => 'CHF',
		'GoogleAnalyticsId' => AZ_SIMPLEBOOKING_GA4_ID,

		/*
		 * Both are declared explicitly on purpose: the widget ships
		 * ForwardConsentState as false and tests it with a strict === true,
		 * so leaving it out means sb_consent never reaches the booking engine.
		 */
		'ForwardTrackingParams' => true,
		'ForwardConsentState'   => true,

		'Labels' => [
			'NumAdults' => [
				'DE' => 'Pers.',
				'EN' => 'Pers.',
				'FR' => 'Pers.',
			],
		],

		'Styles' => [
			'CustomColor'                      => '#3e2d01',
			'CustomLabelColor'                 => '#fff3e1',
			'CustomButtonColor'                => '#fff3e1',
			'CustomButtonBGColor'              => '#de3636',
			'CustomButtonHoverBGColor'         => '#de3636',
			'CustomBGColor'                    => '#45454c',
			'CustomIconColor'                  => '#fff3e1',
			'CustomLinkColor'                  => '#fff3e1',
			'CustomFieldBackgroundColor'       => '#FFFFFF',
			'CustomFieldColor'                 => '#3e2d01',
			'CustomWidgetBGColor'              => '#FFFFFF',
			'CustomSelectedDaysColor'          => '#FFFFFF',
			'CustomCalendarBackgroundColor'    => '#FFFFFF',
			'CustomWidgetColor'                => '#3e2d01',
			'CustomWidgetElementHoverColor'    => '#de3636',
			'CustomWidgetElementHoverBGColor'  => '#de3636',
			'CustomBoxShadowColor'             => '#de3636',
			'CustomBoxShadowColorHover'        => '#de3636',
			'CustomIntentSelectionColor'       => '#de3636',
			'CustomIntentSelectionDaysBGColor' => '#de3636',
			'CustomColorHover'                 => '#de3636',
			'CustomLabelHoverColor'            => '#de3636',
			'CustomBoxShadowColorFocus'        => '#de3636',
			'CustomAddRoomBoxShadowColor'      => '#de3636',
			'CustomAccentColor'                => '#de3636',
			'FontFamily'                       => '"Univers LT Std", sans-serif',
		],
	];

	return apply_filters( 'az_simplebooking_config', $config );
}

/**
 * Whether the box has been rendered on the current request.
 *
 * @param bool|null $set Pass true to flag the request.
 *
 * @return bool
 */
function az_simplebooking_rendered( $set = null ) {
	static $rendered = false;
	if ( true === $set ) {
		$rendered = true;
	}
	return $rendered;
}

/**
 * Render the Syncro Box container and flag the loader for the footer.
 */
function az_simplebooking_box() {
	az_simplebooking_rendered( true );
	?>
	<div id="<?php echo esc_attr( az_simplebooking_container_id() ); ?>"></div>
	<?php
}

/**
 * Print the loader and the box configuration, only if the box was rendered.
 */
function az_simplebooking_print_script() {

	if ( ! az_simplebooking_rendered() ) {
		return;
	}

	$src = 'https://cdn.simplebooking.it/search-box-script.axd?IDA=' . rawurlencode( AZ_SIMPLEBOOKING_ID );
	?>
	<script type="text/javascript" data-cfasync="false" data-no-optimize="1" data-no-defer="1">
		/*
		 * The widget calls window.gtag('get', ...) to read the GA4 client and
		 * session id, and bails out when window.gtag is undefined. GTM alone
		 * does not always define it, so make sure the standard stub exists.
		 */
		window.dataLayer = window.dataLayer || [];
		if (typeof window.gtag !== 'function') {
			window.gtag = function () { window.dataLayer.push(arguments); };
		}

		(function (i, s, o, g, r, a, m) {
			i['SBSyncroBoxParam'] = r; i[r] = i[r] || function () {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date(); a = s.createElement(o),
			m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
		})(window, document, 'script', <?php echo wp_json_encode( $src ); ?>, 'SBSyncroBox');

		SBSyncroBox(<?php echo wp_json_encode( az_simplebooking_config() ); ?>);
	</script>
	<?php
}

add_action( 'wp_footer', 'az_simplebooking_print_script', 20 );

/**
 * Keep WP Rocket from delaying, deferring or minifying the booking widget:
 * the box would only render after the first user interaction otherwise.
 *
 * @param array $excluded The current exclusions.
 *
 * @return array
 */
function az_simplebooking_rocket_exclusions( $excluded ) {
	$excluded[] = 'cdn.simplebooking.it';
	$excluded[] = 'SBSyncroBox';
	return $excluded;
}

add_filter( 'rocket_delay_js_exclusions', 'az_simplebooking_rocket_exclusions' );
add_filter( 'rocket_exclude_defer_js', 'az_simplebooking_rocket_exclusions' );
add_filter( 'rocket_minify_excluded_external_js', 'az_simplebooking_rocket_exclusions' );
