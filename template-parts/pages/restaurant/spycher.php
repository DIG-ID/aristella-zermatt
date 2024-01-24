<section class="section-features overflow-hidden relative bg-beige py-[100px]">
    <div class="ar-container-grid">
        <div class="ar-container-small py-14 border-t border-b border-black">
            <div class="col-span-1 md:col-span-2 xl:col-span-3">
                <?php 
                $chefImg = get_field('spycher_image');
                $size = 'full';
                $classes = 'w-full';
                if( $chefImg ) {
                    echo wp_get_attachment_image( $chefImg, $size, false, array('class' => $classes) );
                } ?>
            </div>
            <div class="col-span-1 md:col-span-6 xl:col-span-9 pl-14 pr-10">
                <h2 class="title-normal uppercase text-black pb-10"><?php the_field( 'spycher_title' ); ?></h2>
                <p class="text-body text-black"><?php the_field( 'spycher_text' ); ?></p>
            </div>
        </div>
    </div>
    <div class="ar-container-grid">
        <div class="ar-container-small py-14">
            <div class="col-span-1 md:col-span-2 xl:col-span-3 flex flex-col items-center justify-center">
                <?php 
                $logoImg1 = get_field('spycher_logos_logo_1');
                $size = 'full';
                $classes = 'w-[150px]';
                if( $logoImg1 ) {
                    echo wp_get_attachment_image( $logoImg1, $size, false, array('class' => $classes) );
                } ?>
            </div>
            <div class="col-span-1 md:col-span-2 xl:col-span-3 flex flex-col items-center justify-between">
                <?php 
                $logoImg2 = get_field('spycher_logos_logo_2');
                $size = 'full';
                $classes = 'w-[200px]';
                if( $logoImg2 ) {
                    echo wp_get_attachment_image( $logoImg2, $size, false, array('class' => $classes) );
                } ?>
                <?php 
                $logoImg3 = get_field('spycher_logos_logo_3');
                $size = 'full';
                $classes = 'w-[200px]';
                if( $logoImg3 ) {
                    echo wp_get_attachment_image( $logoImg3, $size, false, array('class' => $classes) );
                } ?>
            </div>
        </div>
    </div>
</section>