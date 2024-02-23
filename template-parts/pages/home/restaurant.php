<section class="section-restaurant overflow-hidden bg-beige pt-14 pb-24 relative">
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
            $classes = 'w-full fade-in';
            if( $restaurantImg ) {
                echo wp_get_attachment_image( $restaurantImg, $size, false, array('class' => $classes) );
            } ?>
        </div>
        <div class="col-span-1 md:col-span-8 xl:col-span-6 xl:py-5 xl:px-10 bg__restaurant flex flex-col justify-between">
            <div class="text__restaurant bg-black xl:bg-inherit py-5 px-10">
                <h3 class="font-primary_cn_italic text-beige text-[22px] tracking-[-0.015em] leading-[1.7] mb-5"><?php the_field( 'restaurant_title' ); ?></h3>
                <p class="text-body text-beige"><?php the_field( 'restaurant_text' ); ?></p>
                <a href="<?php the_field( 'restaurant_call_to_action' ); ?>"><i class="icomoon-square-white"></i></a>
            </div>
            <?php
            $language_code = ICL_LANGUAGE_CODE;
            $translated_text_p = '';
            $translated_text = '';
            switch ($language_code) {
                case 'en':
                    $translated_text = __('online', 'aristella');
                    $translated_text_p = __('or', 'aristella');
                    break;
                case 'fr':
                    $translated_text = __('ligne', 'aristella');
                    $translated_text_p = __('en', 'aristella');
                    break;
                default:
                    $translated_text = __('online', 'aristella');
                    $translated_text_p = __('oder', 'aristella');
            } ?>
            <div class="text__bar pt-8 xl:pt-0 pb-2 py-5 px-10 bg-beige xl:bg-inherit">
                <h3 class="font-primary_cn_italic font-bold text-black text-[22px] tracking-[-0.015em] leading-[1.7] mb-5 md:max-w-[280px]"><?php the_field( 'restaurant_bar_title' ); ?></h3>
                <p class="text-body text-black"><?php the_field( 'restaurant_bar_text' ); ?></p>
                <a href="<?php the_field( 'restaurant_bar_call_to_action' ); ?>"><i class="icomoon-square-black"></i></a>
                <p class="text-body text-beige mt-16 absolute xl:relative bottom-0 left-0 bg-red xl:bg-transparent px-10 py-5 xl:p-0 w-full xl:w-auto"><?php esc_html_e( 'Tischreservation: ', 'aristella' ); ?><?php the_field( 'restaurant_phone_number' ); ?>&nbsp;<?php echo esc_html($translated_text_p); ?>&nbsp;<a href="javascript:;" onclick="Localina.startBooking('5afc91f1-648b-45f1-a57a-31a123c91269', 'https://www.mylocalina.ch');" class="underline"><?php echo esc_html($translated_text); ?></a></p>
            </div>
        </div>
    </div>
</section>