<section class="section-hero mt-16 xl:mt-[92px] overflow-hidden">
	<div class="ar-container-grid">
		<div class="col-span-1 md:col-span-8 xl:col-span-12">
			<div class="hero__content absolute w-full z-30 left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 text-center">
				<h2 class="font-primary_bold text-beige text-[56px] text-shadow-aris"><?php the_field( 'hero_title' ); ?></h2>
				<?php 
				$link = get_field('hero_button_link');
				if( $link ): 
					$link_url = $link['url'];
					$link_title = $link['title'];
					$link_target = $link['target'] ? $link['target'] : '_self';
					?>
					<a class="btn-small inline-block" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				<?php endif; ?>
			</div>
			<?php
			$slider = get_field( 'hero_hero_slider' );
			if ( $slider ) :
				?>
				<div class="swiper hero-swiper max-h-[730px]">
					<div class="swiper-wrapper">
						<?php
						$counter = 0;
						foreach ( $slider as $slider_id ) :
							?>
							<div class="swiper-slide">
								<div class="slide-bg slide-bg--<?php echo esc_attr( $counter ); ?> w-full min-h-[530px] md:min-h-[750px] xl:min-h-[760px] bg-cover" style="background-image: url('<?php echo esc_url( wp_get_attachment_image_url( $slider_id, 'full' ) ); ?>');background-size: cover; background-repeat: no-repeat;"></div>
								<?php /*echo wp_get_attachment_image( $slider_id, 'full', false, array( 'class' => 'w-full object-cover min-h-[530px] md:min-h-[750px] xl:min-h-[760px]', 'loading' => 'lazy' ) );*/ ?>
							</div>
							<?php
							$counter++;
						endforeach;
						?>
					</div>
				</div>
				<?php
			endif;
			?>
		</div>
	</div>
</section>
<section class="section-voucher bg-black py-6 z-30 relative">
	<div class="grid grid-cols-1 md:grid-cols-5 xl:grid-cols-5 items-start">
		<div class="col-span-1 flex justify-center">
			<!-- TrustYou Widget -->
			<iframe src="https://api.trustyou.com/hotels/0c0da902-e28d-4826-b674-679d075a59b7/seal.html?key=645d3a3a-45b8-4316-93c1-cf42411a5470&amp;size=l&amp;scale=5" width="125px" height="101px" frameborder="0" scrolling="no"></iframe>
			<!-- /TrustYou Widget -->
		</div>

		<div class="col-span-3">
			<div id="sb-container"></div>
		</div>

		<div class="col-span-1 relative">
			<a class="text-3xl uppercase text-beige text-center" href="https://www.aristella-zermatt.ch/vouchershop" target="_blank">
				<span class="font-primary_black block"><?php esc_html_e( 'GUTSCHEIN', 'aristella' ) ?></span>
				<span class="font-primary_light block font-bold"><?php esc_html_e( 'SHOP', 'aristella' ) ?></span>
			</a>
			<a class="text-sm uppercase text-beige text-center block bg-no-repeat absolute top-[-3.3rem] left-1/2 -translate-x-1/2 w-[180px] h-[80px]" href="https://www.aristella-zermatt.ch/vouchershop" target="_blank">
				<img class="absolute" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/vouchers-band.png" alt="vouchers" title="vouchers">
				<span class="font-primary_light_cn_italic block z-30 relative pt-[6px]"><?php esc_html_e( 'ONLINE KAUFEN', 'aristella' ) ?></span>
			</a>
		</div>
	</div>
</section>
