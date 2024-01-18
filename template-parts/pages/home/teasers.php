<section class="section-teasers overflow-hidden">
    <?php 
    $roomsImg = get_field('teasers_rooms_image');
    $size = 'full';
    $classes = 'w-full';
    if( $roomsImg ) {
        echo wp_get_attachment_image( $roomsImg, $size, false, array('class' => $classes) );
    } ?>
    <div class="ar-container-grid bg-white pt-14 pb-28">
        <div class="ar-container ar-padding">
            <div class="col-span-1 md:col-span-8 xl:col-span-10 col-start-1 md:col-start-1 xl:col-start-2">
                <h3 class="title-caption text-black mb-4"><?php the_field( 'teasers_rooms_pre-title' ); ?></h3>
                <h2 class="title-plusblack mb-8"><?php the_field( 'teasers_rooms_title' ); ?></h2>
                <p class="text-body text-black font-bold mb-5"><?php the_field( 'teasers_rooms_subtitle' ); ?></p>
                <p class="text-body text-black"><?php the_field( 'teasers_rooms_text' ); ?></p>
            </div>
        </div>
    </div>

    <?php 
    $travelImg = get_field('teasers_travel_image');
    $size = 'full';
    $classes = 'w-full';
    if( $travelImg ) {
        echo wp_get_attachment_image( $travelImg, $size, false, array('class' => $classes) );
    } ?>
    <div class="ar-container-grid bg-white pt-14 pb-28">
        <div class="ar-container ar-padding">
            <div class="col-span-1 md:col-span-8 xl:col-span-10 col-start-1 md:col-start-1 xl:col-start-2">
                <h3 class="title-caption text-black mb-4"><?php the_field( 'teasers_travel_pre-title' ); ?></h3>
                <h2 class="title-plusred mb-8"><?php the_field( 'teasers_travel_title' ); ?></h2>
                <p class="text-body text-black font-bold mb-5"><?php the_field( 'teasers_travel_subtitle' ); ?></p>
                <p class="text-body text-black"><?php the_field( 'teasers_travel_text' ); ?></p>
            </div>
        </div>
    </div>

    <?php 
    $wellnessImg = get_field('teasers_wellness_image');
    $size = 'full';
    $classes = 'w-full';
    if( $wellnessImg ) {
        echo wp_get_attachment_image( $wellnessImg, $size, false, array('class' => $classes) );
    } ?>
    <div class="ar-container-grid bg-white pt-14 pb-28">
        <div class="ar-container ar-padding">
            <div class="col-span-1 md:col-span-8 xl:col-span-10 col-start-1 md:col-start-1 xl:col-start-2">
                <h3 class="title-caption text-black mb-4"><?php the_field( 'teasers_wellness_pre-title' ); ?></h3>
                <h2 class="title-plusblue mb-8"><?php the_field( 'teasers_wellness_title' ); ?></h2>
                <p class="text-body text-black font-bold mb-5"><?php the_field( 'teasers_wellness_subtitle' ); ?></p>
                <p class="text-body text-black"><?php the_field( 'teasers_wellness_text' ); ?></p>
            </div>
        </div>
    </div>
</section>