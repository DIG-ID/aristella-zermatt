<section id="section-intro" class="section-intro after-triangle">
    <div class="ar-container-grid">
        <div class="col-span-1 md:col-span-8 xl:col-span-12 bg-beige pt-24 pb-10 text-center">
            <h2 class="title-normal !text-[32px] !tracking-[2px] text-black uppercase mb-9"><?php the_title(); ?></h2>
            <p class="text-body text-black max-w-7xl mx-auto"><?php the_field( 'intro_description' ); ?></p>
        </div>
    </div>
    <div class="ar-container-grid pb-20">
        <div class="ar-container-small">
            <?php if ( 'yes' === get_field( 'intro_add_button' ) ) : ?>
            <div class="col-span-1 md:col-span-8 xl:col-span-12 text-center">
                <?php 
                $pdfbutton = get_field('intro_button');
                if( $pdfbutton ): 
                    $pdfbutton_url = $pdfbutton['url'];
                    $pdfbutton_title = $pdfbutton['title'];
                    $pdfbutton_target = $pdfbutton['target'] ? $pdfbutton['target'] : '_self';
                    ?>
                    <a class="btn-normal-s" href="<?php echo esc_url( $pdfbutton_url ); ?>" target="<?php echo esc_attr( $pdfbutton_target ); ?>"><?php echo esc_html( $pdfbutton_title ); ?></a>
                <?php endif; ?>
            </div>
            <?php endif; ?>
            <?php if ( 'yes' === get_field( 'intro_add_map' ) ) : ?>
            <div class="col-span-1 md:col-span-8 xl:col-span-12 min-h-[580px]">
                <?php $location = get_field( 'intro_map' );
                if ( $location ) :
                    ?>
                    <div class="acf-map mb-14 md:mb-20 xl:mb-0 max-h-96 md:max-h-none h-[615px]" data-zoom="16">
                        <div class="marker" data-lat="<?php echo esc_attr( $location['lat'] ); ?>" data-lng="<?php echo esc_attr( $location['lng'] ); ?>"></div>
                    </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>