<section class="section-features overflow-hidden relative bg-red pt-[100px]">
    
        <?php
        $plus = 1;
        if( have_rows('features_list') ):
            $iteration = 1;
            while( have_rows('features_list') ) : the_row(); ?>
            <div class="ar-container-grid !gap-0">
                <?php
                $order_class = ($iteration % 2 === 0) ? 'order-2' : 'order-1';
                ?>

                <div class="col-span-1 md:col-span-4 xl:col-span-6 <?php echo esc_attr($order_class); ?>">
                    <?php
                    $slider = get_sub_field( 'images' );
                    if ( $slider ) :
                        ?>
                        <div class="swiper restaurant-swiper<?php echo $plus; ?> relative">
                            <div class="swiper-wrapper">
                                <?php
                                $counter = 0;
                                foreach ( $slider as $slider_id ) :
                                    ?>
                                    <div class="swiper-slide">
                                        <div class="slide-bg slide-bg--<?php echo esc_attr( $counter ); ?> w-full min-h-[530px] md:min-h-[550px] xl:min-h-[640px] bg-cover" style="background-image: url('<?php echo esc_url( wp_get_attachment_image_url( $slider_id, 'full' ) ); ?>');background-size: cover; background-repeat: no-repeat;"></div>
                                    </div>
                                    <?php
                                    $counter++;
                                endforeach;
                                ?>
                            </div>
                            <div class="swiper-button-next swiper-button-next-<?php echo $plus; ?>"></div>
                            <div class="swiper-button-prev swiper-button-prev-<?php echo $plus; ?>"></div>
                        </div>
                        <?php
                    endif;
                    ?>
                </div>

                <div class="col-span-1 md:col-span-4 xl:col-span-6 features__content<?php echo $plus; ?> pt-12 px-20 <?php echo esc_attr(($order_class === 'order-1') ? 'order-2' : 'order-1'); ?>">
                    <h2 class="title-normal"><?php the_sub_field( 'title' ); ?></h2>
                    <p class="text-body"><?php the_sub_field( 'text' ); ?></p>
                </div>

                <?php
                $plus++;
                $iteration++;
                ?>
                </div>
            <?php endwhile;
        endif;
        ?>
    </div>
</section>