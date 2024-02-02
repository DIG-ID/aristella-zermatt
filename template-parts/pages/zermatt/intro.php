<section id="section-intro" class="section-intro pt-20 overflow-hidden">
	<div class="ar-container-grid !gap-0">
        <div class="ar-container pb-28">
            <div class="col-span-1 md:col-span-8 xl:col-span-12 text-center">
                <h2 class="title-normal text-black uppercase"><?php the_field( 'intro_zermatt_title' ); ?></h2>
                <p class="title-caption text-black"><?php the_field( 'intro_zermatt_subtitle' ); ?></p>
                <img class="mx-auto mt-12" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/title-ornament-dark.png" alt="ornament" title="ornament">
            </div>
        </div>
        <div class="ar-container-small mb-8 lg:mb-28">
            <div class="col-span-1 md:col-span-8 xl:col-span-12">
                <div class="swiper activities-swiper">
				    <div class="swiper-wrapper">
                        <?php
                        $args = array(
                            'post_type'     => 'activity',
                            'order'         => 'ASC',
                        );
                        $query = new WP_Query( $args );

                        if ( $query->have_posts() ) :
                            while ( $query->have_posts() ) :
                                $query->the_post();
                                get_template_part( 'template-parts/components/card', 'activity' );
                            endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>
                    </div>
                    <div class="swiper-button-next swiper-button-next-activity"></div>
                    <div class="swiper-button-prev swiper-button-prev-activity"></div>
                </div>
            </div>
        </div>
        <div class="col-span-1 md:col-span-8 xl:col-span-12">
            <?php 
            $historyImg = get_field('intro_history_image');
            $size = 'full';
            $classes = 'w-full';
            if( $historyImg ) {
                echo wp_get_attachment_image( $historyImg, $size, false, array('class' => $classes) );
            } ?>
        </div>
    </div>
    <div class="ar-container-grid !gap-0 bg-white px-7 lg:px-0 pt-9 lg:pt-28 pb-10 lg:pb-40">
        <div class="ar-container">
            <div class="col-span-1 md:col-span-8 xl:col-span-12 text-center">
                <h2 class="title-normal relative inline-block ornaments__title-dark text-black uppercase mb-10"><?php the_field( 'intro_history_title' ); ?></h2>
                <p class="text-body text-black max-w-[744px] mx-auto"><?php the_field( 'intro_history_text' ); ?></p>
            </div>
        </div>
    </div>
</section>