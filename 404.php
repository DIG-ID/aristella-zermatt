<?php
get_header();
do_action( 'before_main_content' );
?>
<section class="section-error-404 bg-beige overflow-hidden pt-64 pb-40">
	<div class="ar-container-grid">
        <div class="ar-container-small">
            <div class="col-span-1 md:col-span-8 xl:col-span-12 px-7 lg:px-0 items-center justify-center text-center">
				<img class="w-14 mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/face-frown.svg" alt="vouchers" title="vouchers">
				<h1 class="font-primary_cn font-normal text-5xl text-black py-5"><?php esc_html_e( 'Error 404', 'aristella' ); ?></h1>
				<p class="text-body pb-7"><?php esc_html_e( 'Leider konnten wir diese Seite nicht finden!', 'aristella' ); ?></p>
				<a href="<?php echo esc_url( get_home_url() ); ?>" class="btn-normal"><?php esc_html_e( 'ZUR STARTSEITE', 'aristella' ); ?></a>
			</div>
		</div>
	</div>
</section>
<?php
do_action( 'after_main_content' );
get_footer();