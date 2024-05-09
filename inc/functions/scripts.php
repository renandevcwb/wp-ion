<?php 
/**
 * 
 * Request de scripts e css
 * 
 * @package wp-ion
 * 
 * @since 1.0.0
 * 
 */

$theme_dir = get_template_directory_uri();

/**
 * Request para Javascript
 */
function ion_enqueue_js(){

    wp_enqueue_script( 'ion-scritp', $theme_dir . '/assets/js/ion.js', aaray(), '1.0.0', true );

}

add_action( 'ion_enqueue_js' );

/**
 * Raquest para Css
 */
function ion_enqueue_css(){

    wp_enqueue_style( 'ion-css', $theme_dir . '/assets/css/ion.css', array(), '1.0.0', 'all' );
}

add_action( '' );
