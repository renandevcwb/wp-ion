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
$s            = get_search_query();
$args         = array( 's' => $s );
$search_query = new WP_Query( $args );
$search_count = $search_query->post_count;
?>
<!-- Cabeçalho de Página de Busca -->
<header class="container-fluid py-5">
    <div class="row d-flex align-items-center py-4">
        <div class="col text-center">
            <?php 
            if( !$search_query->have_posts() ){
                print '<h1 class="post-title">Sem resultados para a sua busca.</h1>';
            }elseif( $search_query->have_posts() && $search_count == '1' ){
                print '<h1 class="post-title">Foi encontrado 1 resultado para a sua busca.</h1>';
            }elseif( $search_query->have_posts() && $search_count >= '2' ){
                print '<h1 clas="post-title">Foram encontrados ' . $search_count . ' resultados para a sua busca.</h1>';
            }
            ?>
        </div>
    </div>
</header>
<!-- Fim do cabeçalho de Página de Busca -->
<!-- Início do corpo da página -->
<div class="container-fluid pb-5">
    <main class="row">
        <section class="col-md-8">
            <?php 
            /**
             * The Loop
             */
            if( $search_query->have_posts() ):
                while( $search_query->have_posts() ):
                    $search_query->the_post();
                    
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
