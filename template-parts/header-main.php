<header id="header-main" class="header-main w-full fixed top-0 z-40 bg-black header-mask" itemscope itemtype="http://schema.org/WebSite">
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
				<div class="navbar-brand custom-logo-link max-w-[160px]"><?php the_custom_logo(); ?></div>
			</div>
			<div class="main-menu">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'main',
					'menu_id'        => 'menu-main-menu',
					'container'      => false,
					'menu_class'     => 'main-menu-top-level',
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'fallback_cb'    => '__return_false',
				)
			);
			?>
			</div>
			<div class="booking-menu-wrapper flex">
				<div id="booking-menu" class="w-44 grid-cols-1">
					<a target="_blank" href="<?php the_field( 'general_simple_booking_url', 'option' ); ?>">
						<div class="col-span-1 bg-beige text-black font-primary text-xs uppercase text-center p-[6px]">
							<?php esc_html_e( 'DIREKTBUCHER-VORTEILE', 'aristella' ) ?>
						</div>
						<div class="col-span-1 bg-red text-beige font-primary_black text-[1rem] leading-[1rem] tracking-tighter py-4 flex justify-center">
							<img class="w-4 inline-block mr-2" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/calendar-days.svg" alt="calendar icon" title="calendar icon"><span class="text-left inline-block"><?php esc_html_e( 'JETZT', 'aristella' ); ?><br><?php esc_html_e( 'BUCHEN', 'aristella' ); ?></span>
						</div>
					</a>
				</div>
				<div class="wpml-megamenu-language-switcher">
					<?php do_action( 'wpml_add_language_selector' ); ?>
				</div>
			</div>
			<button id="mobile-menu-toggle" class="mobile-menu-toggle absolute right-4">
				<span class="menu-icon"><img id="menu-icon-img" src="/wp-content/themes/aristella-zermatt/assets/images/burger-menu.svg" title="mobile menu" alt="mobile menu"></span>
			</button>
		</div>
	</nav>
	<div class="mobile-menu">
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'main_mobile',
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
