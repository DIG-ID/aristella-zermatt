<section class="section-voucher bg-black py-6 z-30 relative">
	<div class="grid grid-cols-1 md:grid-cols-5 xl:grid-cols-5 items-start">
		<div class="col-span-1 flex justify-center">
			<!-- TrustYou Widget -->
			<iframe src="https://api.trustyou.com/hotels/0c0da902-e28d-4826-b674-679d075a59b7/seal.html?key=645d3a3a-45b8-4316-93c1-cf42411a5470&amp;size=l&amp;scale=5" width="125px" height="101px" frameborder="0" scrolling="no"></iframe>
			<!-- /TrustYou Widget -->
		</div>

		<div class="col-span-3 hidden lg:block">
			<div id="sb-container"></div>
		</div>

		<div class="col-span-1 relative">
			<a class="text-3xl uppercase text-beige text-center" href="/vouchershop/" target="_blank">
				<span class="font-primary_black block"><?php esc_html_e( 'GUTSCHEIN', 'aristella' ) ?></span>
				<span class="font-primary_light block font-bold"><?php esc_html_e( 'SHOP', 'aristella' ) ?></span>
			</a>
			<a class="text-sm uppercase text-beige text-center block bg-no-repeat absolute top-[-3.3rem] left-1/2 -translate-x-1/2 w-[180px] h-[80px]" href="/vouchershop/" target="_blank">
				<img class="absolute" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/vouchers-band.png" alt="vouchers" title="vouchers">
				<span class="font-primary_light_cn_italic block z-30 relative pt-[6px]"><?php esc_html_e( 'ONLINE KAUFEN', 'aristella' ) ?></span>
			</a>
		</div>
	</div>
</section>