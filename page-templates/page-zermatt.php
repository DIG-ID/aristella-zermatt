<?php
/**
 * Template Name: Zermatt Page Template
 */

get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		do_action( 'before_main_content' );
			get_template_part( 'template-parts/pages/zermatt/hero' );
			get_template_part( 'template-parts/modules/voucher', 'bar' );
            get_template_part( 'template-parts/pages/zermatt/intro' );
			get_template_part( 'template-parts/pages/home/benis' );
			get_template_part( 'template-parts/pages/specials/shop' );
			get_template_part( 'template-parts/pages/home/events' );
	endwhile;
endif;
get_footer();
