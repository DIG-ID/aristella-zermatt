<section id="section-intro" class="section-intro py-[100px] overflow-hidden">
	<div class="ar-container-grid">
        <div class="col-span-1 md:col-span-6 xl:col-span-6 col-start-1 md:col-start-2 xl:col-start-4 text-center">
            <h2 class="title-normal text-blue uppercase"><?php the_field( 'intro_title' ); ?></h2>
            <p class="title-caption text-black"><?php the_field( 'intro_subtitle' ); ?></p>
            <img class="mx-auto my-12" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/title-ornament-dark.png" alt="ornament" title="ornament">
            <p class="text-body text-black max-w-[744px] mx-auto"><?php the_field( 'intro_text' ); ?></p>
        </div>
    </div>
</section>