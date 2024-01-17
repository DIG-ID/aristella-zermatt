<section class="section-history overflow-hidden benis__bg">
    <div class="ar-container-grid">
        <div class="col-span-1 md:col-span-8 xl:col-span-12 pt-40 pb-[360px] text-center">
            <?php 
            $benisLogo = get_field('benis_logo');
            $size = 'full';
            $classes = 'w-56 mb-16 mx-auto';
            if( $benisLogo ) {
                echo wp_get_attachment_image( $benisLogo, $size, false, array('class' => $classes) );
            } ?>
            <?php 
            $benisCta = get_field('benis_call_to_action');
            if( $benisCta ): 
                $benisCta_url = $benisCta['url'];
                $benisCta_title = $benisCta['title'];
                $benisCta_target = $benisCta['target'] ? $benisCta['target'] : '_self';
                ?>
                <a class="btn-normal" href="<?php echo esc_url( $benisCta_url ); ?>" target="<?php echo esc_attr( $benisCta_target ); ?>"><?php echo esc_html( $benisCta_title ); ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>