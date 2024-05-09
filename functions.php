<?php 
/**
 * 
 * Arquivo de procedimentos e funções do tema ( Altera o Core do WordPress )
 * 
 * @package wp-ion
 * 
 * @since 1.0.0
 * 
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Saída se acessado diretamente
}

/**
 * Faz a request do arquivo de ganchos do WordPress
 */
require get_template_directory() . '/inc/functions/hooks.php';

/**
 * Faz a request do arquivo com procedimentos e funções de chamada
 */
require get_template_directory() . '/inc/functions/summom.php';

/**
 * Faz a request do arquivo de registro de menus de navegação
 */
require get_template_directory() . '/inc/functions/menus.php';

/**
 * Faz a request do arquivo de scripts e styles internos
 */
require get_template_directory() . '/inc/functions/scripts.php';
