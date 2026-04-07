<div id="myIncertIframe"></div>
<script type="text/plain" data-cookieconsent="statistics">
(function(){
    var script = document.createElement('script');
    script.src = 'https://myincert.com/public/api/incertClient.js';
    script.onload = function() {
        var frameContainerID = 'myIncertIframe',
            landingPageURL = 'https://aristella.traumgutscheine.com/start.php?incertframe=new',
            trackingCode = 'UA-123456789';
        incertIframe(frameContainerID, landingPageURL, trackingCode);
    };
    document.head.appendChild(script);
})();
</script>