<section id="section-amenities" class="section-amenities after-triangle-dark">
    <div class="ar-container-grid bg-black py-24">
        <div class="col-span-1 md:col-span-8 xl:col-span-12">
            <?php
            $feature_to_svg = array(
                'doppelzimmer' => 'doppelzimmer.png',
                'gratis_wifi' => 'wifi.png',
                'bergblick' => 'bergblick.png',
                'balkon' => 'balkon.png',
                'dusche' => 'dusche.png',
                'allergikerfreundlich' => 'allergikerfreundlich.png',
                'flatscreen' => 'flatscreen.png',
                'haartrockner' => 'haartrockner.png',
                'nichtraucher' => 'niichtraucher.png',
                'sat-kabel-tv' => 'sat-kabel-TV.png',
                'telefon' => 'telefon.png',
                'kitchen' => 'kitchen.png',
            );
            $selected_features = get_field('amenities_amenities_list'); 
            $persons = get_field( 'amenities_number_of_persons' );
            if ($selected_features) {
                echo '<ul class="flex justify-center items-center">';
                echo '<li class="flex flex-col items-center mb-7 mx-7"><img class="w-[42px]" src="' . get_template_directory_uri() . '/assets/images/amenities/person.png" alt="persons"><span class="font-primary_bold_cn text-beige text-xs tracking-[-0.015em] uppercase mt-3">' . esc_html($persons) . '</span></li>';
                foreach ($selected_features as $feature) {
                    $feature_label = $feature['label'];
                    $feature_value = $feature['value'];

                    if (isset($feature_to_svg[$feature_value])) {
                        $svg_filename = $feature_to_svg[$feature_value];
                        echo '<li class="flex flex-col items-center mb-7 mx-7"><img class="w-[42px]" src="' . esc_url(get_template_directory_uri() . '/assets/images/amenities/' . $svg_filename) . '" alt="' . esc_attr($feature_label) . '"><span class="font-primary_bold_cn text-beige text-xs tracking-[-0.015em] uppercase mt-3">' . esc_html($feature_label) . '</span></li>';
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