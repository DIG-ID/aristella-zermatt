<section id="section-specials" class="section-specials overflow-hidden bg-beige pt-20 pb-[100px]">
    <div class="ar-container-grid">
        <div class="col-span-1 md:col-span-8 xl:col-span-12 text-center">
            <h2 class="title-normal text-black uppercase mb-3"><?php the_field( 'specials_title' ); ?></h2>
            <p class="title-caption text-black"><?php the_field( 'specials_subtitle' ); ?></p>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/title-ornament-dark.png" alt="divider symbol" title="divider symbol" class="mx-auto mt-20">
        </div>
    </div>
</section>
<?php get_template_part( 'template-parts/pages/home/specials' ); ?>
<section class="w-full bg-red">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/title-ornament.png" alt="divider symbol" title="divider symbol" class="mx-auto py-20">
</section>
