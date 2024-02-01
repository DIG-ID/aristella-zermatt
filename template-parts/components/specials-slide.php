<article data-swiper-autoplay="2000" id="post-<?php the_ID(); ?>" <?php post_class( 'swiper-slide bg-beige p-10' ); ?>>
    <div class="ar-container-grid">
        <div class="col-span-1 md:col-span-8 xl:col-span-8 2xl:col-span-9">
            <?php if (has_post_thumbnail()) : 
                $full_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
            ?>
                <div class="featured-image">
                    <img src="<?php echo $full_image_url[0]; ?>" alt="<?php the_title(); ?>" class="w-full" />
                </div>
            <?php else : ?>
                <div class="featured-image">
                    <img src="https://placehold.co/615x640">
                </div>
            <?php endif; ?>
        </div>
        <div class="col-span-1 md:col-span-8 xl:col-span-8 2xl:col-span-3 flex flex-col justify-between">
            <h2 class="title-normal py-4 lg:py-0 !text-[42px] text-black"><?php the_title(); ?></h2>
            <div class="text-body-light specials-text-div"><?php the_field( 'text_content' ); ?></div>
            <?php 
            $specialCta = get_field('cta_button');
            if( $specialCta ): 
                $specialCta_url = $specialCta['url'];
                $specialCta_title = $specialCta['title'];
                $specialCta_target = $specialCta['target'] ? $specialCta['target'] : '_self';
                ?>
                <a class="btn-normal uppercase" href="<?php echo esc_url( $specialCta_url ); ?>" target="<?php echo esc_attr( $specialCta_target ); ?>"><?php echo esc_html( $specialCta_title ); ?></a>
            <?php endif; ?>
        </div>
    </div>
</article>
