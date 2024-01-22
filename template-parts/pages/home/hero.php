<section class="section-hero mt-16 xl:mt-[92px] overflow-hidden max-h-[78vh] relative">
	<div class="ar-container-grid">
		<div class="col-span-1 md:col-span-8 xl:col-span-12">
			<div class="hero__content absolute w-full z-30 left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 text-center">
				<h2 class="font-primary_bold text-beige text-[16px] sm:text-[28px] lg:text-[56px] text-shadow-aris mb-5"><?php the_field( 'hero_title' ); ?></h2>
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
			<div class="hero__content absolute w-full z-30 left-1/2 -translate-x-1/2 bottom-0 text-center max-h-24">
                <a href="#section-intro" class="inline-block w-[30px] md:w-[60px]">
                    <svg class="arrowsScroll animatedArrow"><path class="a1" d="M0 0 L30 32 L60 0"></path></svg>
                </a>
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
