<section id="section-wellness" class="section-wellness bg-black lg:bg-beige overflow-hidden">
	<div class="ar-container-grid !gap-0">
        <?php
        if( have_rows('wellness_list') ):
        while( have_rows('wellness_list') ) : the_row(); ?>
            <div class="col-span-1 md:col-span-8 xl:col-span-12 lg:mb-[100px] relative">
                <div class="bg__wellness lg:absolute right-40 top-0 lg:w-[280px] lg:h-[220px] pt-16 lg:pt-4 px-5 pb-6">
                    <h3 class="title-normal text-blue !text-[34px] uppercase mb-10"><?php the_sub_field( 'title' ); ?></h3>
                    <p class="text-body text-beige"><?php the_sub_field( 'text' ); ?></p>
                </div>
                <?php 
                $wellnessImg = get_sub_field('image');
                $size = 'full';
                $classes = 'w-full';
                if( $wellnessImg ) {
                    echo wp_get_attachment_image( $wellnessImg, $size, false, array('class' => $classes) );
                } ?>
            </div>
        <?php endwhile;
        endif; ?>
    </div>
</section>