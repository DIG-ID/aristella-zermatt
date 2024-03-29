<?php
/**
 * Template Name: Home Template
 */

get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		do_action( 'before_main_content' );
			get_template_part( 'template-parts/pages/home/hero' );
			get_template_part( 'template-parts/modules/voucher', 'bar' );
			get_template_part( 'template-parts/pages/home/intro' );
			get_template_part( 'template-parts/pages/home/teasers' );
			get_template_part( 'template-parts/pages/home/hosts' );
			get_template_part( 'template-parts/pages/home/history' );
			get_template_part( 'template-parts/pages/home/benis' );
			get_template_part( 'template-parts/pages/home/events' );
			get_template_part( 'template-parts/pages/home/specials' );
			get_template_part( 'template-parts/pages/home/restaurant' );
		do_action( 'after_main_content' );
	endwhile;
endif;
get_footer();
