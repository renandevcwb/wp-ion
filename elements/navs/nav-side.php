<?php 
/**
 * 
 * Barra de navegação lateral
 * 
 * @package wp-ion
 * 
 * @since 1.0.0
 * 
 */?>
<!-- Barra de navegação Lateral -->
<aside class="col-md-3">
    <div class="">
        <?php 
        if( has_nav_menu( 'side' ) ){

            print '<h3 class="">Navegue pelas opções</h3>';

            wp_nav_menu(
                array(
                    'theme_location' => 'side',
                    'container'      => false,
                    'menu_class'     => ''
                )
            );
            
        }
        ?>
    </div>
</aside>
<!-- Fim da Barra de Navegação Lateral -->
