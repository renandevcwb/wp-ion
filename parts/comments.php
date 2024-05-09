<?php 
/**
 * 
 * Módulo de comentários
 * 
 * @package wp-ion
 * 
 * @since 1.0.0
 * 
 */

/**
 * Bloqueia a postagem em caso de necessidade de login
 */
if ( post_password_required() ) {
	return;
}

$comments_number = get_comments_number();
