<?php 
/**
 * 
 * Formulário de comentários
 * 
 * @package wp-ion
 * 
 * @since 1.0.0
 * 
 */

/**
 * Cria a array para a chamada de formulário de comentários
 */
$comment_args = array(
    'author'        => '<input type="text" class="" placeholder="Seu nome"/>',
    'email'         => '<input type="email" class="" placeholder="Seu e-mail"/>',
    'comment_field' => '<textarea class="" rows="6" cols="33">Escreva o seu comentário</textarea>',
    'must_log_in'   => '<span class="">Faça login para continuar</span>',
    'logged_in_as'  => '<span class="">Logado como ' . wp_get_current_user() . '</span>'
);

/**
 * Chama o formulário de comentários
 */
comment_form( $comment_args );
