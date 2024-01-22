<section id="section-parking" class="section-parking overflow-hidden">
	<div class="ar-container-grid xl:pt-24 xl:pb-24">
        <div class="col-span-1 md:col-span-6 xl:col-span-4 col-start-1 md:col-start-2 xl:col-start-5 text-center">
            <img class="mx-auto mb-7" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/parking.png" alt="parking" title="parking">
            <p class="text-body text-black mb-7"><?php the_field( 'parking_text' ); ?></p>
            <?php 
            $parkingCta1 = get_field('parking_button_1');
            if( $parkingCta1 ): 
                $parkingCta1_url = $parkingCta1['url'];
                $parkingCta1_title = $parkingCta1['title'];
                $parkingCta1_target = $parkingCta1['target'] ? $parkingCta1['target'] : '_self';
                ?>
                <a class="btn-normal float-left" href="<?php echo esc_url( $parkingCta1_url ); ?>" target="<?php echo esc_attr( $parkingCta1_target ); ?>"><?php echo esc_html( $parkingCta1_title ); ?></a>
            <?php endif; ?>
            <?php 
            $parkingCta2 = get_field('parking_button_1');
            if( $parkingCta2 ): 
                $parkingCta2_url = $parkingCta2['url'];
                $parkingCta2_title = $parkingCta2['title'];
                $parkingCta2_target = $parkingCta2['target'] ? $parkingCta2['target'] : '_self';
                ?>
                <a class="btn-normal float-right" href="<?php echo esc_url( $parkingCta2_url ); ?>" target="<?php echo esc_attr( $parkingCta2_target ); ?>"><?php echo esc_html( $parkingCta2_title ); ?></a>
            <?php endif; ?>
        </div>
    </div>
    <div class="ar-container-grid">
        <div class="col-span-1 md:col-span-8 xl:col-span-12">
            <?php 
            $parkingImg = get_field('parking_banner');
            $size = 'full';
            $classes = 'w-full';
            if( $parkingImg ) {
                echo wp_get_attachment_image( $parkingImg, $size, false, array('class' => $classes) );
            } ?>
        </div>
    </div>
</section>