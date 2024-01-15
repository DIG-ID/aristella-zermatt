<section class="section-hero az-container mt-16 xl:mt-[108px] overflow-hidden">
	<div class="az-container-grid">
		<div class="col-span-1 md:col-span-8 xl:col-span-10 xl:col-start-2">
			<section class="az-container py-40 !px-16">
				<div class="az-container-grid">
					<div class="col-span-7">
						<h1 class="title-normal mb-12">WILLKOMMEN IN ZERMATT!</h1>
						<h1 class="title-caption mb-12">testing title-caption</h1>
						<h1 class="title-plusblack mb-12">title plus black</h1>
						<h1 class="title-plusred mb-12">title plus red</h1>
						<h1 class="title-plusblue mb-12">title plus blue</h1>
						<p class="text-body mb-12">Testing text-body Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa voluptas non voluptatibus quas, esse magni. Inventore quae culpa tempora assumenda? Rerum aperiam unde deleniti pariatur mollitia consequatur quisquam dolorum ratione.</p>
						<p class="title-overline">Testing title-overline</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas culpa accusantium nulla neque ipsam officiis a et laudantium rerum repudiandae quam nobis minima iste veritatis placeat, eveniet velit magni molestiae?</p>
					</div>
					<div class="col-span-5">
						<a href="#" class="btn-normal mb-8">Simple Button</a><br>

						<div id="booking-menu" class="w-44 grid-cols-1">
							<div class="col-span-1 bg-beige text-black font-primary text-xs uppercase text-center p-[6px]">
								<?php esc_html_e( 'DIREKTBUCHER-VORTEILE', 'aristella' ) ?>
							</div>
							<div class="col-span-1 bg-red text-beige font-primary_black text-[1rem] leading-[1rem] tracking-tighter py-4 flex justify-center">
								<img class="w-4 inline-block mr-2" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/calendar-days.svg" alt="calendar icon" title="calendar icon"></i><span class="text-left inline-block">JETZT<br>BUCHEN</span>
							</div>
							<a target="_blank" href="<?php the_field( 'general_simple_booking_url', 'option' ); ?>"></a>
						</div>

						<a href="#" class="btn btn--arrow-left mb-8">Button Back</a><br>
						<a href="#" class="btn btn--arrow-right mb-8">Button</a><br>
						<a href="#" class="btn btn--arrow-right mb-8">Button LONNNNNG</a><br>
						<a href="#" class="btn btn--arrow-down mb-8">Button Down</a><br>
						<a href="#" class="btn btn--box mb-8">Button box</a><br>
					</div>
				</div>
			</section>
		</div>
	</div>
</section>
