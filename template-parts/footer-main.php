<footer class="footer-main border-t pt-14 xl:pt-14 bg-black text-beige">
    <div class="ar-container-grid">
        <div class="ar-container">
            <div class="col-span-12">
                <?php
                $footer_logo = get_field( 'general_footer_logo','option' );
                if( $footer_logo ) :
                    echo wp_get_attachment_image( $footer_logo, 'full' );
                endif;
                ?>
            </div>
            <div class="col-span-8">ARISTELLA SWISSFLAIR HOTEL & APARTEMENT
    RESTAURANT SPYCHER</div>
            <div class="col-span-4">SOCIALS</div>
            <div class="col-span-8">
                <?php
                $newsletter_form = get_field( 'general_newsletter_form_shortcode', 'option' );
                echo do_shortcode( $newsletter_form );
                ?>
            </div>
            <div class="col-span-4">Logos</div>
        </div>
    </div>
</footer>