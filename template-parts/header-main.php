<header id="header-main" class="header-main w-full fixed top-0 z-40 bg-white" itemscope itemtype="http://schema.org/WebSite">
	<nav class="navigation-main bg-black w-full flex items-center py-8 xl:py-10" role="navigation" aria-label="<?php esc_attr_e( 'main navigation', 'aristella' ); ?>">
		<div class="menu relative w-full max-w-[1320px] mx-auto">
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
	</nav>
</header>
