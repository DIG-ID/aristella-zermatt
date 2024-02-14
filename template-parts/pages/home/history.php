<section class="section-history overflow-hidden">
    <div class="ar-container-grid bg-white !gap-0">
        <div class="col-span-1 md:col-span-8 xl:col-span-6">
            <?php 
            $historyImg = get_field('history_image');
            $size = 'full';
            $classes = 'w-full fade-in';
            if( $historyImg ) {
                echo wp_get_attachment_image( $historyImg, $size, false, array('class' => $classes) );
            } ?>
        </div>
        <div class="col-span-1 md:col-span-8 xl:col-span-6 px-8 lg:pl-10 lg:pr-5 py-8 lg:py-0 flex flex-col justify-center">
            <h2 class="title-thinner text-black mb-5 text-center lg:text-left"><?php the_field( 'history_title' ); ?></h2>
            <p class="text-body text-black"><?php the_field( 'history_text' ); ?></p>
        </div>
    </div>
    <div class="ar-container-grid bg-black">
        <div class="col-span-1 md:col-span-8 xl:col-span-12 py-10 text-center">
            <img class="inline-block" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/divider-logo-marker.png" alt="divider" title="divider">
        </div>
    </div>
</section>