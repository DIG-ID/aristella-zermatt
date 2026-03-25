<?php
/**
 * SimpleBooking widget
 *
 * @package aristella-zermatt
 * Loaded in footer to keep it off the critical path.
 * The async loader queues SBSyncroBox() calls internally,
 * so moving to footer has no effect on widget behaviour.
 */

function aristella_simplebooking_widget() {
	?>
	<script>
		(function (i, s, o, g, r, a, m) {
			i['SBSyncroBoxParam'] = r; i[r] = i[r] || function () {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date(); a = s.createElement(o),
			m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
		})(window, document, 'script', 'https://cdn.simplebooking.it/search-box-script.axd?IDA=4128', 'SBSyncroBox');

		const sbStyles = {
			CustomColor:                       "#3e2d01",
			CustomLabelColor:                  "#fff3e1",
			CustomButtonColor:                 "#fff3e1",
			CustomButtonBGColor:               "#de3636",
			CustomButtonHoverBGColor:          "#de3636",
			CustomBGColor:                     "#45454c",
			CustomIconColor:                   "#fff3e1",
			CustomLinkColor:                   "#fff3e1",
			CustomFieldBackgroundColor:        "#FFFFFF",
			CustomFieldColor:                  "#3e2d01",
			CustomWidgetBGColor:               "#FFFFFF",
			CustomSelectedDaysColor:           "#FFFFFF",
			CustomCalendarBackgroundColor:     "#FFFFFF",
			CustomWidgetColor:                 "#3e2d01",
			CustomWidgetElementHoverColor:     "#de3636",
			CustomWidgetElementHoverBGColor:   "#de3636",
			CustomBoxShadowColor:              "#de3636",
			CustomBoxShadowColorHover:         "#de3636",
			CustomIntentSelectionColor:        "#de3636",
			CustomIntentSelectionDaysBGColor:  "#de3636",
			CustomColorHover:                  "#de3636",
			CustomLabelHoverColor:             "#de3636",
			CustomBoxShadowColorFocus:         "#de3636",
			CustomAddRoomBoxShadowColor:       "#de3636",
			CustomAccentColor:                 "#de3636",
			FontFamily:                        "Univers LT Std",
		};

		SBSyncroBox({ CodLang: 'DE', Currency: 'CHF', Labels: { NumAdults: { DE: 'Pers.' } }, Styles: sbStyles });
		SBSyncroBox({ CodLang: 'EN', Currency: 'CHF', MainContainerId: 'sb-container-2', Labels: { NumAdults: { EN: 'Pers.' } }, Styles: sbStyles });
		SBSyncroBox({ CodLang: 'FR', Currency: 'CHF', MainContainerId: 'sb-container-3', Labels: { NumAdults: { FR: 'Pers.' } }, Styles: sbStyles });
	</script>
	<?php
}

add_action( 'wp_footer', 'aristella_simplebooking_widget', 20 );
