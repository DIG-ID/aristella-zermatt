<section id="section-gallery" class="section-gallery">
    <div class="ar-container-grid bg-beige px-7 lg:px-0 py-24">
        <div class="ar-container-small">
            <div class="col-span-1 md:col-span-8 xl:col-span-12">
                <?php
                $slider = get_field( 'gallery_pictures' );
                if ( $slider ) :
                    ?>
                    <div class="swiper room-swiper max-h-[700px] mb-3">
                        <div class="swiper-wrapper">
                            <?php
                            $counter = 0;
                            foreach ( $slider as $slider_id ) :
                                ?>
                                <div class="swiper-slide">
                                    <div class="slide-bg slide-bg--<?php echo esc_attr( $counter ); ?> w-full min-h-[250px] md:min-h-[550px] xl:min-h-[760px] bg-cover" style="background-image: url('<?php echo esc_url( wp_get_attachment_image_url( $slider_id, 'full' ) ); ?>');background-size: cover; background-repeat: no-repeat;"></div>
                                    <?php /*echo wp_get_attachment_image( $slider_id, 'full', false, array( 'class' => 'w-full object-cover min-h-[530px] md:min-h-[750px] xl:min-h-[760px]', 'loading' => 'lazy' ) );*/ ?>
                                </div>
                                <?php
                                $counter++;
                            endforeach;
                            ?>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <div class="swiper room-swiper-thumbnails">
                        <div class="swiper-wrapper">
                            <?php
                            foreach ($slider as $slider_id) :
                            ?>
                            <div class="swiper-slide">
                                <img src="<?php echo esc_url(wp_get_attachment_image_url($slider_id, 'thumbnail')); ?>"
                                    alt="<?php echo esc_attr(get_post_meta($slider_id, '_wp_attachment_image_alt', true)); ?>"
                                    class="">
                            </div>
                            <?php
                            endforeach;
                            ?>
                        </div>
                    </div>
                    <?php
                endif;
                ?>
            </div>
        </div>
    </div>
</section>