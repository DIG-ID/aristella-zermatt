<?php
/**
 * Template Name: Jobs Page Template
 */

get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		do_action( 'before_main_content' ); ?>
			<script src="<?php echo get_stylesheet_directory_uri(); ?>/dist/bundle.js" defer></script>	
            <?php get_template_part( 'template-parts/pages/jobs/content' );
	endwhile;
endif;
get_footer();
