<footer class="footer-main pt-14 bg-black text-beige px-8 lg:px-0 text-center lg:text-left">
    <div class="ar-container-grid">
        <div class="ar-container-small">
            <div class="col-span-1 md:col-span-8 xl:col-span-12 flex xl:block justify-center xl:justify-normal order-1">
                <?php
                $footer_logo = get_field( 'general_footer_logo','option' );
                if( $footer_logo ) :
                    echo wp_get_attachment_image( $footer_logo, 'full' );
                endif;
                ?>
            </div>
            <div class="col-span-1 md:col-span-8 xl:col-span-8 order-2">
                <p class="text-body text-[#a0a0a0] uppercase py-5"><?php esc_html_e( 'ARISTELLA SWISSFLAIR HOTEL & APARTEMENT', 'aristella' ) ?><br><?php esc_html_e( 'RESTAURANT SPYCHER', 'aristella' ) ?></p>
            </div>
            <div class="col-span-1 md:col-span-8 xl:col-span-4 text-center lg:text-right pt-11 lg:pr-12 mb-8 lg:mb-0 order-4 lg:order-3">
                <a href="<?php the_field( 'general_socials_facebook_url', 'option' ) ?>" class="inline-block mr-1" target="_blank>
                    <?php 
                    $fbImg = get_field( 'general_socials_facebook_icon', 'option' );
                    $size = 'full';
                    $classes = 'w-5';
                    if( $fbImg ) {
                        echo wp_get_attachment_image( $fbImg, $size, false, array('class' => $classes) );
                    } ?>
                </a>
                <a href="<?php the_field( 'general_socials_instagram_url', 'option' ) ?>" class="inline-block mr-1" target="_blank">
                    <?php 
                    $fbImg = get_field( 'general_socials_instagram_icon', 'option' );
                    $size = 'full';
                    $classes = 'w-5';
                    if( $fbImg ) {
                        echo wp_get_attachment_image( $fbImg, $size, false, array('class' => $classes) );
                    } ?>
                </a>
                <a href="<?php the_field( 'general_socials_youtube_url', 'option' ) ?>" class="inline-block" target="_blank>
                    <?php 
                    $fbImg = get_field( 'general_socials_youtube_icon', 'option' );
                    $size = 'full';
                    $classes = 'w-5';
                    if( $fbImg ) {
                        echo wp_get_attachment_image( $fbImg, $size, false, array('class' => $classes) );
                    } ?>
                </a>
            </div>
            <div class="col-span-1 md:col-span-8 xl:col-span-8 order-3 lg:order-4">
                <?php
                $newsletter_form = get_field( 'general_newsletter_form_shortcode', 'option' );
                echo do_shortcode( $newsletter_form );
                ?>
            </div>
            <div class="col-span-1 md:col-span-8 xl:col-span-4 order-5 flex justify-center lg:block pb-14 lg:pb-0">
                <!-- TrustYou Widget -->
                <iframe class="float-right" src="https://api.trustyou.com/hotels/0c0da902-e28d-4826-b674-679d075a59b7/seal.html?key=645d3a3a-45b8-4316-93c1-cf42411a5470&amp;size=l&amp;scale=5" width="125px" height="101px" frameborder="0" scrolling="no"></iframe>
                <!-- /TrustYou Widget -->
                <img class="w-[110px] float-right" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/best.png" alt="badge" title="Travellers Choice">
            </div>
        </div>
    </div>
    <div class="ar-container-grid border-t border-t-[#1e1e1e] py-6">
		<div class="col-span-1 md:col-span-8 xl:col-span-8 xl:col-start-3 flex flex-col xl:flex-row justify-center xl:justify-between items-center">
			<div class="copy-info flex flex-col xl:flex-row mb-8 lg:mb-0">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/map_marker.svg" alt="map marker" title="map marker" class="w-[13px] mr-2"><p class="font-primary_cn text-[13px] tracking-[-0.015em] leading-[1.7] text-[#a0a0a0]"><?php the_field( 'contacts_address', 'option' ); ?></p>
			</div>
			<div class="copy-menu">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'copyright',
						'container'      => false,
						'menu_class'     => 'copy-menu-nav',
						'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'fallback_cb'    => '__return_false',
					)
				);
				?>
			</div>
		</div>

	</div>
</footer>
<div id="footbar" class="flex lg:hidden fixed bg-red bottom-0 h-10 w-full z-50 items-center justify-center">
    <a href="<?php the_field( 'general_simple_booking_url', 'option' ); ?>" target="_blank" class="uppercase font-primary_black text-beige w-full text-center"><?php esc_html_e( 'Jetzt Buchen', 'aristella' ) ?></a>
</div>