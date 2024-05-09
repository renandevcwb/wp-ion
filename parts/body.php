<?php 
/**
 * 
 * Arquivo de corpo de página
 * 
 * @package wp-ion
 * 
 * @since 1.0.0
 * 
 */

/**
 * Trata cada tipo de conteúdo para suas respectivas requisições
 */
if( is_front_page() ):
    ion_get_element( 'container', 'void' );
elseif( is_page() ):
    ion_get_element( 'container', 'void' );
elseif( is_search() ):
    ion_get_element( 'container', 'search' );
elseif( is_404() ):
    ion_get_element( 'container', '404' );
elseif( is_home() ):
    ion_get_element( 'container', 'home' );
elseif( is_single() ):
    ion_get_element( 'container', 'single' );
elseif( is_archive() || is_category() || is_tag() ):
    ion_get_element( 'container', 'archive' );
endif;
