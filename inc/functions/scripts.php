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

/**
 * Request para Javascript
 */
function ion_enqueue_scripts(){

    // Arquivo js padrão do tema
    wp_enqueue_script( 'IonScript', get_template_directory_uri(). '/assets/js/ion.js', array(), '1.0.0', true );

    // Arquivo CSS Padrão do tema
    wp_enqueue_style( 'IonCss', get_template_directory_uri() . '/assets/css/ion.css', array(), '1.0.0', 'all' );

}

add_action( 'wp_enqueue_scripts', 'ion_enqueue_scripts' );
