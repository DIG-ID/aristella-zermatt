<section class="section-hosts overflow-hidden">
    <div class="ar-container-grid bg-black">
        <div class="col-span-1 md:col-span-8 xl:col-span-12 py-10 text-center">
            <img class="inline-block" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/divider-logo-marker.png" alt="divider symbol" title="divider symbol">
        </div>
    </div>
    <div class="ar-container-grid bg-black">
        <div class="col-span-1 md:col-span-8 xl:col-span-12 relative">
            <h2 class="title-thinner text-white absolute top-20 left-1/2 -translate-x-1/2 z-30 ornaments__title"><?php the_field( 'hosts_title' ); ?></h2>
            <?php 
            $hostsImg = get_field('hosts_image');
            $size = 'full';
            $classes = 'w-full';
            if( $hostsImg ) {
                echo wp_get_attachment_image( $hostsImg, $size, false, array('class' => $classes) );
            } ?>
        </div>
    </div>
    <div class="ar-container-grid bg-black py-14">
        <div class="ar-container ar-padding">
            <div class="col-span-1 md:col-span-8 xl:col-span-6 col-start-1 md:col-start-1 xl:col-start-4">
                <p class="text-body-italic text-white text-center ornaments__text max-w-[744px] mx-auto"><?php the_field( 'hosts_text' ); ?></p>
            </div>
        </div>
    </div>
</section>