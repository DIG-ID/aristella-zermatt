<section id="section-content" class="section-content bg-white overflow-hidden pt-16 pb-0 lg:pb-10">
    <div class="ar-container-grid px-7 lg:px-0">
        <div class="ar-container-small">
            <div class="col-span-1 md:col-span-8 xl:col-span-12 pt-28 text-center">
                <img class="mx-auto mb-7" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/title-ornament-dark.png" alt="ornament" title="ornament">
                <h2 class="title-normal text-black"><?php the_title(); ?></h2>
            </div>
        </div>
    </div>
    <div class="ar-container-grid !gap-0 px-7 lg:px-0">
        <div class="ar-container-small md:gap-x-4 xl:gap-x-9 pb-12">
            <div class="col-span-1 md:col-span-8 xl:col-span-12 pt-28 pb-12">
                <?php 
                $alt_logo = get_field( 'general_alt_logo','option' );
                $size = 'full';
                $classes = 'w-56';
                if( $alt_logo ) {
                    echo wp_get_attachment_image( $alt_logo, $size, false, array('class' => $classes) );
                } ?>
            </div>
            <div class="col-span-1 md:col-span-8 xl:col-span-8">
                <p class="font-primary_cn text-[22px] font-bold text-black mb-4">Hotel Aristella Swissflair</p>
                <p class="text-body mb-4">Das familiengeführte Aristella swissflair steht für herzliche Gastfreundschaft und authentische Ferienerlebnisse. Unser Hotel ist zentral gelegen und umfasst 32 Zimmer sowie einen kleinen Wellnessbereich und das rustikale Flambée-Restaurant "Spycher".</p>
                <p class="text-body mb-4">Wir bieten dir eine abwechslungsreiche Tätigkeit mit Verantwortung. Für uns ist es  wichtig, dass sich die Mitarbeiter wohl fühlen. Bei Arbeitsbeginn am Nachmittag kann man selbst die frühen Morgenstunden auf der Piste geniessen. So lässt es sich später zufriedener arbeiten.</p>
                <p class="font-primary_cn text-[22px] font-bold text-black mb-4">Wir bieten dir:</p>
                <ul class="text-body mb-4 list-disc pl-10">
                    <li>geregelte Arbeitszeiten</li>
                    <li>Mitspracherecht beim Erstellen des Monats-Arbeitsplanes</li>
                    <li>Möglichkeit auf längerfristige Anstellung</li>	
                    <li>angenehmes Arbeitsklima</li>
                    <li>Team- aber vor allem auch selbstständige Arbeit</li>
                </ul>
            </div>
            <div class="col-span-1 md:col-span-8 xl:col-span-4">
                <p class="font-primary_cn text-[22px] font-bold text-black mb-4">Kontakt</p>
                <p class="text-body">Hotel Aristella - swissflair<br>Steinmattweg 7<br>CH-3920 Zermatt<br>Herr Bernard Perren<br><br>+41 78 70 80 177<br>office@aristella-zermatt.ch<br>www.aristella-zermatt.ch</p>
            </div>
        </div>
        <div class="ar-container-small md:gap-4 xl:gap-9">
            <?php $b = 1; ?>
            <?php
            $jobs_choice_query_args = array(
                'post_type'     => 'jobs',
                'nopaging'      => true,
                'order'         => 'DESC',
                'orderby'       => 'date',
                'category_name' => 'jobs-aristella'
            );
            $jobs_choice_query = new WP_Query( $jobs_choice_query_args );
            if ( $jobs_choice_query->have_posts() ) :
                while ( $jobs_choice_query->have_posts() ) :
                    $jobs_choice_query->the_post();
            ?>
            <div class="col-span-1 md:col-span-8 xl:col-span-8 pt-12 pb-12 border-t border-t-black">
                <p class="font-primary_cn text-[22px] font-bold text-black mb-4">- <?php echo get_the_title(); ?></p>
                <div class="text-body text-black mb-4"><?php echo get_field('description_intro'); ?></div>
                <div x-data="{ openTab: 0 }" class="accordion">
                    <div class="accordion-item">
                        <div x-show="openTab === <?php echo $b; ?>"
                            id="flush-collapse-aris-<?php echo $b; ?>"
                            class="accordion-collapse collapse">
                            <div class="accordion-body text-body text-black mb-4 visible">
                                <?php echo get_field('description_detailed'); ?>
                            </div>
                        </div>
                        <h2 class="accordion-header" id="flush-heading-<?php echo $b; ?>">
                            <button @click="openTab = (openTab === <?php echo $b; ?>) ? 0 : <?php echo $b; ?>"
                                    :class="{ 'flipped': openTab === <?php echo $b; ?> }"
                                    class="accordion-button flex items-center cursor-pointer focus:outline-none text-body font-bold text-black py-4"
                                    aria-expanded="false"
                                    aria-controls="flush-collapse-aris-<?php echo $b; ?>">
                                Mehr erfahren
                            </button>
                        </h2>
                    </div>
                </div>
            </div>
            <?php $b++;
                endwhile;
            endif;
            ?>
        </div>

    </div>
</section>

