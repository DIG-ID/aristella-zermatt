<section class="section-voucher bg-black py-6 z-30 relative">
	<div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-5 items-start">
		<div class="col-span-1 hidden lg:flex justify-center mb-10 lg:mb-0">
			<!-- TrustYou Widget -->
			<iframe src="https://api.trustyou.com/hotels/0c0da902-e28d-4826-b674-679d075a59b7/seal.html?key=645d3a3a-45b8-4316-93c1-cf42411a5470&amp;size=l&amp;scale=5" width="125px" height="101px" frameborder="0" scrolling="no"></iframe>
			<!-- /TrustYou Widget -->
		</div>

		<div class="col-span-3 hidden lg:block">
			<div id="<?php echo (ICL_LANGUAGE_CODE == 'en') ? 'sb-container-2' : ((ICL_LANGUAGE_CODE == 'fr') ? 'sb-container-3' : 'sb-container'); ?>"></div>
		</div>

		<div class="col-span-1 relative grid lg:block">
			<a class="text-3xl uppercase text-beige text-center order-2 lg:order-1 -mt-5 lg:mt-0" href="<?php the_field( 'general_vouchershop_url', 'option' ); ?>" target="_blank">
				<span class="font-primary_black block"><?php esc_html_e( 'GUTSCHEIN', 'aristella' ) ?></span>
				<span class="font-primary_light block font-bold"><?php esc_html_e( 'SHOP', 'aristella' ) ?></span>
			</a>
			<a class="text-sm uppercase text-beige text-center block bg-no-repeat relative lg:absolute lg:top-[-3.3rem] left-1/2 -translate-x-1/2 w-[180px] h-[80px] order-1 lg:order-2" href="<?php the_field( 'general_vouchershop_url', 'option' ); ?>" target="_blank">
				<img class="absolute" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/vouchers-band.png" alt="vouchers" title="vouchers">
				<span class="font-primary_light_cn_italic block z-30 relative pt-[6px]"><?php esc_html_e( 'ONLINE KAUFEN', 'aristella' ) ?></span>
			</a>
		</div>
	</div>
</section>