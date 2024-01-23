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
	endwhile;
endif;
get_footer();
