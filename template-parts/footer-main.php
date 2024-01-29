<footer class="footer-main border-t pt-14 bg-black text-beige">
    <div class="ar-container-grid">
        <div class="ar-container-small">
            <div class="col-span-12">
                <?php
                $footer_logo = get_field( 'general_footer_logo','option' );
                if( $footer_logo ) :
                    echo wp_get_attachment_image( $footer_logo, 'full' );
                endif;
                ?>
            </div>
            <div class="col-span-8">
                <p class="text-body text-[#a0a0a0] uppercase py-5"><?php esc_html_e( 'ARISTELLA SWISSFLAIR HOTEL & APARTEMENT', 'aristella' ) ?><br><?php esc_html_e( 'RESTAURANT SPYCHER', 'aristella' ) ?></p>
            </div>
            <div class="col-span-4 text-right pt-11 pr-12">
                <a href="<?php get_field( 'general_socials_facebook_url', 'option' ) ?>" class="inline-block mr-1">
                    <?php 
                    $fbImg = get_field( 'general_socials_facebook_icon', 'option' );
                    $size = 'full';
                    $classes = 'w-5';
                    if( $fbImg ) {
                        echo wp_get_attachment_image( $fbImg, $size, false, array('class' => $classes) );
                    } ?>
                </a>
                <a href="<?php get_field( 'general_socials_instagram_url', 'option' ) ?>" class="inline-block mr-1">
                    <?php 
                    $fbImg = get_field( 'general_socials_instagram_icon', 'option' );
                    $size = 'full';
                    $classes = 'w-5';
                    if( $fbImg ) {
                        echo wp_get_attachment_image( $fbImg, $size, false, array('class' => $classes) );
                    } ?>
                </a>
                <a href="<?php get_field( 'general_socials_youtube_url', 'option' ) ?>" class="inline-block">
                    <?php 
                    $fbImg = get_field( 'general_socials_youtube_icon', 'option' );
                    $size = 'full';
                    $classes = 'w-5';
                    if( $fbImg ) {
                        echo wp_get_attachment_image( $fbImg, $size, false, array('class' => $classes) );
                    } ?>
                </a>
            </div>
            <div class="col-span-8">
                <?php
                $newsletter_form = get_field( 'general_newsletter_form_shortcode', 'option' );
                echo do_shortcode( $newsletter_form );
                ?>
            </div>
            <div class="col-span-4">
                <!-- TrustYou Widget -->
                <iframe class="float-right" src="https://api.trustyou.com/hotels/0c0da902-e28d-4826-b674-679d075a59b7/seal.html?key=645d3a3a-45b8-4316-93c1-cf42411a5470&amp;size=l&amp;scale=5" width="125px" height="101px" frameborder="0" scrolling="no"></iframe>
                <!-- /TrustYou Widget -->
                <img class="w-[110px] float-right" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/best.png" alt="badge" title="Travellers Choice">
            </div>
        </div>
    </div>
    <div class="ar-container-grid border-t border-t-[#1e1e1e] py-6">
		<div class="col-span-1 md:col-span-8 xl:col-span-8 xl:col-start-3 flex flex-col xl:flex-row justify-center xl:justify-between items-center">
			<div class="copy-info flex flex-col xl:flex-row">
                <p class="font-primary_cn text-[13px] tracking-[-0.015em] leading-[1.7] text-[#a0a0a0]"><?php the_field( 'contacts_address', 'option' ); ?></p>
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