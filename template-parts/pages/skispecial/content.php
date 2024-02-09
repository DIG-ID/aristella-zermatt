<section id="section-content" class="section-content bg-white overflow-hidden pb-20 lg:pb-40">
    <div class="ar-container-grid px-8 xl:px-0">
        <div class="col-span-1 md:col-span-8 xl:col-span-12 py-12 lg:py-28 text-center">
            <img class="mx-auto mb-7" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/title-ornament-dark.png" alt="ornament" title="ornament">
            <h2 class="title-normal text-black uppercase"><?php the_field('content_title') ?></h2>
        </div>
	</div>
    <div class="ar-container-grid pb-20 px-8 xl:px-0">
            <div class="col-span-1 md:col-span-8 xl:col-span-10 col-start-1 md:col-start-1 xl:col-start-2">
                <div class="content-blocks text-body text-black mx-auto"><?php the_field('content_text') ?></div>
                
            </div>
    </div>
    <div class="ar-container-grid contact-form-ski px-8 xl:px-0">
            <div class="col-span-1 md:col-span-6 xl:col-span-4 col-start-1 md:col-start-1 xl:col-start-2">
                <div><?php echo do_shortcode( get_field('content_shortcode') ); ?></div>
            </div>
    
    </div>
</section>