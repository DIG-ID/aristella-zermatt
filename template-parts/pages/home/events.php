<section class="section-events overflow-hidden bg-beige pt-14 pb-28">
    <div class="ar-container-grid mb-8">
        <div class="col-span-1 md:col-span-8 xl:col-span-12 text-center">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/title-ornament-dark.png" alt="divider symbol" title="divider symbol" class="mx-auto mb-14">
            <h2 class="title-normal text-black uppercase mb-3"><?php esc_html_e( 'Events', 'aristella' ) ?></h2>
            <p class="title-caption text-black"><?php esc_html_e( 'TRADITION / SPORT / KULINARIK', 'aristella' ) ?></p>
        </div>
    </div>
    <div class="ar-container-grid">
        <div class="ar-container-small md:gap-4 xl:gap-9">
            <?php
            $args = array(
                'post_type'     => 'event',
                'order'         => 'ASC',
            );
            $query = new WP_Query( $args );

            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) :
                    $query->the_post();
                    get_template_part( 'template-parts/components/card', 'event' );
                endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>