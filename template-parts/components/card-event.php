<article id="post-<?php the_ID(); ?>" <?php post_class( 'card-event col-span-1 md:col-span-4 xl:col-span-4' ); ?>>
    <figure class="w-full">
        <?php the_post_thumbnail( 'full', array( 'class' => 'object-cover w-full' ) ); ?>
    </figure>
    <h3 class="font-primary_bold !text-[22px] text-black mt-6 mb-4 tracking-[-0.015em]"><?php the_title(); ?></h3>
    <p class=" font-primary_black text-base text-black mb-6"><?php the_field( 'start_date' ); ?><?php esc_html_e( ' - ', 'aristella' ) ?><?php the_field( 'end_date' ); ?></p>
    <div class="text-body"><?php the_excerpt(); ?></div>
</article>
