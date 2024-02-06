<section class="section-benis overflow-hidden bg__benis">
    <?php $home_page = get_page_by_path('homepage'); ?>
    <div class="ar-container-grid !gap-y-0">
        <div class="col-span-1 md:col-span-8 xl:col-span-12 pt-28 pb-24 xl:pb-[330px] text-center">
            <?php 
            $benisLogo = get_field('benis_logo', $home_page->ID);
            $size = 'full';
            $classes = 'w-56 mb-16 mx-auto';
            if( $benisLogo ) {
                echo wp_get_attachment_image( $benisLogo, $size, false, array('class' => $classes) );
            } ?>
            <?php 
            $benisCta = get_field('benis_call_to_action', $home_page->ID);
            if( $benisCta ): 
                $benisCta_url = $benisCta['url'];
                $benisCta_title = $benisCta['title'];
                $benisCta_target = $benisCta['target'] ? $benisCta['target'] : '_self';
                ?>
                <a class="btn-normal uppercase" href="<?php echo esc_url( $benisCta_url ); ?>" target="<?php echo esc_attr( $benisCta_target ); ?>"><?php echo esc_html( $benisCta_title ); ?></a>
            <?php endif; ?>
        </div>
        <div class="col-span-1 md:col-span-8 xl:col-span-12 grid grid-cols-1 md:grid-cols-5 xl:grid-cols-5 gap-0 px-8 xl:px-0 pb-24 xl:pb-[410px]">
            <div class="col-span-1 md:col-span-5 xl:col-span-1 col-start-1 md:col-start-1 xl:col-start-2 mb-8 lg:mb-0 order-2 xl:order-1">
                <?php
                $benisImg1 = get_field('benis_image_1', $home_page->ID);
                $size = 'full';
                $classes = 'w-full xl:w-96';
                if( $benisImg1 ) {
                    echo wp_get_attachment_image( $benisImg1, $size, false, array('class' => $classes) );
                } ?>
            </div>
            <div class="col-span-1 md:col-span-3 xl:col-span-2 col-start-1 md:col-start-1 xl:col-start-3 xl:pl-8 order-1 xl:order-2">
                <h2 class="title-plusred !text-beige xl:!text-black mb-7"><?php the_field( 'benis_title_1', $home_page->ID ); ?></h2>
                <p class="text-body text-beige xl:text-black hidden lg:block mb-10 xl:mb-0"><?php the_field( 'benis_text_1', $home_page->ID ); ?></p>
            </div>
        </div>
        <div class="col-span-1 md:col-span-8 xl:col-span-12 grid grid-cols-1 md:grid-cols-5 xl:grid-cols-5 gap-0 px-8 xl:px-0 pb-24 xl:pb-[360px]">
            <div class="col-span-1 md:col-span-3 xl:col-span-2 col-start-1 md:col-start-1 xl:col-start-2 lg:pr-8">
                <h2 class="title-plusblackbeige-resp mb-7"><?php the_field( 'benis_title_2', $home_page->ID ); ?></h2>
                <p class="text-body text-beige hidden lg:block mb-10 xl:mb-0"><?php the_field( 'benis_text_2', $home_page->ID ); ?></p>
            </div>
            <div class="col-span-1 md:col-span-5 xl:col-span-1 col-start-1 md:col-start-1 xl:col-start-4 mb-8 lg:mb-0">
                <?php
                $benisImg2 = get_field('benis_image_2', $home_page->ID);
                $size = 'full';
                $classes = 'w-full xl:w-96';
                if( $benisImg2 ) {
                    echo wp_get_attachment_image( $benisImg2, $size, false, array('class' => $classes) );
                } ?>
            </div>
        </div>
    </div>
</section>