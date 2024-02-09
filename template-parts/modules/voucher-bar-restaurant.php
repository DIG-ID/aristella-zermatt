<section class="section-voucher bg-black py-6 z-30 relative">
	<div class="grid grid-cols-1 md:grid-cols-5 xl:grid-cols-5 items-start">
		<div class="col-span-1 col-start-1 md:col-start-3 xl:col-start-3 relative">
			<a class="text-3xl uppercase text-beige text-center" href="<?php the_field( 'general_vouchershop_url', 'option' ); ?>" target="_blank">
				<span class="font-primary_black block"><?php esc_html_e( 'GUTSCHEIN', 'aristella' ) ?></span>
				<span class="font-primary_light block font-bold"><?php esc_html_e( 'SHOP', 'aristella' ) ?></span>
			</a>
			<a class="text-sm uppercase text-beige text-center block bg-no-repeat absolute -bottom-14 left-1/2 -translate-x-1/2 w-[180px] h-[32px]" href="<?php the_field( 'general_vouchershop_url', 'option' ); ?>" target="_blank">
                <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/vouchers-band-flip.png" alt="vouchers" title="vouchers">
                <span class="arrow__voucher w-full absolute bottom-2 left-1/2 -translate-x-1/2 font-primary_light_cn_italic block z-30"><?php esc_html_e( 'ONLINE KAUFEN', 'aristella' ) ?></span>
            </a>
		</div>
	</div>
</section>