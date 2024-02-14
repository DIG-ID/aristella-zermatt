<section id="section-content" class="section-content-datainfo bg-white overflow-hidden pb-20 lg:pb-40">
    <div class="ar-container-grid">
        <div class="col-span-1 md:col-span-8 xl:col-span-12 py-12 lg:py-28 text-center">
            <img class="mx-auto mb-7" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/title-ornament-dark.png" alt="ornament" title="ornament">
            <h2 class="title-normal text-black uppercase"><?php the_field( 'main_title' ); ?></h2>
        </div>
	</div>
    <div class="ar-container-grid">
        <div class="ar-container-small">
            <div class="col-span-1 md:col-span-8 xl:col-span-12 px-7 lg:px-0">
                <div class="content-blocks text-body text-black mx-auto"><?php the_content(); ?></div>
            </div>
        </div>
    </div>
</section>