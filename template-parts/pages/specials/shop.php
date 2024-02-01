<section class="section-shop overflow-hidden bg-beige py-[100px]">
    <?php $specials_page = get_page_by_path('specials'); ?>
    <div class="ar-container-grid mb-20">
        <div class="col-span-1 md:col-span-8 xl:col-span-12 text-center px-7 lg:px-0">
            <h2 class="title-normal text-black uppercase mb-3"><?php the_field( 'shop_title', $specials_page->ID ); ?></h2>
            <p class="text-body text-black"><?php the_field( 'shop_subtitle', $specials_page->ID ); ?></p>
        </div>
    </div>
    <div class="ar-container-grid">
        <div class="col-span-1 md:col-span-6 xl:col-span-6 md:col-start-2 xl:col-start-4 grid grid-cols-1 md:grid-cols-3 xl:grid-cols-3 md:gap-4 xl:gap-9">
            <?php
            if( have_rows('shop_list', $specials_page->ID) ):
            while( have_rows('shop_list', $specials_page->ID) ) : the_row(); ?>
                <div class="col-span-1 flex flex-col items-center mb-16 lg:mb-0">
                    <?php 
                    $iconImg = get_sub_field('icon');
                    $size = 'full';
                    $classes = 'w-20 h-20 mb-8';
                    if( $iconImg ) {
                        echo wp_get_attachment_image( $iconImg, $size, false, array('class' => $classes) );
                    } ?>

                    <?php 
                    $shopCta = get_sub_field('button');
                    if( $shopCta ): 
                        $shopCta_url = $shopCta['url'];
                        $shopCta_title = $shopCta['title'];
                        $shopCta_target = $shopCta['target'] ? $shopCta['target'] : '_self';
                        ?>
                        <a class="btn-dark" href="<?php echo esc_url( $shopCta_url ); ?>" target="<?php echo esc_attr( $shopCta_target ); ?>"><?php echo esc_html( $shopCta_title ); ?></a>
                    <?php endif; ?>
                </div>
            <?php endwhile;
            endif; ?>
        </div>
    </div>
</section>