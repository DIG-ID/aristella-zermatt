<article data-swiper-autoplay="2000" id="post-<?php the_ID(); ?>" <?php post_class( 'card-activity swiper-slide bg-white relative' ); ?>>
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
</article>
