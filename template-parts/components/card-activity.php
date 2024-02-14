<article data-swiper-autoplay="2000" id="post-<?php the_ID(); ?>" <?php post_class( 'card-activity swiper-slide bg-white relative md:min-h-[450px] lg:min-h-[450px] 2xl:min-h-[500px]' ); ?>>
<a href="<?php the_field( 'external_link' ); ?>" class="block" target="_blank">
    <?php 
    $activityImg = get_field('image');
    $size = 'full';
    $classes = 'w-full';
    if( $activityImg ) {
        echo wp_get_attachment_image( $activityImg, $size, false, array('class' => $classes) );
    } ?>
    <h3 class="title-normal !text-4xl text-red uppercase absolute top-7 left-7"><?php esc_html_e( 'AKTIVITÄTEN', 'aristella' ) ?></h3>
    <h3 class="title-plusred text-black mt-6 mb-4 tracking-[-0.015em] px-6"><?php the_title(); ?></h3>
    <div class="text-body px-6 pb-7"><?php the_field( 'text' ); ?></div>
</a>
</article>
