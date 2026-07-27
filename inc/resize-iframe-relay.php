<?php
/**
 * Serves the incert voucher iframe's resize relay page at whatever URL it is
 * requested from (e.g. /vouchershop/resize_iframe.html, /en/vouchershop/resize_iframe.html),
 * since the widget builds that URL relative to the current page path and WordPress
 * otherwise 404s it as an unmatched permalink.
 */

add_action( 'template_redirect', function() {
	if ( false === strpos( $_SERVER['REQUEST_URI'], 'resize_iframe.html' ) ) {
		return;
	}

	status_header( 200 );
	header( 'Content-Type: text/html; charset=windows-1252' );
	?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
 <title>Resize Interface</title>
 <script type="text/javascript">
 function onLoad() {
	 var params = window.location.search.substring( 1 ).split( '&' );
	 var height,scrollIntoView=false,scrollJumpOffset=0;
	 for( var i = 0, l = params.length; i < l; ++i ) {
		 var parts = params[i].split( '=' );
		 switch( parts[0] ) {
			 case 'height':
				height = parseInt( parts[1] );
				break;
			 case 'scrollIntoView':
				scrollIntoView=true;
				break;
			 case 'scrollJumpOffset':
				scrollJumpOffset= parseInt( parts[1] );
				break;
		 }
	 }
	 if( typeof( height ) == 'number' ) {
		window.top.updateIFrame( height, scrollIntoView, scrollJumpOffset);
	 }
 }

 window.onload = onLoad;
 </script>
 </head>
 <body>
 <p>Resizing IFrame...</p></body></html>
<?php
	exit;
} );
