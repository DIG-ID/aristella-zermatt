<section id="section-apartments" class="section-apartments">
    <div class="ar-container-grid">
        <div class="col-span-1 md:col-span-8 xl:col-span-12 bg-beige pt-24 pb-8 text-center">
            <h2 class="title-normal text-black"><?php the_field( 'zimmer_apartments_title', 'option' ); ?></h2>
            <p class="title-caption text-black"><?php the_field( 'zimmer_apartments_subtitle', 'option' ); ?></p>
            <img class="mx-auto my-12" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/title-ornament-dark.png" alt="ornament" title="ornament">
            <p class="text-body text-black max-w-3xl mx-auto"><?php the_field( 'zimmer_apartments_description', 'option' ); ?></p>
        </div>
    </div>
</section>