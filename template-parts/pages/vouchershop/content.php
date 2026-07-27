<?php
$voucher_lang = ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE ) ? ICL_LANGUAGE_CODE : 'de';
?>
<div id="myIncertIframe"></div>
<script type="text/plain" data-cookieconsent="statistics">
(function(){
    var script = document.createElement('script');
    script.src = 'https://myincert.com/public/api/incertClient.js';
    script.onload = function() {
        var frameContainerID = 'myIncertIframe',
            landingPageURL = 'https://aristella.traumgutscheine.com/start.php?incertframe=new&language=<?php echo esc_js( $voucher_lang ); ?>',
            trackingCode = 'UA-123456789';
        incertIframe(frameContainerID, landingPageURL, trackingCode);
    };
    document.head.appendChild(script);
})();
</script>