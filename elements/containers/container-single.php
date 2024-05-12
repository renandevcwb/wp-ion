<?php 
/**
 * 
 * Corpo de página de exibição de post 
 * 
 * @package wp-ion
 * 
 * @since 1.0.0
 * 
 */?>
<!-- Cabeçalho de Postagem -->
<header class="container-fluid py-5">
    <div class="row d-flex align-items-center text-center">
        <h1 class="post-title">
            <?php echo esc_html( the_title() );?>
        </h1>
    </div>
</header>
<!-- Fim do cabeçalho de Postagem -->
<!-- Início do corpo da página -->
<div class="container-fluid">
    <main class="row">
        <section class="col-md-8">
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
        </section>
        <?php 
        /**
         * Retorna a barra de navegação lateral
         */
        ion_get_element( 'nav', 'side' );
        ?>
    </main>
</div>
<!-- Fim de corpo de página -->
