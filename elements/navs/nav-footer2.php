<?php 
/**
 * 
 * Barra de navegação Footer 2
 * 
 * @package wp-ion
 * 
 * @since 1.0.0
 * 
 */?>
<div class="col-md py-2">
    <h3 class="nav-footer-title">Conteúdo Relevante</h3>
    <div class="second-footer-navbar">
        <?php 
        if( has_nav_menu( 'footer2' ) ):
            wp_nav_menu(
                array(
                    'theme_location' => 'footer2',
                    'container'      => false,
                    'menu_class'     => 'nav flex-column nav-footer'
                )
            );
        endif;
        ?>
    </div>
</div>
