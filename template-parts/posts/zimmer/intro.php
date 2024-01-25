<section id="section-intro" class="section-intro after-triangle">
    <div class="ar-container-grid">
        <div class="col-span-1 md:col-span-8 xl:col-span-12 bg-beige pt-24 pb-10 text-center">
            <h2 class="title-normal !text-[32px] !tracking-[2px] text-black uppercase mb-9"><?php the_field( 'intro_title' ); ?></h2>
            <p class="text-body text-black max-w-7xl mx-auto"><?php the_field( 'intro_description' ); ?></p>
        </div>
    </div>
    <div class="ar-container-grid pb-20">
        <div class="ar-container-small">
            <div class="col-span-1 md:col-span-8 xl:col-span-12 min-h-[580px]">
                <?php
                if ( 'yes' === get_field( 'intro_add_map' ) ) :
                    $location = get_field( 'intro_map' );
                    if ( $location ) :
                        ?>
                        <div class="acf-map mb-14 md:mb-20 xl:mb-0 max-h-96 md:max-h-none h-[615px]" data-zoom="16">
                            <div class="marker" data-lat="<?php echo esc_attr( $location['lat'] ); ?>" data-lng="<?php echo esc_attr( $location['lng'] ); ?>"></div>
                        </div>
                        <?php
                    endif;
                endif;
                ?>
            </div>
        </div>
    </div>
</section>