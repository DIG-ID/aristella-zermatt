<?php

get_header();
do_action( 'before_main_content' );
	get_template_part( 'template-parts/archives/zimmer/hero' );
    get_template_part( 'template-parts/modules/voucher', 'bar' );
	get_template_part( 'template-parts/archives/zimmer/toknow' );
	get_template_part( 'template-parts/archives/zimmer/rooms' );
	get_template_part( 'template-parts/archives/zimmer/apartments' );
do_action( 'after_main_content' );
get_footer();
