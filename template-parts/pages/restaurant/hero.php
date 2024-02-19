<section class="section-hero mt-16 xl:mt-[92px] overflow-hidden max-h-[70vh] relative">
	<div class="ar-container-grid">
		<div class="col-span-1 md:col-span-8 xl:col-span-12">
            <div class="hero__content absolute w-full z-30 left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 text-center px-8">
				<h1 class="font-primary_bold uppercase text-beige text-[28px] sm:text-[28px] lg:text-[56px] text-shadow-aris hidden lg:block"><?php the_field( 'hero_title' ); ?></h1>
			</div>
            <div class="hero__content absolute w-full z-30 left-1/2 -translate-x-1/2 bottom-0 text-center max-h-24 hidden xl:block">
                <a href="#section-intro" class="inline-block w-[30px] md:w-[60px]">
                    <svg class="arrowsScroll animatedArrow"><path class="a1" d="M0 0 L30 32 L60 0"></path></svg>
                </a>
            </div>
            <?php
			if ( 'image' === get_field( 'hero_media' ) ) :
				$hero_img = get_field( 'hero_image' );
				if ( $hero_img ) :
					echo wp_get_attachment_image( $hero_img, 'full', false, array( 'class' => 'w-full object-cover min-h-[530px] md:min-h-[980px] xl:min-h-[760px]' ) );
				endif;
			endif;
			if ( 'video' === get_field( 'hero_media' ) ) :
				?>
				<video autoplay loop muted class="section-hero__video w-full" playsinline="playsinline" loop="" autoplay="autoplay" muted="muted">
					<?php
					$video  = get_field( 'hero_video' );
						echo '<source src="' . esc_url( wp_get_attachment_url( $video ) ) . '">';
					?>
				</video>
				<?php
			endif; ?>
            <?php 
            $heroImg = get_field('hero_image');
            $size = 'full';
            $classes = 'w-full';
            if( $heroImg ) {
                echo wp_get_attachment_image( $heroImg, $size, false, array('class' => $classes) );
            } ?>
		</div>
	</div>
</section>
