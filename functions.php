<?php
/**
 * Aristella Zermatt — Theme Functions
 *
 * @package aristella-zermatt
 */

require get_template_directory() . '/inc/setup.php';
require get_template_directory() . '/inc/fonts.php';
require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/simplebooking.php';
require get_template_directory() . '/inc/theme-template-tags.php';
require get_template_directory() . '/inc/theme-admin-settings.php';

// Exclude voucher bar from WP Rocket Lazy Render to prevent CLS
add_filter( 'rocket_lazy_render_excluded_tags', function( $excluded ) {
	$excluded[] = 'section-voucher';
	return $excluded;
} );
