<?php
/**
 * Template Name: Wellness Page Template
 */

get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		do_action( 'before_main_content' );
			get_template_part( 'template-parts/pages/wellness/hero' );
			get_template_part( 'template-parts/modules/voucher', 'bar' );
			get_template_part( 'template-parts/pages/wellness/intro' );
			get_template_part( 'template-parts/pages/wellness/wellness' );
	endwhile;
endif;
get_footer();
