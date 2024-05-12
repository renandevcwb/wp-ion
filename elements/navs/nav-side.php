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
 <div class="col-md-1 spacing-nav-side"></div>
<!-- Barra de navegação Lateral -->
<aside class="col-md-3">
    <h3 class="side-title">Navegue pelas opções</h3>
    <?php 
    if( has_nav_menu( 'side' ) ){
        wp_nav_menu(
            array(
                'theme_location' => 'side',
                'container'      => false,
                'menu_class'     => 'nav flex-column navbar-side'
            )
        );    
    }
    ?>
</aside>
<!-- Fim da Barra de Navegação Lateral -->
