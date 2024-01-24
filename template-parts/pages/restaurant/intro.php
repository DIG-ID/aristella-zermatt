<section id="section-intro" class="section-intro">
    <div class="ar-container-grid">
        <div class="col-span-1 md:col-span-8 xl:col-span-12 bg-beige pt-24 pb-20 text-center">
            <?php 
            $logoImg = get_field('intro_logo');
            $size = 'full';
            $classes = 'w-[230px] mx-auto';
            if( $logoImg ) {
                echo wp_get_attachment_image( $logoImg, $size, false, array('class' => $classes) );
            } ?>
            <img class="mx-auto my-12" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/title-ornament-dark.png" alt="ornament" title="ornament">
            <p class="text-body text-black max-w-3xl mx-auto"><?php the_field( 'intro_text' ); ?></p>
        </div>
    </div>
</section>