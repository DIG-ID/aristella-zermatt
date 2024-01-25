<?php
get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		do_action( 'before_main_content' );
			do_action( 'before_post_content' );
				get_template_part( 'template-parts/posts/zimmer/hero' );
                get_template_part( 'template-parts/modules/voucher', 'bar' );
				get_template_part( 'template-parts/posts/zimmer/intro' );
				get_template_part( 'template-parts/posts/zimmer/amenities' );
				get_template_part( 'template-parts/posts/zimmer/gallery' );
			do_action( 'after_post_content' );
		do_action( 'after_main_content' );
	endwhile;
endif;
get_footer();