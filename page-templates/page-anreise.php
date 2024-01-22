<?php
/**
 * Template Name: Anreise Page Template
 */

get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		do_action( 'before_main_content' );
			get_template_part( 'template-parts/pages/anreise/hero' );
			get_template_part( 'template-parts/modules/voucher', 'bar' );
			get_template_part( 'template-parts/pages/anreise/parking' );
			get_template_part( 'template-parts/pages/anreise/transport' );
	endwhile;
endif;
get_footer();
