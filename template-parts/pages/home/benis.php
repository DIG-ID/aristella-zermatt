<section class="section-benis overflow-hidden bg__benis">
    <div class="ar-container-grid !gap-y-0">
        <div class="col-span-1 md:col-span-8 xl:col-span-12 pt-28 pb-[330px] text-center">
            <?php 
            $benisLogo = get_field('benis_logo');
            $size = 'full';
            $classes = 'w-56 mb-16 mx-auto';
            if( $benisLogo ) {
                echo wp_get_attachment_image( $benisLogo, $size, false, array('class' => $classes) );
            } ?>
            <?php 
            $benisCta = get_field('benis_call_to_action');
            if( $benisCta ): 
                $benisCta_url = $benisCta['url'];
                $benisCta_title = $benisCta['title'];
                $benisCta_target = $benisCta['target'] ? $benisCta['target'] : '_self';
                ?>
                <a class="btn-normal uppercase" href="<?php echo esc_url( $benisCta_url ); ?>" target="<?php echo esc_attr( $benisCta_target ); ?>"><?php echo esc_html( $benisCta_title ); ?></a>
            <?php endif; ?>
        </div>
        <div class="col-span-1 md:col-span-8 xl:col-span-12 grid grid-cols-1 md:grid-cols-5 xl:grid-cols-5 gap-0 pb-[410px]">
            <div class="col-span-1 md:col-span-2 xl:col-span-1 col-start-1 md:col-start-1 xl:col-start-2">
                <?php
                $benisImg1 = get_field('benis_image_1');
                $size = 'full';
                $classes = 'w-96';
                if( $benisImg1 ) {
                    echo wp_get_attachment_image( $benisImg1, $size, false, array('class' => $classes) );
                } ?>
            </div>
            <div class="col-span-1 md:col-span-3 xl:col-span-2 col-start-1 md:col-start-1 xl:col-start-3 pl-8">
                <h2 class="title-plusred mb-7"><?php the_field( 'benis_title_1' ); ?></h2>
                <p class="text-body text-black"><?php the_field( 'benis_text_1' ); ?></p>
            </div>
        </div>
        <div class="col-span-1 md:col-span-8 xl:col-span-12 grid grid-cols-1 md:grid-cols-5 xl:grid-cols-5 gap-0  pb-[360px]">
            <div class="col-span-1 md:col-span-3 xl:col-span-2 col-start-1 md:col-start-1 xl:col-start-2 pr-8">
                <h2 class="title-plusblackbeige mb-7"><?php the_field( 'benis_title_2' ); ?></h2>
                <p class="text-body text-beige"><?php the_field( 'benis_text_2' ); ?></p>
            </div>
            <div class="col-span-1 md:col-span-2 xl:col-span-1 col-start-1 md:col-start-1 xl:col-start-4">
                <?php
                $benisImg2 = get_field('benis_image_2');
                $size = 'full';
                $classes = 'w-96';
                if( $benisImg2 ) {
                    echo wp_get_attachment_image( $benisImg2, $size, false, array('class' => $classes) );
                } ?>
            </div>
        </div>
    </div>
</section>