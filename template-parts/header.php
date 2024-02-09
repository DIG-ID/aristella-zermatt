<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="facebook-domain-verification" content="12836mnj7fikqkczxez5xa1itsgrax" />
		<!-- Google tag (gtag.js) -->
			<script async src="https://www.googletagmanager.com/gtag/js?id=G-V9DWWVCDLH">
			</script>
			<script> 
				window.dataLayer = window.dataLayer || [];
				function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-V9DWWVCDLH');
			</script>
		<!-- End Google Analytics -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<?php do_action( 'wp_body_open' ); ?>