<section id="section-amenities" class="section-amenities after-triangle">
    <div class="ar-container-grid bg-black py-24">
        <div class="col-span-1 md:col-span-8 xl:col-span-12">
            <?php
            $feature_to_svg = array(
                'allergikerfreundlich' => 'allergikerfreundlich.png',
                'badewanne' => 'badewanne.png',
                'balkon' => 'balkon.png',
                'bar' => 'bar.png',
                'bergblick' => 'bergblick.png',
                'doppelzimmer' => 'doppelzimmer.png',
                'dusche' => 'dusche.png',
                'einzelzimmer' => 'einzelzimmer.png',
                'fahrstuhl' => 'fahrstuhl.png',
                'ferien' => 'ferien.png',
                'flatscreen' => 'flatscreen.png',
                'fussbodenheizung' => 'fussbodenheizung.png',
                'glutenfree' => 'glutenfree.png',
                'haartrockner' => 'haartrockner.png',
                'hundefreundlich' => 'hundefreundlich.png',
                'kitchen' => 'kitchen.png',
                'lactosefree' => 'lactosefree.png',
                'minibar' => 'minibar.png',
                'nichtraucher' => 'niichtraucher.png',
                'raucherbereich' => 'raucherbereich.png',
                'rest' => 'rest.png',
                'romantik' => 'romantik.png',
                'sat-kabel-tv' => 'sat-kabel-TV.png',
                'sauna' => 'sauna.png',
                'shuttleservice' => 'shuttleservice.png',
                'skifahren' => 'skifahren.png',
                'telefon' => 'telefon.png',
                'velo_gesundheit' => 'velo_gesundheit.png',
                'waschenservice' => 'waschenservice.png',
                'gratis_wifi' => 'wifi.png',
                'wlan_in_zimmer' => 'wlan_in_zimmer.png',
                'zeitungc' => 'zeitungc.png',
                'zimmersafe' => 'zimmersafe.png',
            );
            $selected_features = get_field('amenities_list'); 
            $persons = get_field( 'amenities_number_of_persons' );
            if ($selected_features) {
                echo '<ul class="flex flex-col lg:flex-wrap lg:flex-row justify-center items-center overflow-hidden">';
                echo '<li class="flex flex-col items-center mb-7 mx-5"><img class="w-[42px]" src="' . get_template_directory_uri() . '/assets/images/amenities/person.png" alt="persons"><span class="font-primary_bold_cn text-beige text-xs tracking-[-0.015em] uppercase mt-3">' . esc_html($persons) . '</span></li>';
                foreach ($selected_features as $feature) {
                    $feature_label = $feature['label'];
                    $feature_value = $feature['value'];

                    if (isset($feature_to_svg[$feature_value])) {
                        $svg_filename = $feature_to_svg[$feature_value];
                        echo '<li class="flex flex-col items-center mb-7 mx-5"><img class="w-[42px]" src="' . esc_url(get_template_directory_uri() . '/assets/images/amenities/' . $svg_filename) . '" alt="' . esc_attr($feature_label) . '"><span class="font-primary_bold_cn text-beige text-xs tracking-[-0.015em] uppercase mt-3">' . esc_html($feature_label) . '</span></li>';
                    } else {
                        echo '<li>' . esc_html($feature_label) . '</li>';
                    }
                }
                echo '</ul>';
            } else {
                echo __('No features selected.', 'aristella');
            }
            ?>
        </div>
    </div>
</section>