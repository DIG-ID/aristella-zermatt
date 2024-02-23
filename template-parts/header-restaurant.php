<header id="header-main" class="header-main header-restaurant w-full fixed top-0 z-40 bg-black header-mask" itemscope itemtype="http://schema.org/WebSite">
	<nav class="navigation-main bg-black w-full flex items-center py-0 xl:py-0 min-h-[92px]" role="navigation" aria-label="<?php esc_attr_e( 'main navigation', 'aristella' ); ?>">
		<div id="menu-container" class="menu relative w-full max-w-[1320px] mx-auto items-center justify-evenly xl:pb-14">
			<div class="site-branding">
				<?php
				if ( is_front_page() ) :
					echo '<h1 class="screen-reader-text">' . get_bloginfo( 'name' ) . '</h1>';
				else :
					echo '<p class="screen-reader-text">' . get_bloginfo( 'name' ) . '</p>';
				endif;
				?>
				<div class="navbar-brand custom-logo-link max-w-[160px]">
					<a href="/" class="custom-logo-link" rel="home">
					<img width="396" height="113" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/restaurant_logo_white.png" class="custom-logo" alt="aristella-zermatt" decoding="async" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/restaurant_logo_white.png 396w, <?php echo get_stylesheet_directory_uri(); ?>/assets/images/restaurant_logo_white.png 300w" sizes="(max-width: 396px) 100vw, 396px">
					</a>
				</div>
			</div>
			<div class="main-menu">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'restaurant',
					'menu_id'        => 'menu-main-menu',
					'container'      => false,
					'menu_class'     => 'main-menu-top-level',
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'fallback_cb'    => '__return_false',
				)
			);
			?>
			</div>
			<div class="reservation-menu-wrapper flex">
				<div id="booking-menu" class="w-44 grid-cols-1">
					<a href="javascript:;" onclick="Localina.startBooking('5afc91f1-648b-45f1-a57a-31a123c91269', 'https://www.mylocalina.ch');">
						<div class="col-span-1 bg-red text-beige font-primary_cn text-[13px] leading-[1.7] tracking-[0.015em] py-[11px] flex flex-col justify-center items-center">
							<img class="w-4 inline-block mb-2" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/calendar-days.svg" alt="calendar icon" title="calendar icon"><span class="text-center inline-block"><?php esc_html_e( 'TISCH-', 'aristella' ); ?><br><?php esc_html_e( 'RESERVATION', 'aristella' ); ?></span>
						</div>
					</a>
				</div>
				<div class="wpml-megamenu-language-switcher">
					<?php do_action( 'wpml_add_language_selector' ); ?>
				</div>
			</div>
			<button id="mobile-menu-toggle" class="mobile-menu-toggle absolute right-4">
				<span class="menu-icon"><img id="menu-icon-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/burger-menu.svg" title="mobile menu" alt="mobile menu"></span>
			</button>
		</div>
	</nav>
	<div class="mobile-menu">
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'restaurant',
				'container'      => false,
				'menu_class'     => 'main-menu-responsive block text-responsive-menu uppercase', // Adjust classes here
				'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'fallback_cb'    => '__return_false',
			)
		);
		?>
		<div class="wpml-language-switcher wpml-language-switcher-normal xl:hidden">
			<?php do_action( 'wpml_add_language_selector' ); ?>
		</div>
	</div>
</header>
<div id="footbar-restaurant" class="flex lg:hidden fixed bg-red bottom-0 h-10 w-full z-50 items-center justify-center">
    <a href="javascript:;" onclick="Localina.startBooking('5afc91f1-648b-45f1-a57a-31a123c91269', 'https://www.mylocalina.ch');" class="uppercase font-primary_black text-beige w-full text-center"><?php esc_html_e( 'Tisch-Reservation', 'aristella' ) ?></a>
</div>
