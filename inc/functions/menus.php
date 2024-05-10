<?php 
/**
 * 
 * Registros de menus
 * 
 * @package wp-ion
 * 
 * @since 1.0.0
 * 
 */

function register_ion_menus(){

    register_nav_menus(
        array(
            'top'     => 'Navegação Superior',
            'side'    => 'Navegação Lateral',
            'footer1' => 'Navegação 1 Rodapé',
            'footer2' => 'Navegação 2 Rodapé',
            'footer3' => 'Navegação 3 Rodapé',
            'footer4' => 'Navegação de Redes Sociais'
        )
    );
}

add_action( 'after_setup_theme', 'register_ion_menus' );

/**
 * Adiciona Classes a tag li para Barras de Navegação
 */
function ion_set_li_class( $classes, $item, $args ){

    $classes[] = 'nav-item';

    return $classes;

}

add_filter('nav_menu_css_class', 'ion_set_li_class', 1, 3);

/**
 * Adiciona Classes a tag âncora das Barras de Navegação
 */
function ion_add_link_atts( $atts ){

    $atts['class'] = "nav-link";

    return $atts;

}

add_filter( 'nav_menu_link_attributes', 'ion_add_link_atts');
