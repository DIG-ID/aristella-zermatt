<?php

get_header();
do_action( 'before_main_content' );
	get_template_part( 'template-parts/archives/zimmer/hero' );
    get_template_part( 'template-parts/modules/voucher', 'bar' );
do_action( 'after_main_content' );
get_footer();
