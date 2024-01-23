<header id="header-main" class="header-main header-restaurant w-full fixed top-0 z-40 bg-white" itemscope itemtype="http://schema.org/WebSite">
	<nav class="navigation-main bg-black w-full flex items-center py-0 xl:py-0" role="navigation" aria-label="<?php esc_attr_e( 'main navigation', 'aristella' ); ?>">
		<div class="menu relative w-full max-w-[1320px] mx-auto items-center justify-evenly">
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
			<div id="booking-menu" class="w-44 grid-cols-1">
				<a target="_blank" href="<?php the_field( 'general_simple_booking_url', 'option' ); ?>">
					<div class="col-span-1 bg-beige text-black font-primary text-xs uppercase text-center p-[6px]">
						<?php esc_html_e( 'DIREKTBUCHER-VORTEILE', 'aristella' ) ?>
					</div>
					<div class="col-span-1 bg-red text-beige font-primary_black text-[1rem] leading-[1rem] tracking-tighter py-4 flex justify-center">
						<img class="w-4 inline-block mr-2" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/calendar-days.svg" alt="calendar icon" title="calendar icon"></i><span class="text-left inline-block">JETZT<br>BUCHEN</span>
					</div>
				</a>
			</div>
		</div>
	</nav>
</header>
