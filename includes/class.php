<?php
function change_radio_checklist( $args ) {
    if ( ! empty( $args['taxonomy'] ) || $args['taxonomy'] === 'offering-type' || $args['taxonomy'] === 'accommodation-type' || $args['taxonomy'] === 'food-category' /* <== Change to your required taxonomy */ ) {
        if ( empty( $args['walker'] ) || is_a( $args['walker'], 'Walker' ) ) { // Don't override 3rd party walkers.
            if ( ! class_exists( 'WPS_Walker_Category_Radio_Checklist' ) ) {
             
                class WPS_Walker_Category_Radio_Checklist extends Walker_Category_Checklist {
                    function walk( $elements, $max_depth, ...$args ) {
                        $output = parent::walk( $elements, $max_depth, ...$args );
                        $output = str_replace(
                            array( 'type="checkbox"', "type='checkbox'" ),
                            array( 'type="radio"', "type='radio'" ),
                            $output
                        );

                        return $output;
                    }
                }
            }

            $args['walker'] = new WPS_Walker_Category_Radio_Checklist;
        }
    }

    return $args;
}

add_filter( 'wp_terms_checklist_args', 'change_radio_checklist' );