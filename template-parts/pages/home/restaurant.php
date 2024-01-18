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
    <div class="ar-container-grid">
        <div class=""></div>
    </div>
</section>