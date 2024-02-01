<section class="section-events overflow-hidden bg-red pt-14 pb-0 lg:py-14">
    <div class="grid grid-cols-1 md:grid-cols-8 xl:grid-cols-9 md:gap-4 xl:gap-9">
        <div class="col-span-1 md:col-span-8 xl:col-span-7 col-start-1 md:col-start-1 xl:col-start-2 px-7 lg:px-0">
            <div class="swiper events-swiper">
				<div class="swiper-wrapper">
					<?php
					$args = array(
						'post_type'     => 'special',
						'order'         => 'ASC',
					);
					$query = new WP_Query( $args );

					if ( $query->have_posts() ) :
						while ( $query->have_posts() ) :
							$query->the_post();
							get_template_part( 'template-parts/components/specials', 'slide' );
						endwhile;
					endif;
					wp_reset_postdata();
					?>
				</div>
			</div>
        </div>
    </div>
</section>