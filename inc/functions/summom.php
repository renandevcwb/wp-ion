<?php 
/**
 * 
 * Arquivo de procedimentos e funções de requisição de partes e elementos do tema
 * 
 * @package wp-ion
 * 
 * @since 1.0.0
 * 
 */

/**
 * Retorna Partes 
 */
function ion_get_part( $part ){

    get_template_part( 'parts/' . $part );

}

/**
 * Retorna elementos
 */
function ion_get_element( $slug, $element ){

    $plural = $slug . 's';

    get_template_part( 'elements/' . $plural . '/' . $slug, $element );

}
