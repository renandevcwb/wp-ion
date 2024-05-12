<?php 
/**
 * 
 * Corpo de página de posts
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
            Blog Oficial
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
                    
                    /**
                     * Cria o card para a exibição do post
                     */
                    ?>
                    <a href="<?php echo the_permalink();?>" class="card border-0 rounded-0 all-post-card mb-5" target="_self">
                        <?php 
                            /**
                             * Consulta se há Thumbnail definada, se não, imprime uma padrão
                             */
                            if( has_post_thumbnail() ):
                                
                            elseif( !has_post_thumbnail() ):

                            endif;
                        ?>
                        <div class="card-body">
                            <h3 class="card-title">
                                <?php echo esc_html( the_title() );?>
                            </h3>
                            <p class="card-text">
                                <?php echo esc_html( get_the_excerpt() );?>
                            </p>
                        </div>
                    </a>
                    <?php 
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
