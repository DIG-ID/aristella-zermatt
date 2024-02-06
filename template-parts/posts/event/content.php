<div class="post-content post-content-event az-container pt-28 xl:pt-32 pb-16 xl:pb-2 overflow-hidden">
	<div class="az-container-grid xl:items-center">
		<div class="col-span-1 md:col-span-8 xl:col-span-6 col-start-1 md:col-start-1 xl:col-start-4 mb-7 xl:mb-0">
			<?php if (has_post_thumbnail()) : ?>
			<figure class="w-full">
				<?php the_post_thumbnail( 'full', array( 'class' => 'object-cover w-full' ) ); ?>
			</figure>
			<?php else : ?>
			<figure class="w-full">
				<img src="https://placehold.co/1105x605">
			</figure>
			<?php endif; ?>
		</div>
		<div class="col-span-1 md:col-span-8 xl:col-span-6 col-start-1 md:col-start-1 xl:col-start-4 mb-7 xl:mb-0">
			<h1 class="title-normal text-[#35353c] text-center mt-5"><?php the_title(); ?></h1>
            <p class="title-caption text-black text-center mb-6"><?php the_field( 'start_date' ); ?><?php esc_html_e( ' - ', 'aristella' ) ?><?php the_field( 'end_date' ); ?></p>
		</div>
		<div class="col-span-1 md:col-span-8 xl:col-span-10 col-start-1 md:col-start-1 xl:col-start-2 mb-7 xl:mb-0">
			<div class="text-body mb-20"><?php the_field( 'content' ); ?></div>
		</div>
	</div>
	<div class="az-container-grid">
		<div class="col-span-1 md:col-span-8 xl:col-span-6 col-start-1 md:col-start-1 xl:col-start-4">
			<?php
			$previous_post = get_previous_post();
			$next_post = get_next_post();

			if ($previous_post) {
				?>
				<a href="<?php echo get_permalink($previous_post); ?>" class="btn btn--arrow-left mt-12"><?php esc_html_e('Vorherige', 'az'); ?></a>
			<?php
			}

			if ($next_post) {
				?>
				<a href="<?php echo get_permalink($next_post); ?>" class="btn btn--arrow-left-inverted mt-12 float-right"><?php esc_html_e('Nächste', 'az'); ?></a>
			<?php
			}
			?>
		</div>
	</div>
</div>