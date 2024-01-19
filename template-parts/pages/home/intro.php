<section class="section-intro xl:pt-24 xl:pb-40 overflow-hidden">
	<div class="ar-container-grid">
        <div class="col-span-1 md:col-span-6 xl:col-span-6 col-start-1 md:col-start-2 xl:col-start-4 text-center">
            <img class="mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lion-ornament.png" alt="ornament" title="ornament">
            <h1 class="title-normal text-black uppercase pb-12 -mt-16"><?php the_field( 'intro_title' ); ?></h1>
            <p class="text-body text-black max-w-[744px] mx-auto"><?php the_field( 'intro_text_content' ); ?></p>
            <div class="badges max-w-[240px] mx-auto pt-5">
            <?php
            if( have_rows('intro_badges') ):
                while( have_rows('intro_badges') ) : the_row();

                $image = get_sub_field('image');
                $size = 'full';
                $classes = 'max-w-[120px] float-left';
                if( $image ) {
                    echo wp_get_attachment_image( $image, $size, false, array('class' => $classes) );
                } 

                endwhile;
            endif; ?>
            </div>
        </div>
    </div>
</section>