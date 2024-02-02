<section id="section-contacts" class="section-content-contact after-triangle">
    <div class="ar-container-grid bg-white !gap-0">
        <div class="col-span-1 md:col-span-8 xl:col-span-6 lg:min-h-[615px]">
            <?php
			$location = get_field( 'contact_map' );
			if ( $location ) :
				?>
				<div class="acf-map mb-14 md:mb-20 xl:mb-0 max-h-96 md:max-h-none h-[615px]" data-zoom="16">
					<div class="marker" data-lat="<?php echo esc_attr( $location['lat'] ); ?>" data-lng="<?php echo esc_attr( $location['lng'] ); ?>"></div>
				</div>
				<?php
			endif;
			?>
        </div>
        <div class="col-span-1 md:col-span-8 xl:col-span-6 px-7 lg:pl-10 lg:pr-5 pb-9 lg:pb-0 flex flex-col justify-center">
            <h2 class="text-body !text-5xl text-black uppercase mb-5"><?php esc_html_e( 'Kontakt', 'aristella' ) ?></h2>
            <p class="text-body text-black uppercase"><?php esc_html_e( 'Adresse', 'aristella' ) ?></p>
            <p class="text-body text-black font-bold mb-5 uppercase"><?php the_field( 'contacts_address', 'option' ); ?></p>
            <p class="text-body text-black uppercase"><?php esc_html_e( 'E-mail Adresse', 'aristella' ) ?></p>
            <a href="mailto:<?php the_field( 'contacts_email', 'option' ); ?>" class="text-body text-gold font-bold mb-5 uppercase"><?php the_field( 'contacts_email', 'option' ); ?></a>
            <p class="text-body text-black uppercase"><?php esc_html_e( 'Telefon', 'aristella' ) ?></p>
            <p class="text-body text-black font-bold mb-5"><?php the_field( 'contacts_phone', 'option' ); ?></p>
            <p class="text-body text-black uppercase"><?php esc_html_e( 'Fax', 'aristella' ) ?></p>
            <p class="text-body text-black font-bold"><?php the_field( 'contacts_fax', 'option' ); ?></p>
        </div>
    </div>
    <div class="w-full h-20 lg:h-36 bg-beige"></div>
</section>