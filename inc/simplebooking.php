<?php
/**
 * SimpleBooking widget
 *
 * @package aristella-zermatt
 */

add_action( 'wp_enqueue_scripts', function () {

	$hotel_id = '4128';

	// Detect current language via WPML
	$site_lang = null;

	if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE ) {
		$site_lang = ICL_LANGUAGE_CODE;
	}

	if ( ! $site_lang && has_filter( 'wpml_current_language' ) ) {
		$site_lang = apply_filters( 'wpml_current_language', null );
	}

	$map = [
		'de' => 'DE',
		'en' => 'EN',
		'fr' => 'FR',
	];

	$lang = $map[ $site_lang ] ?? 'DE';

	wp_register_script( 'simplebooking-syncrobox', false, [], null, true );
	wp_enqueue_script( 'simplebooking-syncrobox' );

	$inline = "
		(function (i, s, o, g, r, a, m) {
			i['SBSyncroBoxParam'] = r; i[r] = i[r] || function () {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date(); a = s.createElement(o),
			m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
		})(window, document, 'script', 'https://cdn.simplebooking.it/search-box-script.axd?IDA=" . esc_js( $hotel_id ) . "', 'SBSyncroBox');

		SBSyncroBox({
			CodLang: '" . esc_js( $lang ) . "',
			Currency: 'CHF',

			Labels: {
				NumAdults: {
					DE: 'Pers.',
					EN: 'Pers.',
					FR: 'Pers.'
				}
			},

			Styles: {
				CustomColor:                      '#3e2d01',
				CustomLabelColor:                 '#fff3e1',
				CustomButtonColor:                '#fff3e1',
				CustomButtonBGColor:              '#de3636',
				CustomButtonHoverBGColor:         '#de3636',
				CustomBGColor:                    '#45454c',
				CustomIconColor:                  '#fff3e1',
				CustomLinkColor:                  '#fff3e1',
				CustomFieldBackgroundColor:       '#FFFFFF',
				CustomFieldColor:                 '#3e2d01',
				CustomWidgetBGColor:              '#FFFFFF',
				CustomSelectedDaysColor:          '#FFFFFF',
				CustomCalendarBackgroundColor:    '#FFFFFF',
				CustomWidgetColor:                '#3e2d01',
				CustomWidgetElementHoverColor:    '#de3636',
				CustomWidgetElementHoverBGColor:  '#de3636',
				CustomBoxShadowColor:             '#de3636',
				CustomBoxShadowColorHover:        '#de3636',
				CustomIntentSelectionColor:       '#de3636',
				CustomIntentSelectionDaysBGColor: '#de3636',
				CustomColorHover:                 '#de3636',
				CustomLabelHoverColor:            '#de3636',
				CustomBoxShadowColorFocus:        '#de3636',
				CustomAddRoomBoxShadowColor:      '#de3636',
				CustomAccentColor:                '#de3636',
				FontFamily:                       '\"Univers LT Std\", sans-serif'
			}
		});
	";

	wp_add_inline_script( 'simplebooking-syncrobox', $inline, 'after' );

}, 20 );
