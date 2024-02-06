<section class="section-features overflow-hidden relative bg-red py-20 lg:py-[100px] px-7 lg:px-0">
    <div class="ar-container-grid !gap-y-16">
        <div class="ar-container-small">
            <div class="col-span-1 md:col-span-8 xl:col-span-12 relative my-10 lg:mb-0">
                <?php
                $file = get_field('menus_bar_menu');
                if( $file ):
                $url = wp_get_attachment_url( $file ); ?>
                <a href="<?php echo esc_html($url); ?>" target="_blank" class="block absolute left-0 top-0 w-full h-full">
                    <div class="flex flex-col justify-center items-center h-full">
                        <p class="title-normal text-black lg:text-red uppercase"><?php the_field( 'menus_bar_menu_title' ); ?></p>
                        <p><i class="icomoon-square-black"></i></p>
                    </div>
                </a>
                <?php endif; ?>
                <?php 
                $barmenuImg = get_field('menus_bar_menu_background');
                $size = 'full';
                $classes = 'w-full hidden lg:block';
                if( $barmenuImg ) {
                    echo wp_get_attachment_image( $barmenuImg, $size, false, array('class' => $classes) );
                } ?>
            </div>
        </div>
        <div class="ar-container-small gap-x-16">
            <div class="col-span-1 md:col-span-4 xl:col-span-6 relative mb-16 lg:mb-0">
                <?php
                $file = get_field('menus_menu');
                if( $file ):
                $url = wp_get_attachment_url( $file ); ?>
                <a href="<?php echo esc_html($url); ?>" target="_blank" class="block absolute left-0 top-0 w-full h-full">
                    <div class="flex flex-col justify-center items-center h-full">
                        <p class="title-normal text-red uppercase"><?php the_field( 'menus_menu_title' ); ?></p>
                        <p><i class="icomoon-square-white"></i></p>
                    </div>
                </a>
                <?php endif; ?>
                <?php 
                $menuImg = get_field('menus_menu_background');
                $size = 'full';
                $classes = 'w-full';
                if( $menuImg ) {
                    echo wp_get_attachment_image( $menuImg, $size, false, array('class' => $classes) );
                } ?>
            </div>
            <div class="col-span-1 md:col-span-4 xl:col-span-6 relative">
                <?php
                $file = get_field('menus_wine_menu');
                if( $file ):
                $url = wp_get_attachment_url( $file ); ?>
                <a href="<?php echo esc_html($url); ?>" target="_blank" class="block absolute left-0 top-0 w-full h-full">
                    <div class="flex flex-col justify-center items-center h-full">
                        <p class="title-normal text-beige uppercase"><?php the_field( 'menus_wine_menu_title' ); ?></p>
                        <p><i class="icomoon-square-white"></i></p>
                    </div>
                </a>
                <?php endif; ?>
                <?php 
                $winemenuImg = get_field('menus_wine_menu_background');
                $size = 'full';
                $classes = 'w-full';
                if( $winemenuImg ) {
                    echo wp_get_attachment_image( $winemenuImg, $size, false, array('class' => $classes) );
                } ?>
            </div>
        </div>
        <div class="ar-container-small relative">
            <div class="col-span-1 md:col-span-8 xl:col-span-12 relative">
                <?php
                $file = get_field('menus_group_menu');
                if( $file ):
                $url = wp_get_attachment_url( $file ); ?>
                <a href="<?php echo esc_html($url); ?>" target="_blank" class="block w-full h-full border-beige border-2 py-10 px-5">
                    <div class="flex flex-col justify-center items-center h-full">
                        <p class="title-normal text-beige uppercase"><?php the_field( 'menus_group_menu_title' ); ?></p>
                        <p class="my-2"><i class="icomoon-square-white"></i></p>
                        <p class="text-body text-beige text-center"><?php the_field( 'menus_group_menu_text' ); ?></p>
                    </div>
                </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
