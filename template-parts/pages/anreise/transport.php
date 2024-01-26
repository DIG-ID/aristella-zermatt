<section id="section-transport" class="section-transport overflow-hidden">
	<div class="ar-container-grid xl:pt-24 xl:pb-24">
        <div class="col-span-1 md:col-span-6 xl:col-span-4 col-start-1 md:col-start-2 xl:col-start-5 text-center">
            <div class="grid grid-cols-2 md:grid-cols-9">
                <div class="col-span-1 md:col-span-1 col-start-1 md:col-start-4">
                    <img class="mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/transport.png" alt="transport" title="transport">
                </div>
                <div class="col-span-1 md:col-span-3 col-start-1 md:col-start-5">
                    <h3 class="text-body text-red !text-3xl text-left"><?php the_field( 'transport_title' ); ?></h3>
                    <p class="text-body text-black text-left lg:max-w-[180px]"><?php the_field( 'transport_subtitle' ); ?></p>
                </div>
            </div>
            <p class="text-body text-black my-7"><?php the_field( 'transport_text' ); ?></p>
            <?php 
            $transportCta1 = get_field('transport_button_1');
            if( $transportCta1 ): 
                $transportCta1_url = $transportCta1['url'];
                $transportCta1_title = $transportCta1['title'];
                $transportCta1_target = $transportCta1['target'] ? $transportCta1['target'] : '_self';
                ?>
                <a class="btn-normal uppercase mx-auto" href="<?php echo esc_url( $transportCta1_url ); ?>" target="<?php echo esc_attr( $transportCta1_target ); ?>"><?php echo esc_html( $transportCta1_title ); ?></a>
            <?php endif; ?>
        </div>
    </div>
    <div class="ar-container-grid">
        <div class="col-span-1 md:col-span-8 xl:col-span-12">
            <?php 
            $transportImg = get_field('transport_banner');
            $size = 'full';
            $classes = 'w-full';
            if( $transportImg ) {
                echo wp_get_attachment_image( $transportImg, $size, false, array('class' => $classes) );
            } ?>
        </div>
    </div>
</section>