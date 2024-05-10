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

/**
 * Tratamento de informações
 */

// Número de comentários
$comments_number = number_format_i18n( get_comments_number() );

// Variáveis em condicional de acordo com a quantidade de comentários
if( !have_comments() && $comments_number < '1' ):

	// Título em caso de não haver comentários
	$comments_title = 'Sem comentários';

elseif( have_comments() && $comments_number == '1' ):

	// Título em caso de haver somente um comentários
	$comments_title = '1 comentário';

elseif( have_comments() && $comments_number >= '2' ):

	// Título em caso de haver vários comentários
	$comments_title = $comments_number . ' comentários';

endif;
?>
<!-- Seção de Comentários -->
<section class="">
	<h4 class=""><?php echo $comments_title;?></h4>
	<?php 
	/**
	 * Retorna com uma mensagem, se os comentários estiverem fechados
	 */
	if( !comments_open() ){
		print '<span class="">Seção de comentários fechada</span>';
	}
	?>
	<ul class="">
		<?php
		wp_list_comments( 
			array(
				'type'              => 'comment',
				'avatar_size'       => 32,
				'reverse_top_level' => true,
				'reverse_children'  => true,
				'format'            => 'html5'
			)
		 ); 
		?>
	</ul>
	<?php ion_get_element( 'form', 'comments' );?>
</section>
<!-- Fim de Seção de Comentários -->
