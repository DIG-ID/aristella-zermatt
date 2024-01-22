<?php
/**
 * Template Name: Contact Page Template
 */

get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		do_action( 'before_main_content' );
			get_template_part( 'template-parts/pages/contact/hero' );
			get_template_part( 'template-parts/modules/voucher', 'bar' );
			get_template_part( 'template-parts/pages/contact/content' );
	endwhile;
endif;
get_footer();