<section id="section-content-2" class="section-content-2 bg-beige overflow-hidden pt-16 pb-0 lg:pb-10">
    <div class="ar-container-grid !gap-0 px-7 lg:px-0">
        <div class="ar-container-small md:gap-x-4 xl:gap-x-9 pb-12">
            <div class="col-span-1 md:col-span-8 xl:col-span-12 pt-0 lg:pt-28 pb-12">
                <?php 
                $alt_logo = get_field( 'general_restaurant_logo','option' );
                $size = 'full';
                $classes = 'w-56';
                if( $alt_logo ) {
                    echo wp_get_attachment_image( $alt_logo, $size, false, array('class' => $classes) );
                } ?>
            </div>
            <div class="col-span-1 md:col-span-8 xl:col-span-8">
                <p class="font-primary_cn text-[22px] font-bold text-black mb-4">Restaurant Spycher</p>
                <p class="text-body mb-4">Das rustikale Flambé-Restaurant «Spycher» steht für eine ausgewogene Mischung von traditionsreichen Klassikern und aussergewöhnlichen Kreationen des Zermatter Küchenchefs Helmut Bauer.</p>
                <p class="text-body mb-4"><b>Deine Aufgaben und was dich im Spycher Team erwartet</b></p>
                <p class="text-body mb-4">Der «Spycher» in Zermatt ist ein Begriff für Qualität! Wir flambieren und tranchieren vor dem Gast. Zudem haben wir eine aussergewöhnliche, prämierte Weinkarte, auf welche wir grossen Wert legen. Wir bieten dem Gast noch den klassischen Nachschank-Service.</p>
                <p class="text-body mb-4">Es erwartet dich ein junges, aufgeschlossenes Team mit rund 5 Mitarbeitern im Service, welche bestrebt sind, die hohen Ansprüche unserer internationalen Gäste zu übertreffen.</p>
                <p class="text-body mb-4">Wir bieten dir eine abwechslungsreiche Tätigkeit mit Verantwortung. Unser Restaurant ist seit Jahren bekannt für seine Flambés. Wir sind ein klassisches Abendrestaurant. Dies bedeutet, wir haben nur abends geöffnet. Am Nachmittag beginnen wir mit dem Mise-en-place und ab 18.00 Uhr bedienen wir die ersten Gäste. Wir sind bestrebt, dem Gast einen unvergesslichen Abend zu gestalten.</p>
                <p class="text-body mb-4">Für uns ist es aber auch wichtig, dass sich die Mitarbeiter wohl fühlen. Bei Arbeitsbeginn am Nachmittag kann man selbst die frühen Morgenstunden auf der Piste geniessen. So lässt es sich später zufriedener arbeiten.</p>
                <p class="font-primary_cn text-[22px] font-bold text-black mb-4">Wir bieten dir:</p>
                <ul class="text-body mb-4 list-disc pl-10">
                    <li>angenehmes Arbeitsklima</li>
                    <li>Teamarbeit und selbstständiges arbeiten</li>
                    <li>Arbeitsbeginn am Nachmittag, vormittags jeweils frei</li>	
                    <li>Trinkgeld</li>
                    <li>Möglichkeit auf Jahresstelle</li>
                    <li>grundsätzlich Mittwochs frei</li>
                    <li>Erweiterung des Weinwissens</li>
                    <li>die Liebe zum Beruf leben zu dürfen</li>
                    <li>Anerkennung und Bewunderung der Gäste bei den Flambé Shows</li>
                </ul>
            </div>
            <div class="col-span-1 md:col-span-8 xl:col-span-4">
                <p class="font-primary_cn text-[22px] font-bold text-black mb-4">Kontakt</p>
                <p class="text-body">Hotel Aristella - swissflair<br>Steinmattweg 7<br>CH-3920 Zermatt<br>Herr Bernard Perren<br><br>+41 78 70 80 177<br>office@aristella-zermatt.ch<br>www.aristella-zermatt.ch</p>
            </div>
        </div>
        <div class="ar-container-small md:gap-4 xl:gap-9">
            <?php $b = 1; ?>
            <?php
            $jobs_choice_query_args = array(
                'post_type'     => 'jobs',
                'nopaging'      => true,
                'order'         => 'DESC',
                'orderby'       => 'date',
                'category_name' => 'jobs-restaurant'
            );
            $jobs_choice_query = new WP_Query( $jobs_choice_query_args );
            if ( $jobs_choice_query->have_posts() ) :
                while ( $jobs_choice_query->have_posts() ) :
                    $jobs_choice_query->the_post();
            ?>
            <div class="col-span-1 md:col-span-8 xl:col-span-8 pt-12 pb-12 border-t border-t-black">
                <p class="font-primary_cn text-[22px] font-bold text-black mb-4">- <?php echo get_the_title(); ?></p>
                <div class="text-body text-black mb-4"><?php echo get_field('description_intro'); ?></div>
                <div x-data="{ openTab: 0 }" class="accordion">
                    <div class="accordion-item">
                        <div x-show="openTab === <?php echo $b; ?>"
                            id="flush-collapse-aris-<?php echo $b; ?>"
                            class="accordion-collapse collapse">
                            <div class="accordion-body text-body text-black mb-4 visible">
                                <?php echo get_field('description_detailed'); ?>
                            </div>
                        </div>
                        <h2 class="accordion-header" id="flush-heading-<?php echo $b; ?>">
                            <button @click="openTab = (openTab === <?php echo $b; ?>) ? 0 : <?php echo $b; ?>"
                                    :class="{ 'flipped': openTab === <?php echo $b; ?> }"
                                    class="accordion-button flex items-center cursor-pointer focus:outline-none text-body font-bold text-black py-4"
                                    aria-expanded="false"
                                    aria-controls="flush-collapse-aris-<?php echo $b; ?>">
                                Mehr erfahren
                            </button>
                        </h2>
                    </div>
                </div>
            </div>
            <?php $b++;
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>