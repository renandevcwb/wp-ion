<?php 
/**
 * 
 * Corpo de página de busca
 * 
 * @package wp-ion
 * 
 * @since 1.0.0
 * 
 */

/**
 * Trata os dados e inicia a query de busca
 */

?>
<!-- Cabeçalho de Página de Busca -->
<header class="container-fluid" id="">
    <h1 class=""></h1>
</header>
<!-- Fim do cabeçalho de Página de Busca -->
<!-- Início do corpo da página -->
<div class="container-fluid">
    <div class="row">
        <main class="col-md-9">
            <?php 
            /**
             * The Loop
             */
            if( have_posts() ):
                while( have_posts() ):
                    the_post();
                    the_content();
                endwhile;
            endif;
            ?>
        </main>
        <?php 
        /**
         * Retorna a barra de navegação lateral
         */
        ion_get_element( 'nav', 'side' );
        ?>
    </div>
</div>
<!-- Fim de corpo de página -->
