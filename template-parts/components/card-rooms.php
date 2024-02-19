<article id="post-<?php the_ID(); ?>" <?php post_class( 'card-rooms col-span-1 md:col-span-8 xl:col-span-12 ar-container-grid !gap-0' ); ?>>
    <div class="col-span-1 md:col-span-8 xl:col-span-6">
        <a href="<?php the_permalink(); ?>">
        <?php 
        $roomImg = get_field( 'hero_image' );
        $size = 'large';
        $classes = 'w-full h-full object-cover fade-in';
        if( $roomImg ) {
            echo wp_get_attachment_image( $roomImg, $size, false, array('class' => $classes) );
        } ?>
        </a>
    </div>
    <div class="col-span-1 md:col-span-8 xl:col-span-6 px-7 pt-16 pb-7 bg-white">
        <a href="<?php the_permalink(); ?>" class="title-normal text-black uppercase mb-8 inline-block"><?php the_title(); ?></a>
        <?php
            $feature_to_svg = array(
                'allergikerfreundlich' => 'allergikerfreundlich-dark.png',
                'badewanne' => 'badewanne-dark.png',
                'balkon' => 'balkon-dark.png',
                'bar' => 'bar-dark.png',
                'bergblick' => 'bergblick-dark.png',
                'doppelzimmer' => 'doppelzimmer-dark.png',
                'dusche' => 'dusche-dark.png',
                'einzelzimmer' => 'einzelzimmer-dark.png',
                'fahrstuhl' => 'fahrstuhl-dark.png',
                'ferien' => 'ferien-dark.png',
                'flatscreen' => 'flatscreen-dark.png',
                'fussbodenheizung' => 'fussbodenheizung-dark.png',
                'glutenfree' => 'glutenfree-dark.png',
                'haartrockner' => 'haartrockner-dark.png',
                'hundefreundlich' => 'hundefreundlich-dark.png',
                'kitchen' => 'kitchen-dark.png',
                'lactosefree' => 'lactosefree-dark.png',
                'minibar' => 'minibar-dark.png',
                'nichtraucher' => 'niichtraucher-dark.png',
                'raucherbereich' => 'raucherbereich-dark.png',
                'rest' => 'rest-dark.png',
                'romantik' => 'romantik-dark.png',
                'sat-kabel-tv' => 'sat-kabel-TV-dark.png',
                'sauna' => 'sauna-dark.png',
                'shuttleservice' => 'shuttleservice-dark.png',
                'skifahren' => 'skifahren-dark.png',
                'telefon' => 'telefon-dark.png',
                'velo_gesundheit' => 'velo_gesundheit-dark.png',
                'waschenservice' => 'waschenservice-dark.png',
                'gratis_wifi' => 'wifi-dark.png',
                'wlan_in_zimmer' => 'wlan_in_zimmer-dark.png',
                'zeitungc' => 'zeitungc-dark.png',
                'zimmersafe' => 'zimmersafe-dark.png',
            );
            $selected_features = get_field('amenities_list'); 
            if ($selected_features) {
                echo '<ul class="flex justify-start items-center">';
                $counter = 0;
                foreach ($selected_features as $feature) {
                    $feature_label = $feature['label'];
                    $feature_value = $feature['value'];

                    if (isset($feature_to_svg[$feature_value])) {
                        $svg_filename = $feature_to_svg[$feature_value];
                        echo '<li class="flex flex-col items-center mr-7"><img class="w-[42px]" src="' . esc_url(get_template_directory_uri() . '/assets/images/amenities/' . $svg_filename) . '" alt="' . esc_attr($feature_label) . '"><span class="font-primary_bold_cn text-black text-xs tracking-[-0.015em] uppercase mt-3">' . esc_html($feature_label) . '</span></li>';
                    } else {
                        echo '<li>' . esc_html($feature_label) . '</li>';
                    }
                    $counter++;
                    if ($counter >= 4) {
                        break;
                    }
                }
                echo '</ul>';
            } else {
                echo __('No amenities selected.', 'aristella');
            }
            ?>
        <div class="text-body mt-10 mb-5 xl:pr-[7.3rem]"><?php the_excerpt(); ?></div>
        <a class="btn-normal-s !font-bold !px-8 !py-5" href="<?php the_permalink(); ?>">
            <?php
            $language_code = ICL_LANGUAGE_CODE;
            $translated_text = '';
            switch ($language_code) {
                case 'en':
                    $translated_text = __('More information', 'aristella');
                    break;
                case 'fr':
                    $translated_text = __('Plus d\'information ', 'aristella'); 
                    break;
                default:
                    $translated_text = __('Mehr erfahren', 'aristella');
            }
            echo esc_html($translated_text); 
            ?>
        </a>
    </div>
</article>