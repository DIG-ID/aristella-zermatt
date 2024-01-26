<section class="section-hero mt-16 xl:mt-[92px] overflow-hidden max-h-[78vh] relative">
	<div class="ar-container-grid">
		<div class="col-span-1 md:col-span-8 xl:col-span-12">
            <div class="hero__content absolute w-full z-30 left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 text-center">
				<h1 class="font-primary_bold text-beige text-[16px] sm:text-[28px] lg:text-[56px] text-shadow-aris uppercase"><?php the_title(); ?></h1>
			</div>
            <div class="hero__content absolute w-full z-30 left-1/2 -translate-x-1/2 bottom-0 text-center max-h-24">
                <a href="#section-contacts" class="inline-block w-[30px] md:w-[60px]">
                    <svg class="arrowsScroll animatedArrow"><path class="a1" d="M0 0 L30 32 L60 0"></path></svg>
                </a>
            </div>
            <?php 
            $heroImg = get_the_post_thumbnail(get_the_ID(), 'full', array('class' => 'w-full'));
            if( $heroImg ) {
                echo $heroImg;
            } ?>
		</div>
	</div>
</section>
