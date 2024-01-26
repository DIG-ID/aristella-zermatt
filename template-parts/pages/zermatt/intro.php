<section id="section-intro" class="section-intro pt-20 overflow-hidden">
	<div class="ar-container-grid !gap-0">
        <div class="ar-container pb-28">
            <div class="col-span-1 md:col-span-8 xl:col-span-12 text-center">
                <h2 class="title-normal text-black uppercase"><?php the_field( 'intro_zermatt_title' ); ?></h2>
                <p class="title-caption text-black"><?php the_field( 'intro_zermatt_subtitle' ); ?></p>
                <img class="mx-auto my-12" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/title-ornament-dark.png" alt="ornament" title="ornament">
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
    <div class="ar-container-grid !gap-0 bg-white pt-28 pb-40">
        <div class="ar-container">
            <div class="col-span-1 md:col-span-8 xl:col-span-12 text-center">
                <h2 class="title-normal relative inline-block ornaments__title-dark text-black uppercase mb-10"><?php the_field( 'intro_history_title' ); ?></h2>
                <p class="text-body text-black max-w-[744px] mx-auto"><?php the_field( 'intro_history_text' ); ?></p>
            </div>
        </div>
    </div>
</section>