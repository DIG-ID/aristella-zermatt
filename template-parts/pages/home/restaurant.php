<section class="section-events overflow-hidden bg-beige pt-14 pb-24">
    <div class="ar-container-grid pb-28">
        <div class="col-span-1 md:col-span-8 xl:col-span-12 text-center">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/title-ornament-dark.png" alt="divider symbol" title="divider symbol" class="mx-auto mb-5">
            <?php 
            $restaurantLogo = get_field('restaurant_logo');
            $size = 'full';
            $classes = 'mx-auto';
            if( $restaurantLogo ) {
                echo wp_get_attachment_image( $restaurantLogo, $size, false, array('class' => $classes) );
            } ?>
        </div>
    </div>
    <div class="ar-container-grid !gap-0">
        <div class="col-span-1 md:col-span-8 xl:col-span-6">
            <?php 
            $restaurantImg = get_field('restaurant_image');
            $size = 'full';
            $classes = 'w-full';
            if( $restaurantImg ) {
                echo wp_get_attachment_image( $restaurantImg, $size, false, array('class' => $classes) );
            } ?>
        </div>
        <div class="col-span-1 md:col-span-8 xl:col-span-6 lg:py-5 lg:px-10 bg__restaurant flex flex-col justify-between">
            <div class="text__restaurant bg-black lg:bg-inherit py-5 px-10">
                <h3 class="font-primary_cn_italic text-beige text-[22px] tracking-[-0.015em] leading-[1.7] mb-5 md:max-w-[280px]"><?php the_field( 'restaurant_title' ); ?></h3>
                <p class="text-body text-beige"><?php the_field( 'restaurant_text' ); ?></p>
                <a href="<?php the_field( 'restaurant_call_to_action' ); ?>"><i class="icomoon-square-white"></i></a>
            </div>
            <div class="text__bar pt-8 lg:pt-0 pb-2 py-5 px-10 bg-beige lg:bg-inherit">
                <h3 class="font-primary_cn_italic font-bold text-black text-[22px] tracking-[-0.015em] leading-[1.7] mb-5 md:max-w-[280px]"><?php the_field( 'restaurant_bar_title' ); ?></h3>
                <p class="text-body text-black"><?php the_field( 'restaurant_bar_text' ); ?></p>
                <a href="<?php the_field( 'restaurant_bar_call_to_action' ); ?>"><i class="icomoon-square-black"></i></a>
                <p class="text-body text-black lg:text-beige mt-16"><?php esc_html_e( 'Tischreservation: ', 'aristella' ) ?><?php the_field( 'restaurant_phone_number' ); ?></p>
            </div>
        </div>
    </div>
</section>