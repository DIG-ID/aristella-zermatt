<?php
/**
 * Template Name: Restaurant Page Template
 */

get_header( 'restaurant' );
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		do_action( 'before_main_content' );
			get_template_part( 'template-parts/pages/restaurant/hero' );
			get_template_part( 'template-parts/modules/voucher-bar', 'restaurant' );
			get_template_part( 'template-parts/pages/restaurant/intro' );
			get_template_part( 'template-parts/pages/restaurant/features' );
			get_template_part( 'template-parts/pages/restaurant/menus' );
			get_template_part( 'template-parts/pages/restaurant/spycher' );
	endwhile;
endif;
get_footer();
