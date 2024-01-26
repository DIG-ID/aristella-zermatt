<article data-swiper-autoplay="2000" id="post-<?php the_ID(); ?>" <?php post_class( 'card-activity swiper-slide' ); ?>>
    <?php 
    $activityImg = get_field('image');
    $size = 'full';
    $classes = 'w-full';
    if( $activityImg ) {
        echo wp_get_attachment_image( $activityImg, $size, false, array('class' => $classes) );
    } ?>
    <h3 class="font-primary_bold !text-[22px] text-black mt-6 mb-4 tracking-[-0.015em]"><?php the_title(); ?></h3>
    <div class="text-body"><?php the_field( 'text' ); ?></div>
</article>
