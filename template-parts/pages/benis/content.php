<section id="section-intro" class="section-intro py-[100px] overflow-hidden">
	<div class="ar-container-grid">
        <div class="col-span-1 md:col-span-6 xl:col-span-6 col-start-1 md:col-start-2 xl:col-start-4 text-center">
            <img class="mx-auto mb-12" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/title-ornament-dark.png" alt="ornament" title="ornament">
            <p class="text-body text-black max-w-[744px] mx-auto"><?php the_field( 'intro_text' ); ?></p>
        </div>
    </div>
</section>

<section id="section-tips" class="section-tips bg-white overflow-hidden">
    <div class="ar-container-grid !gap-0">
        <?php
        if( have_rows('tips') ):
        while( have_rows('tips') ) : the_row(); ?>
            <div class="ar-container-small md:gap-x-4 xl:gap-x-9 pt-12 pb-12">
                <div class="col-span-1 md:col-span-2 xl:col-span-4 pt-8 pb-8">
                    <?php 
                    $tipsImg = get_sub_field('image');
                    $size = 'full';
                    $classes = 'w-full';
                    if( $tipsImg ) {
                        echo wp_get_attachment_image( $tipsImg, $size, false, array('class' => $classes) );
                    } ?>
                </div>
                <div class="col-span-1 md:col-span-6 xl:col-span-8 pt-8 pb-8">
                    <h3 class="title-plusred-small text-black !text-[30px] uppercase mb-6"><?php the_sub_field( 'title' ); ?></h3>
                    <p class="text-body text-black"><?php the_sub_field( 'description' ); ?></p>
                </div>
            </div>
        <?php endwhile;
        endif; ?>
    </div>
</section>